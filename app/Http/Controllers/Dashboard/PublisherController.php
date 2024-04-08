<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use RealRashid\SweetAlert\Facades\Alert;

class PublisherController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){

        $publishers = Publisher::orderBy("created_at","desc")->paginate(10);
        $type_menu = 'table-publisher';
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view("pages.dashboard.publisher.index",compact("publishers","type_menu"));
    }

    public function create() {
        $publishers = Publisher::all();
        $type_menu = 'create-publisher';

        return view ('pages.dashboard.publisher.create', compact('publishers','type_menu'));
    }

        public function store(Request $request){
            $publishers = Publisher::create($request->all());

            Alert::toast('Success Create Data','success');
            return redirect('dashboard/publisher/table')->with('message', 'Success Created !');
        }

    public function edit(Request $request, $slug) {
        $publishers = Publisher::where('slug', $slug)->firstOrFail();
        $type_menu = 'update-publisher';

        return view ('pages.dashboard.publisher.edit', compact('publishers','type_menu'));
    }

    public function update(Request $request, $id){
        $publishers = Publisher::findOrFail($id);
        $publishers->update($request->all());

        Alert::toast('Success Update Data','success');

        return redirect('dashboard/publisher/table')->with('message', 'Success Created !');
    }

    public function destroy($id)
    {
        $publishers = Publisher::findOrFail($id);
        $publishers->delete();

        Alert::toast('Success Move Data To Trash','success');
        return redirect('dashboard/publisher/table')->with('message', 'Success Delete Data !');
    }

    public function trash()
    {
        $publishers = Publisher::onlyTrashed()->get();
        $type_menu = 'trash-table-publisher';
        return view('pages.dashboard.publisher.trash', compact('publishers', 'type_menu'));
    }

    public function restore($id)
    {
        $publishers = Publisher::onlyTrashed()->findOrFail($id);
        $publishers->restore();

        Alert::toast('Success Restore Data','success');
        return redirect('dashboard/publisher/table')->with('message', 'Success Delete Data !');

    }

    public function force($id)
    {
        $publishers = Publisher::onlyTrashed()->findOrFail($id);
        Schema::disableForeignKeyConstraints();
        $publishers->forceDelete();
        Schema::enableForeignKeyConstraints();

        Alert::toast('Success Force Data','success');
        return redirect('dashboard/publisher/table')->with('message', 'Success Delete Data !');

    }
}
