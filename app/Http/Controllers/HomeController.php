<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function rooms(){
        return view('rooms.index');
    }

    public function blogs()
    {
        return view('blogs.index');
    }
    public function contact_us(){
        return view('contactus.index');
    }
}
