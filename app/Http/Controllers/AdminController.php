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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function posts()
    {
        return view('Admin_pages.post');
    }
    public function addpost()
    {
        return view('Admin_pages.create-post');
    }

    public function editpost($ids)
    {
        return view('Admin_pages.edit-post', compact('ids'));
    }
}