<?php

namespace App\Http\Controllers;

use App\Model\DataPembelajaran;
use App\Model\Grammar;
use App\Model\JLPT;
use App\Model\Kanji;
use App\Model\KosaKata;
use App\Model\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JLPTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\JLPT  $jLPT
     * @return \Illuminate\Http\Response
     */
    public function show(JLPT $jLPT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\JLPT  $jLPT
     * @return \Illuminate\Http\Response
     */
    public function edit(JLPT $jLPT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\JLPT  $jLPT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JLPT $jLPT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\JLPT  $jLPT
     * @return \Illuminate\Http\Response
     */
    public function destroy(JLPT $jLPT)
    {
        //
    }

    /**
     * Return the listing of certain JLPT kanjis.
     *
     * @param  integer jlpt
     * @return \Illuminate\Http\Response
     */
    public function kanjiIndex($jlpt)
    {
        $kanjis = JLPT::find($jlpt)->kanji()->get();
        // dd($kanjis);
        return view('pages.kanji_course',compact('kanjis','jlpt'));
    }

    /**
     * Return the listing of certain JLPT kanjis.
     *
     * @param  integer jlpt
     * @return \Illuminate\Http\Response
     */
    public function grammarIndex($jlpt)
    {
        $grammars = Grammar::all();
        // dd($grammars);
        return view('pages.grammar_course',compact('grammars','jlpt'));
    }

    /**
     * Return the listing of certain JLPT kanjis.
     *
     * @param  integer jlpt
     * @return \Illuminate\Http\Response
     */
    public function kosakataIndex($jlpt)
    {
        $kosakatas = KosaKata::all();
        // dd($kosakatas);
        return view('pages.kosakata_course',compact('kosakatas','jlpt'));
    }
}
