<?php

namespace App\Http\Controllers;

use App\Model\DataPembelajaran;
use App\Model\KosaKata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $data_pembelajaran = DataPembelajaran::where('user_id',Auth::user()->id)->first();
        $array_kosakata = explode(',',$data_pembelajaran->kosa_kata_data);
        if (!in_array($kosaKata->id,$array_kosakata)) {

            array_push($array_kosakata,$kosaKata->id);
            $string_kosakata = implode(',',$array_kosakata);
            $data_pembelajaran->kosa_kata_data = $string_kosakata;
            $data_pembelajaran->save();
        }

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
