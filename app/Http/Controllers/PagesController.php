<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function quiz()
    {
        return view('pages.quiz');
    }

    public function course()
    {
        return view('pages.course');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function subscribe()
    {
        return view('pages.subscribe');
    }

    public function search()
    {
        return view('pages.search');
    }

    //TEST VIEW

    public function reviewkana()
    {
        return view('pages.review_kana');
    }

    public function reviewgrammar()
    {
        return view('pages.review_grammar');
    }

    public function reviewvocab()
    {
        return view('pages.review_kosakata');
    }

    public function kanjisrs()
    {
        return view('pages.srs_kanji');
    }
}
