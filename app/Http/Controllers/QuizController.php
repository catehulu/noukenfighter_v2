<?php

namespace App\Http\Controllers;

use App\Model\Quiz;
use App\Model\DataPembelajaran;
use App\Model\Grammar;
use App\Model\JLPT;
use App\Model\Kana;
use App\Model\Kanji;
use App\Model\KosaKata;
use App\Model\SRS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
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
     * @param  \App\Model\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }

    public function result(Request $request){
        $data_pembelajaran = DataPembelajaran::where('user_id',Auth::user()->id)->first();
        $quiz = Quiz::find($data_pembelajaran->current_quiz);
        if ($quiz->skor) {

            $quiz->data_soal = json_decode($quiz->data_soal);
            $quiz->data_jawaban = json_decode($quiz->data_jawaban);
            $quiz->kunci_jawaban = json_decode($quiz->kunci_jawaban);
            $quiz->jawaban_peserta = json_decode($quiz->jawaban_peserta);
            // dd($quiz);
            
            $data_pembelajaran->current_quiz = null;
            $data_pembelajaran->save();
            return view('pages.result',compact('quiz'));
        } else {
            $quiz_answer = json_decode($quiz->kunci_jawaban);
            $answers = $request->answer;
            $score = 0;
            foreach ($answers as $key => $answer) {
                if ($answer == $quiz_answer[$key]) {
                    $score++;
                }
            }
    
            $final_score = $score;
            $quiz->skor = $final_score;
            $quiz->jawaban_peserta = json_encode($answers);
            $quiz->save();
            $data_pembelajaran->current_quiz = null;
            $data_pembelajaran->save();

            $quiz->data_soal = json_decode($quiz->data_soal);
            $quiz->data_jawaban = json_decode($quiz->data_jawaban);
            $quiz->kunci_jawaban = json_decode($quiz->kunci_jawaban);
            $quiz->jawaban_peserta = json_decode($quiz->jawaban_peserta);
    
            return view('pages.result',compact('quiz'));
        }
        
    }

    // public function quizKanji($jlpt) {
    //     $data_pembelajaran = DataPembelajaran::where('user_id',Auth::user()->id)->first();
    //     if ($data_pembelajaran->current_quiz) {
    //         $quiz = Quiz::find($data_pembelajaran->current_quiz);
    
    //         $quizs = array(
    //             'data_soal' => json_decode($quiz->data_soal),
    //             'data_jawaban' => json_decode($quiz->data_jawaban),
    //             'kunci_jawaban' => json_decode($quiz->kunci_jawaban),
    //             'keterangan' => $quiz->keterangan
    //         );

    //         // dd($quizs);
    //         return view('pages.attemptquiz',compact('quizs'));
    //     }else {
    //         $data_srs_array = explode(',',$data_pembelajaran->srs_data);
    //         $data_srs = SRS::whereIn('id',$data_srs_array)->pluck('kanji_id')->toArray();
    //         $all_kanji = JLPT::find($jlpt)->kanji()->pluck('id')->toArray();
    //         $number_randomizer_all = range(0, count($all_kanji));
    //         $number_randomizer_known = range(0, count($data_srs));
    //         $fixed_question = array();
    //         $fixed_answer = array();
    //         $fixed_choices = array();

    //         $temp_nra = $number_randomizer_all;
    //         $temp_nrk = $number_randomizer_known;
    //         $n = 0;
    //         while ($n < 5 && count($data_srs) > 0) {
    //             $choices_array = array();
    //             // var_dump($data_srs);
    //             $random = mt_rand(0,count($data_srs)-1);
    //             array_push($fixed_question,$data_srs[$random]);
    //             array_push($fixed_answer,$data_srs[$random]);
    //             array_push($choices_array,$data_srs[$random]);
    //             unset($data_srs[$random]);
    //             $data_srs = array_values($data_srs);
    //             while (count($choices_array) < 4) {
    //                 $random = mt_rand(0,  count($all_kanji)-1);
    //                 if (!in_array($all_kanji[$random],$choices_array)) {
    //                     array_push($choices_array,$all_kanji[$random]);
    //                 }
    //             }
    //             array_push($fixed_choices,$choices_array);
    //             $n = $n+1;
    //         }
    //         $n = 0;
    //         while ($n < 5 && count($all_kanji)) {
    //             $choices_array = array();
    //             $random = mt_rand(0,count($all_kanji)-1);
    //             if (!in_array($all_kanji[$random],$fixed_question)) {
    //                 array_push($fixed_question,$all_kanji[$random]);
    //                 array_push($fixed_answer,$all_kanji[$random]);
    //                 array_push($choices_array,$all_kanji[$random]);
    //                 unset($all_kanji[$random]);
    //                 $all_kanji = array_values($all_kanji);
    //                 while (count($choices_array) < 4) {
    //                     $random = mt_rand(0, count($all_kanji)-1);
    //                     if (!in_array($all_kanji[$random],$choices_array)) {
    //                         array_push($choices_array,$all_kanji[$random]);
    //                     }
    //                 }
    //                 array_push($fixed_choices,$choices_array);
    //                 $n = $n+1;
    //             }
    //         }

    //         $final_question = array();
    //         $final_answer = array();
    //         $final_choices = array();

    //         $quiz = new Quiz();
    //         $quiz->keterangan = 'Kanji';
    //         $quiz->data_pembelajaran_id = $data_pembelajaran->id;
    //         foreach ($fixed_question as $key => $kanji_id) {
    //             $choices = array();
    //             $kanji = Kanji::find($kanji_id);
    //             array_push($final_question,$kanji->kanji);
    //             array_push($final_answer,$kanji->keyword);
    //             array_push($choices,$kanji->keyword);
    //             for ($i=1; $i < 4; $i++) { 
    //                 $choice = Kanji::find($fixed_choices[$key][$i]);
    //                 array_push($choices,$choice->keyword);
    //             }
    //             shuffle($choices);
    //             array_push($final_choices,$choices);
    //         }

    //         $quiz->data_soal = json_encode($final_question);
    //         $quiz->data_jawaban = json_encode($final_choices);
    //         $quiz->kunci_jawaban = json_encode($final_answer);
    //         $quiz->save();

            
    //         $data_pembelajaran->current_quiz = $quiz->id;
    //         $data_pembelajaran->save();

    //         $quizs = array(
    //             'data_soal' => json_decode($quiz->data_soal),
    //             'data_jawaban' => json_decode($quiz->data_jawaban),
    //             'kunci_jawaban' => json_decode($quiz->kunci_jawaban),
    //             'keterangan' => $quiz->keterangan
    //         );

    //         return view('pages.attemptquiz',compact('quizs'));
    //     }
    // }

    

    public function quizKana($KN_Tipe) {
        $data_pembelajaran = DataPembelajaran::where('user_id',Auth::user()->id)->first();
        if ($data_pembelajaran->current_quiz) {
            $quiz = Quiz::find($data_pembelajaran->current_quiz);
    
            $quizs = array(
                'data_soal' => json_decode($quiz->data_soal),
                'data_jawaban' => json_decode($quiz->data_jawaban),
                'kunci_jawaban' => json_decode($quiz->kunci_jawaban),
                'keterangan' => $quiz->keterangan
            );
            // dd($quizs);
            return view('pages.attemptquiz',compact('quizs'));
        }else {
            $all_kana = Kana::where('tipe',$KN_Tipe)->pluck('id')->toArray();
            $fixed_question = array();
            $fixed_answer = array();
            $fixed_choices = array();

            $n = 0;
            while ($n < 10 && count($all_kana) > 0) {
                $choices_array = array();
                // var_dump($data_srs);
                $random = mt_rand(0,count($all_kana)-1);
                array_push($fixed_question,$all_kana[$random]);
                array_push($fixed_answer,$all_kana[$random]);
                array_push($choices_array,$all_kana[$random]);
                unset($all_kana[$random]);
                $all_kana = array_values($all_kana);
                while (count($choices_array) < 4) {
                    $random = mt_rand(0,  count($all_kana)-1);
                    if (!in_array($all_kana[$random],$choices_array)) {
                        array_push($choices_array,$all_kana[$random]);
                    }
                }
                array_push($fixed_choices,$choices_array);
                $n = $n+1;
            }
           
            $final_question = array();
            $final_answer = array();
            $final_choices = array();

            $quiz = new Quiz();
            $quiz->keterangan = $KN_Tipe;
            $quiz->data_pembelajaran_id = $data_pembelajaran->id;
            foreach ($fixed_question as $key => $kana_id) {
                $choices = array();
                $kana = Kana::find($kana_id);
                array_push($final_question,$kana->kana);
                array_push($final_answer,$kana->reading);
                array_push($choices,$kana->reading);
                for ($i=1; $i < 4; $i++) { 
                    $choice = Kana::find($fixed_choices[$key][$i]);
                    array_push($choices,$choice->reading);
                }
                shuffle($choices);
                array_push($final_choices,$choices);
            }

            $quiz->data_soal = json_encode($final_question);
            $quiz->data_jawaban = json_encode($final_choices);
            $quiz->kunci_jawaban = json_encode($final_answer);
            $quiz->save();

            
            $data_pembelajaran->current_quiz = $quiz->id;
            $data_pembelajaran->save();

            $quizs = array(
                'data_soal' => json_decode($quiz->data_soal),
                'data_jawaban' => json_decode($quiz->data_jawaban),
                'kunci_jawaban' => json_decode($quiz->kunci_jawaban),
                'keterangan' => $quiz->keterangan
            );

            return view('pages.attemptquiz',compact('quizs'));
        }
    }

    
    public function quizGrammar($jlpt) {
        $data_pembelajaran = DataPembelajaran::where('user_id',Auth::user()->id)->first();
        if ($data_pembelajaran->current_quiz) {
            $quiz = Quiz::find($data_pembelajaran->current_quiz);
    
            $quizs = array(
                'data_soal' => json_decode($quiz->data_soal),
                'data_jawaban' => json_decode($quiz->data_jawaban),
                'kunci_jawaban' => json_decode($quiz->kunci_jawaban),
                'keterangan' => $quiz->keterangan
            );
            // dd($quizs);
            return view('pages.attemptquiz',compact('quizs'));
        }else {
            $known_grammar = explode(',',$data_pembelajaran->grammar_data);
            $all_grammar = Grammar::all()->pluck('id')->toArray();
            $fixed_question = array();
            $fixed_answer = array();
            $fixed_choices = array();

            $n = 0;
            while ($n < 5 && count($known_grammar) > 0) {
                $choices_array = array();
                // var_dump($known_grammar);
                $random = mt_rand(0,count($known_grammar)-1);
                array_push($fixed_question,$known_grammar[$random]);
                array_push($fixed_answer,$known_grammar[$random]);
                array_push($choices_array,$known_grammar[$random]);
                unset($known_grammar[$random]);
                $known_grammar = array_values($known_grammar);
                while (count($choices_array) < 4) {
                    $random = mt_rand(0,  count($all_grammar)-1);
                    if (!in_array($all_grammar[$random],$choices_array)) {
                        array_push($choices_array,$all_grammar[$random]);
                    }
                }
                array_push($fixed_choices,$choices_array);
                $n = $n+1;
            }
            $n = 0;
            while ($n < 5 && count($all_grammar)) {
                $choices_array = array();
                $random = mt_rand(0,count($all_grammar)-1);
                if (!in_array($all_grammar[$random],$fixed_question)) {
                    array_push($fixed_question,$all_grammar[$random]);
                    array_push($fixed_answer,$all_grammar[$random]);
                    array_push($choices_array,$all_grammar[$random]);
                    unset($all_grammar[$random]);
                    $all_grammar = array_values($all_grammar);
                    while (count($choices_array) < 4) {
                        $random = mt_rand(0, count($all_grammar)-1);
                        if (!in_array($all_grammar[$random],$choices_array)) {
                            array_push($choices_array,$all_grammar[$random]);
                        }
                    }
                    array_push($fixed_choices,$choices_array);
                    $n = $n+1;
                }
            }

            $final_question = array();
            $final_answer = array();
            $final_choices = array();

            $quiz = new Quiz();
            $quiz->keterangan = 'Grammar';
            $quiz->data_pembelajaran_id = $data_pembelajaran->id;
            foreach ($fixed_question as $key => $grammar_id) {
                $choices = array();
                $grammar = Grammar::find($grammar_id);
                array_push($final_question,$grammar->judul_grammar);
                array_push($final_answer,$grammar->formula_grammar);
                array_push($choices,$grammar->formula_grammar);
                for ($i=1; $i < 4; $i++) { 
                    $choice = Grammar::find($fixed_choices[$key][$i]);
                    array_push($choices,$choice->formula_grammar);
                }
                shuffle($choices);
                array_push($final_choices,$choices);
            }

            $quiz->data_soal = json_encode($final_question);
            $quiz->data_jawaban = json_encode($final_choices);
            $quiz->kunci_jawaban = json_encode($final_answer);
            $quiz->save();

            
            $data_pembelajaran->current_quiz = $quiz->id;
            $data_pembelajaran->save();

            $quizs = array(
                'data_soal' => json_decode($quiz->data_soal),
                'data_jawaban' => json_decode($quiz->data_jawaban),
                'kunci_jawaban' => json_decode($quiz->kunci_jawaban),
                'keterangan' => $quiz->keterangan
            );

            return view('pages.attemptquiz',compact('quizs'));
        }
    }

    
    public function quizKosaKata($jlpt) {
        $data_pembelajaran = DataPembelajaran::where('user_id',Auth::user()->id)->first();
        if ($data_pembelajaran->current_quiz) {
            $quiz = Quiz::find($data_pembelajaran->current_quiz);
    
            $quizs = array(
                'data_soal' => json_decode($quiz->data_soal),
                'data_jawaban' => json_decode($quiz->data_jawaban),
                'kunci_jawaban' => json_decode($quiz->kunci_jawaban),
                'keterangan' => $quiz->keterangan
            );
            // dd($quizs);
            return view('pages.attemptquiz',compact('quizs'));
        }else {
            $known_kosa_kata = explode(',',$data_pembelajaran->kosa_kata_data);
            $all_kosa_kata = KosaKata::all()->pluck('id')->toArray();
            $fixed_question = array();
            $fixed_answer = array();
            $fixed_choices = array();

            $n = 0;
            while ($n < 5 && count($known_kosa_kata) > 0) {
                $choices_array = array();
                // var_dump($known_kosa_kata);
                $random = mt_rand(0,count($known_kosa_kata)-1);
                array_push($fixed_question,$known_kosa_kata[$random]);
                array_push($fixed_answer,$known_kosa_kata[$random]);
                array_push($choices_array,$known_kosa_kata[$random]);
                unset($known_kosa_kata[$random]);
                $known_kosa_kata = array_values($known_kosa_kata);
                while (count($choices_array) < 4) {
                    $random = mt_rand(0,  count($all_kosa_kata)-1);
                    if (!in_array($all_kosa_kata[$random],$choices_array)) {
                        array_push($choices_array,$all_kosa_kata[$random]);
                    }
                }
                array_push($fixed_choices,$choices_array);
                $n = $n+1;
            }
            $n = 0;
            while ($n < 5 && count($all_kosa_kata)) {
                $choices_array = array();
                $random = mt_rand(0,count($all_kosa_kata)-1);
                if (!in_array($all_kosa_kata[$random],$fixed_question)) {
                    array_push($fixed_question,$all_kosa_kata[$random]);
                    array_push($fixed_answer,$all_kosa_kata[$random]);
                    array_push($choices_array,$all_kosa_kata[$random]);
                    unset($all_kosa_kata[$random]);
                    $all_kosa_kata = array_values($all_kosa_kata);
                    while (count($choices_array) < 4) {
                        $random = mt_rand(0, count($all_kosa_kata)-1);
                        if (!in_array($all_kosa_kata[$random],$choices_array)) {
                            array_push($choices_array,$all_kosa_kata[$random]);
                        }
                    }
                    array_push($fixed_choices,$choices_array);
                    $n = $n+1;
                }
            }

            $final_question = array();
            $final_answer = array();
            $final_choices = array();

            $quiz = new Quiz();
            $quiz->keterangan = 'Kosa Kata';
            $quiz->data_pembelajaran_id = $data_pembelajaran->id;
            foreach ($fixed_question as $key => $kosa_kata_id) {
                $choices = array();
                $kosa_kata = KosaKata::find($kosa_kata_id);
                array_push($final_question,$kosa_kata->jp_vocab);
                array_push($final_answer,$kosa_kata->eng_vocab);
                array_push($choices,$kosa_kata->eng_vocab);
                for ($i=1; $i < 4; $i++) { 
                    $choice = KosaKata::find($fixed_choices[$key][$i]);
                    array_push($choices,$choice->eng_vocab);
                }
                shuffle($choices);
                array_push($final_choices,$choices);
            }

            $quiz->data_soal = json_encode($final_question);
            $quiz->data_jawaban = json_encode($final_choices);
            $quiz->kunci_jawaban = json_encode($final_answer);
            $quiz->save();

            
            $data_pembelajaran->current_quiz = $quiz->id;
            $data_pembelajaran->save();

            $quizs = array(
                'data_soal' => json_decode($quiz->data_soal),
                'data_jawaban' => json_decode($quiz->data_jawaban),
                'kunci_jawaban' => json_decode($quiz->kunci_jawaban),
                'keterangan' => $quiz->keterangan
            );

            return view('pages.attemptquiz',compact('quizs'));
        }
    }
}
