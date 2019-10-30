<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{   
    public function home(){
        return view('pages.home');
    }

    public function menu_course(){
        return view('sementara.courses');
    }

    public function blog(){
        return view('sementara.blog');
    }

    public function contact(){
        return view('sementara.contact');
    }

    public function subscribe(){
        return view('pages.subscribe');
    }
}
