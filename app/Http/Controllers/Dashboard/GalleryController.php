<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function index(){

        $gallery = Gallery::orderBy("created_at","desc")->paginate(10);
        $type_menu = 'table-gallery';
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view("pages.dashboard.gallery.index",compact("gallery","type_menu"));
    }
    public function create() {
        $gallery = Gallery::all();
        $type_menu = 'create-gallery';

        return view ('pages.dashboard.gallery.create', compact('gallery','type_menu'));
    }
    public function edit(Request $request, $id) {
        $gallery = Gallery::findOrFail($id);
        $type_menu = 'update-gallery';
        return view ('pages.dashboard.gallery.edit', compact('type_menu','gallery'));
    }
    public function trash()
    {
        $gallery = Gallery::onlyTrashed()->get();
        $type_menu = 'trash-gallery-table';
        return view('pages.dashboard.gallery.trash', compact('gallery', 'type_menu'));
    }
    public function store(Request $request)
    {
        $gallery = Gallery::create($request->except('gallery'));

        // Tambahkan media
        foreach ($request->file('gallery') as $image) {
            if ($image->isValid()) {
                $gallery->addMedia($image)->toMediaCollection('gallery');
            }
        }

        Alert::toast('Success Create Data', 'success');
        return redirect('dashboard/gallery/table')->with('message', 'Success Created!');
    }

    public function update(Request $request, $id)
    {

        // Cari galeri yang akan diupdate
        $gallery = Gallery::findOrFail($id);

        // Hapus semua media yang terkait dengan galeri
        $gallery->clearMediaCollection('gallery');

        // Update image files if provided
            foreach ($request->file('gallery') as $image) {
                if ($image->isValid()) {
                    $gallery->addMedia($image)->toMediaCollection('gallery');
                }
            }
        Alert::toast('Success Update Data', 'success');
        return redirect()->back()->with('success', 'Images updated successfully');
    }

    public function delete($id)
    {
        // Cari galeri yang akan dipindahkan ke trash
        $gallery = Gallery::findOrFail($id);

        $files = $gallery->getMedia('gallery');
        foreach ($files as $file) {
            // Move media file to "trash" directory
            $file->move($gallery,'trash');
        }

        // Pindahkan ke trash
        $gallery->delete();
        Alert::toast('Success Delete Data', 'success');
        return redirect()->back()->with('success', 'Gallery moved to trash successfully');
    }

    public function restore($id)
    {
        // Cari galeri yang akan direstore dari trash
        $gallery = Gallery::onlyTrashed()->findOrFail($id);
        $files = $gallery->getMedia('trash');
        foreach ($files as $file) {
            // Move media file to "trash" directory
            $file->move($gallery,'gallery');
        }
        // Restore galeri
        $gallery->restore();
        Alert::toast('Success Restore Data', 'success');
        return redirect()->back()->with('success', 'Gallery restored successfully');
    }

    public function forceDelete($id)
    {
        // Cari galeri yang akan dihapus secara permanen
        $gallery = Gallery::onlyTrashed()->findOrFail($id);

        // Hapus secara permanen
        $gallery->forceDelete();
        Alert::toast('Success Delete Data', 'success');
        return redirect()->back()->with('success', 'Gallery permanently deleted successfully');
    }
}
