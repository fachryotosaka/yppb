<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $activities = Activity::all();
            $type_menu = 'dashboard';
            return view('pages.dashboard.dashboard', compact('activities','type_menu'));
        } else {
            return redirect()->Route('login');
        }


    }
}
