<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{   
    public function home(){
        return view('pages.home');
    }
    
    public function course()
    {
        return view('pages.course');
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

    public function search()
    {
        return view('pages.search');
    }
}
