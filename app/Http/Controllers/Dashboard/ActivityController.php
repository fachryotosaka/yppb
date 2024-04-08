<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use App\Helpers\Helper;
use App\Models\Activity;
use App\Models\Category;
use App\Models\PaymentM;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Traits\ImageUploadingTrait;


class ActivityController extends Controller
{

    use ImageUploadingTrait;


    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){

        $activities = Activity::orderBy("created_at","desc")->paginate(10);
        $type_menu = 'table-activity';
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view("pages.dashboard.activity.index",compact("activities","type_menu"));
    }

    public function create() {
        $activities = Activity::all();
        $categories = Category::pluck('name', 'id');
        $publishers = Publisher::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');
        $payments = PaymentM::pluck('name', 'id');
        $type_menu = 'create-activity';

        return view ('pages.dashboard.activity.create', compact('categories','tags','activities','publishers','type_menu','payments'));
    }

    public function store(Request $request)
    {
        $cleanedDesc = Helper::cleanText($request->input('desc'));

        $activity = Activity::create(array_merge(
            $request->except(['image', 'desc']),
            ['desc' => $cleanedDesc]
        ));

        $activity->tags()->attach($request->input('tags', []));

        foreach ($request->file('image') as $image) {
            if ($image->isValid()) {
                $activity->addMedia($image)->toMediaCollection('images');
            }
        }

        Alert::toast('Success Create Data', 'success');
        return redirect('dashboard/activity/table')->with('message', 'Success Created!');
    }

    public function edit(Request $request, $slug) {
        $activities = Activity::where('slug', $slug)->firstOrFail();
        $categories = Category::pluck('name', 'id');
        $publishers = Publisher::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');
        $payments = PaymentM::pluck('name', 'id');
        $type_menu = 'update-activity';
        $selectedTags = $activities->tags->pluck('id')->toArray();

        return view ('pages.dashboard.activity.edit', compact('payments','categories','tags','activities','publishers','type_menu','selectedTags'));
    }

    public function update(Request $request, $id){
        $activity = Activity::findOrFail($id);

        $cleanedDesc = Helper::cleanText($request->input('desc'));

        $activity->update(array_merge(
            $request->except(['image', 'desc']),
            ['desc' => $cleanedDesc]
        ));

        $tags = $request->input('tags', []);
        $activity->tags()->sync($tags);

        $activity->clearMediaCollection('images');

        // Update image files if provided
            foreach ($request->file('image') as $image) {
                if ($image->isValid()) {
                    $activity->addMedia($image)->toMediaCollection('images');
                }
            }


        Alert::toast('Success Update Data', 'success');

        return redirect('dashboard/activity/table')->with('message', 'Success Updated!');
    }

    public function destroy($id)
    {
        $activities = Activity::findOrFail($id);

        // Delete associated media files
        $files = $activities->getMedia('images');
        foreach ($files as $file) {
            // Move media file to "trash" directory
            $file->move($activities,'trash');
        }

        // Delete activity
        $activities->delete();

        Alert::toast('Success Move Data To Trash','success');
        return redirect('dashboard/activity/table')->with('message', 'Success Delete Data !');
    }

    public function trash()
    {
        $activities = Activity::onlyTrashed()->get();
        $type_menu = 'trash-table-activity';
        return view('pages.dashboard.activity.trash', compact('activities', 'type_menu'));
    }

    public function restore($id)
    {
        $activities = Activity::onlyTrashed()->findOrFail($id);
        $files = $activities->getMedia('trash');
        foreach ($files as $file) {
            $file->move($activities,'images');
        }
        $activities->restore();

        Alert::toast('Success Restore Data','success');
        return redirect('dashboard/activity/table')->with('message', 'Success Delete Data !');

    }

    public function force($id)
    {
        $activities = Activity::onlyTrashed()->findOrFail($id);
        $activities->getMedia('trash');
        $activities->clearMediaCollection('trash');
        Schema::disableForeignKeyConstraints();
        $activities->forceDelete();
        Schema::enableForeignKeyConstraints();

        Alert::toast('Success Force Data','success');
        return redirect('dashboard/activity/table')->with('message', 'Success Delete Data !');

    }
}
