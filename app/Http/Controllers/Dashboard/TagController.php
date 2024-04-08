<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){

        $tags = Tag::orderBy("created_at","desc")->paginate(10);
        $type_menu = 'table-tag';
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view("pages.dashboard.tag.index",compact("tags","type_menu"));
    }

    public function create() {
        $tags = Tag::all();
        $type_menu = 'create-tag';

        return view ('pages.dashboard.tag.create', compact('tags','type_menu'));
    }

        public function store(Request $request){
            $tags = Tag::create($request->all());

            Alert::toast('Success Create Data','success');
            return redirect('dashboard/tag/table')->with('message', 'Success Created !');
        }

    public function edit(Request $request, $slug) {
        $tags = Tag::where('slug', $slug)->firstOrFail();
        $type_menu = 'update-tag';

        return view ('pages.dashboard.tag.edit', compact('tags','type_menu'));
    }

    public function update(Request $request, $id){
        $tags = Tag::findOrFail($id);
        $tags->update($request->all());

        Alert::toast('Success Update Data','success');

        return redirect('dashboard/tag/table')->with('message', 'Success Created !');
    }

    public function destroy($id)
    {
        $tags = Tag::findOrFail($id);
        $tags->delete();

        Alert::toast('Success Move Data To Trash','success');
        return redirect('dashboard/tag/table')->with('message', 'Success Delete Data !');
    }

    public function trash()
    {
        $tags = Tag::onlyTrashed()->get();
        $type_menu = 'trash-table-Tag';
        return view('pages.dashboard.tag.trash', compact('tags', 'type_menu'));
    }

    public function restore($id)
    {
        $tags = Tag::onlyTrashed()->findOrFail($id);
        $tags->restore();

        Alert::toast('Success Restore Data','success');
        return redirect('dashboard/tag/table')->with('message', 'Success Delete Data !');

    }

    public function force($id)
    {
        $tags = Tag::onlyTrashed()->findOrFail($id);
        Schema::disableForeignKeyConstraints();
        $tags->forceDelete();
        Schema::enableForeignKeyConstraints();

        Alert::toast('Success Force Data','success');
        return redirect('dashboard/Tag/table')->with('message', 'Success Delete Data !');

    }
}
