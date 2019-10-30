<?php

namespace App\Http\Controllers;

use App\Model\Grammar;
use Illuminate\Http\Request;

class GrammarController extends Controller
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
        return view('adminpriv.insertgrammar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grammar = new Grammar();
        $grammar->judul_grammar = $request->judul_grammar;
        $grammar->arti_grammar = $request->arti_grammar;
        $grammar->formula_grammar = $request->formula_grammar;
        $grammar->contoh_kalimat = $request->contoh_kalimat;
        $grammar->save();

        return redirect('/')->with('success','Insert Grammar Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Grammar  $grammar
     * @return \Illuminate\Http\Response
     */
    public function show(Grammar $grammar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Grammar  $grammar
     * @return \Illuminate\Http\Response
     */
    public function edit(Grammar $grammar)
    {
        return view('adminpriv.editgrammar')->with('grammar', $grammar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Grammar  $grammar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grammar $grammar)
    {
        $grammar->judul_grammar = $request->judul_grammar;
        $grammar->arti_grammar = $request->arti_grammar;
        $grammar->formula_grammar = $request->formula_grammar;
        $grammar->contoh_kalimat = $request->contoh_kalimat;
        $grammar->save();

        return redirect('/')->with('success','Insert Grammar Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Grammar  $grammar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grammar $grammar)
    {
        $grammar->delete();
        return redirect()->back()->with('success', 'Grammar berhasil dihapus');
    }
}
