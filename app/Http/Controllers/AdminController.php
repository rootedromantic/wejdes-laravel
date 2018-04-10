<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dash')->with(['active' => 'dash']);
    }

    public function posts()
    {
        return view('admin.posts')->with(['active' => 'posts']);
    }

    public function profileSettings()
    {
        return view('admin.profileSettings')->with(['active' => 'user-settings']);
    }
    public function profileSocial()
    {
        return view('admin.profileSocial')->with(['active' => 'user-social']);
    }

    public function comments()
    {
        return view('admin.comments')->with(['active' => 'comments']);
    }

    public function newsletter()
    {
        return view('admin.newsletter')->with(['active' => 'newsletter']);
    }

    public function settings()
    {
        return view('admin.settings')->with(['active' => 'settings']);
    }
}

