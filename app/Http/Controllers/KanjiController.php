<?php

namespace App\Http\Controllers;

use App\Model\Kanji;
use Illuminate\Http\Request;

class KanjiController extends Controller
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
        return view('adminpriv.insertkanji');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kanji = new Kanji();
        $kanji->keyword = $request->K_Keyword;
        $kanji->kanji = $request->K_Kanji;
        $kanji->stroke_diagram = $request->K_StrokeDiagram;
        $kanji->constituent = $request->K_Constituent;
        $kanji->stroke_count = $request->K_StrokeCount;
        $kanji->lesson_no = $request->K_LessonNo;
        $kanji->story = $request->K_Story;
        $kanji->on_yomi = $request->K_OnYomi;
        $kanji->kun_yomi = $request->K_KunYomi;
        $kanji->jlpt_id = $request->K_JLPT;
        $kanji->jouyou_id = $request->K_JouYou;
        $kanji->save();

        return redirect('/')->with('success','Insert Kanji Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function show(Kanji $kanji)
    {
        // dd($kanji);
        return view('pages.showcourse_kanji',compact('kanji'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function edit(Kanji $kanji)
    {
        return view('adminpriv.editkanji')->with('kanji', $kanji);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kanji $kanji)
    {
        $kanji->ID_Kanji = $request->ID_Kanji;
        $kanji->K_Keyword = $request->K_Keyword;
        $kanji->K_Kanji = $request->K_Kanji;
        $kanji->K_StrokeDiagram = $request->K_StrokeDiagram;
        $kanji->K_Constituent = $request->K_Constituent;
        $kanji->K_StrokeCount = $request->K_StrokeCount;
        $kanji->K_LessonNo = $request->K_LessonNo;
        $kanji->K_Story = $request->K_Story;
        $kanji->K_JouYou = $request->K_JouYou;
        $kanji->K_JLPT = $request->K_JLPT;
        $kanji->K_OnYomi = $request->K_OnYomi;
        $kanji->K_KunYomi = $request->K_KunYomi;
        $kanji->save();

        return redirect('/')->with('success', 'Edit kanji berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Kanji  $kanji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kanji $kanji)
    {
        $kanji->delete();
        return redirect()->back()->with('success', 'Kanji berhasil dihapus');
    }
}
