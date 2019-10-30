<?php

namespace App\Http\Controllers;

use App\Model\KosaKata;
use Illuminate\Http\Request;

class KosaKataController extends Controller
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
        return view('adminpriv.insertkosakata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kosaKata = new KosaKata();
        $kosaKata->jp_vocab = $request->jp_vocab;
        $kosaKata->eng_vocab = $request->eng_vocab;
        $kosaKata->contoh_kalimat = $request->contoh_kalimat;
        $kosaKata->save();

        return redirect('/')->with('success','Insert Kosa Kata Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\KosaKata  $kosaKata
     * @return \Illuminate\Http\Response
     */
    public function show(KosaKata $kosaKata)
    {
        return view('pages.showcourse_kosakata',compact('kosaKata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\KosaKata  $kosaKata
     * @return \Illuminate\Http\Response
     */
    public function edit(KosaKata $kosaKata)
    {
        return view('adminpriv.editkosaKata')->with('kosaKata', $kosaKata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\KosaKata  $kosaKata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KosaKata $kosaKata)
    {
        $kosaKata->jp_vocab = $request->jp_vocab;
        $kosaKata->eng_vocab = $request->eng_vocab;
        $kosaKata->contoh_kalimat = $request->contoh_kalimat;
        $kosaKata->save();

        return redirect('/')->with('success','Insert Kosa Kata Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\KosaKata  $kosaKata
     * @return \Illuminate\Http\Response
     */
    public function destroy(KosaKata $kosaKata)
    {
        dd($kosaKata);
        $kosaKata->delete();
        return redirect()->back()->with('success', 'Kosa Kata berhasil dihapus');
    }
}
