<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function () {
    return view('admin_lte.blank');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/search', 'KanjiController@search');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@home');
Route::get('/faq', 'PagesController@faq');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

//TEST VIEW
Route::get('/reviewkana', 'PagesController@reviewkana');
Route::get('/reviewgrammar', 'PagesController@reviewgrammar');
Route::get('/reviewvocab', 'PagesController@reviewvocab');
Route::get('/kanjisrs', 'PagesController@kanjisrs');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/quiz', 'PagesController@quiz');
    // Route::get('/search', 'PagesController@search');
    Route::get('/course', 'PagesController@course');
    Route::get('/subscribe', 'PagesController@subscribe');

    // Route::get('/search/N{K_JLPT}', 'JLPTController@searchJLPT');
    // Route::get('/search/J{K_Jouyou}', 'JoyouController@searchJouyou');
    // Route::get('/search/{KN_Tipe}', 'KanaController@searchKana');

    //INDEX PERCOURSE
    Route::get('/course/kanji/N{jlpt}', 'JLPTController@kanjiIndex');
    Route::get('/course/kosakata/N{jlpt}', 'JLPTController@kosakataIndex');
    Route::get('/course/grammar/N{jlpt}', 'JLPTController@grammarIndex');
    Route::get('/course/kana/{KN_Tipe}', 'KanaController@index');

    //SHOW PER ITEM
    Route::get('/course/kana/detail/{kana}', 'KanaController@show');
    Route::get('/course/kanji/detail/{kanji}', 'KanjiController@show');
    Route::get('/course/grammar/detail/{grammar}', 'GrammarController@show');
    Route::get('/course/kosakata/detail/{kosaKata}', 'KosaKataController@show');


    //QUIZZES
    Route::get('/quiz/attempt/kanji/N{jlpt}', 'QuizController@quizKanji');
    Route::get('/quiz/attempt/kana/{KN_Tipe}', 'QuizController@quizKana');
    Route::get('/quiz/attempt/grammar/N{jlpt}', 'QuizController@quizGrammar');
    Route::get('/quiz/attempt/kosakata/N{jlpt}', 'QuizController@quizKosaKata');

    //RESULTS
    Route::post('/quiz/result', 'QuizController@result');
    Route::get('/report', 'DataPembelajaranController@index');

    // Routingan Admin
    Route::group(['middleware' => ['admin']], function () {
        Route::group(['prefix' => 'admin'], function () {

            //CRUD Kanji
            Route::get('/makeKanji', 'KanjiController@create');
            Route::post('/createKanji', 'KanjiController@store');
            Route::get('/eKanji/{kanji}', 'KanjiController@edit');
            Route::post('/editKanji/{kanji}', 'KanjiController@update');
            Route::get('/deleteKanji/{kanji}', 'KanjiController@destroy');

            //CRUD Kana
            Route::get('/makeKana', 'KanaController@create');
            Route::post('/createKana', 'KanaController@store');
            Route::get('/eKana/{kana}', 'KanaController@edit');
            Route::post('/editKana/{kana}', 'KanaController@update');
            Route::get('/deleteKana/{kana}', 'KanaController@destroy');

            //CRUD Grammar
            Route::get('/makeGrammar', 'GrammarController@create');
            Route::post('/createGrammar', 'GrammarController@store');
            Route::get('/eGrammar/{grammar}', 'GrammarController@edit');
            Route::post('/editGrammar/{grammar}', 'GrammarController@update');
            Route::get('/deleteGrammar/{grammar}', 'GrammarController@destroy');

            //CRUD KosaKata
            Route::get('/makeKosaKata', 'KosaKataController@create');
            Route::post('/createKosaKata', 'KosaKataController@store');
            Route::get('/eKosaKata/{kosaKata}', 'KosaKataController@edit');
            Route::post('/editKosaKata/{kosaKata}', 'KosaKataController@update');
            Route::get('/deleteKosaKata/{kosaKata}', 'KosaKataController@destroy');
        });
    });
});
