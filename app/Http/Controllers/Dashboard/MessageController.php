<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::all();
        $type_menu = "messages";
        return view("pages.dashboard.message.index",compact("messages","type_menu"));
    }

    public function store(Request $request)
    {

        $messages = Message::create($request->all());

        Alert::toast('Success', 'success');
        return redirect('/contact')->with('message', 'Success Created!');
    }
}
