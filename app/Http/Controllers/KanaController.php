<?php

namespace App\Http\Controllers;

use App\Model\Kana;
use Illuminate\Http\Request;

class KanaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param @string KN_Tipe
     * @return \Illuminate\Http\Response
     */
    public function index($KN_Tipe)
    {
        $kanas = Kana::where('tipe',$KN_Tipe)->get();
        if ($kanas->count() == 0) {
            return redirect('/course')->with('error','Kana tidak ditemukan');
        }
        return view('pages.kana_course',compact('kanas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpriv.insertkana');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kana = new Kana();
        $kana->kana = $request->KN_Kana;
        $kana->keyword = $request->KN_Reading;
        $kana->tipe = $request->KN_Tipe;
        $kana->save();

        return redirect('/')->with('success','Insert Kana Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Kana  $kana
     * @return \Illuminate\Http\Response
     */
    public function show(Kana $kana)
    {
        return view('pages.showcourse_kana',compact('kana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Kana  $kana
     * @return \Illuminate\Http\Response
     */
    public function edit(Kana $kana)
    {
        return view('adminpriv.editkana')->with('kana', $kana);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Kana  $kana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kana $kana)
    {
        $kana->kana = $request->KN_Kana;
        $kana->keyword = $request->KN_Reading;
        $kana->tipe = $request->KN_Tipe;
        $kana->save();

        return redirect('/')->with('success','Insert Kana Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Kana  $kana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kana $kana)
    {
        $kana->delete();
        return redirect()->back()->with('success', 'Kana berhasil dihapus');
    }
}
