<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){

        $categories = Category::orderBy("created_at","desc")->paginate(10);
        $type_menu = 'table-category';
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view("pages.dashboard.category.index",compact("categories","type_menu"));
    }

    public function create() {
        $categories = Category::all();
        $type_menu = 'create-category';

        return view ('pages.dashboard.category.create', compact('categories','type_menu'));
    }

        public function store(Request $request){
            $categories = Category::create($request->all());

            Alert::toast('Success Create Data','success');
            return redirect('dashboard/category/table')->with('message', 'Success Created !');
        }

    public function edit(Request $request, $slug) {
        $categories = Category::where('slug', $slug)->firstOrFail();
        $type_menu = 'update-category';

        return view ('pages.dashboard.category.edit', compact('categories','type_menu'));
    }

    public function update(Request $request, $id){
        $categories = Category::findOrFail($id);
        $categories->update($request->all());

        Alert::toast('Success Update Data','success');

        return redirect('dashboard/category/table')->with('message', 'Success Created !');
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();

        Alert::toast('Success Move Data To Trash','success');
        return redirect('dashboard/category/table')->with('message', 'Success Delete Data !');
    }

    public function trash()
    {
        $categories = Category::onlyTrashed()->get();
        $type_menu = 'trash-table-category';
        return view('pages.dashboard.category.trash', compact('categories', 'type_menu'));
    }

    public function restore($id)
    {
        $categories = Category::onlyTrashed()->findOrFail($id);
        $categories->restore();

        Alert::toast('Success Restore Data','success');
        return redirect('dashboard/category/table')->with('message', 'Success Delete Data !');

    }

    public function force($id)
    {
        $categories = Category::onlyTrashed()->findOrFail($id);
        Schema::disableForeignKeyConstraints();
        $categories->forceDelete();
        Schema::enableForeignKeyConstraints();

        Alert::toast('Success Force Data','success');
        return redirect('dashboard/category/table')->with('message', 'Success Delete Data !');

    }
}
