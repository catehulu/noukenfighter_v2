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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@home');
Route::get('/blog', 'PagesController@blog');
Route::get('/contact', 'PagesController@contact');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/quiz', 'PagesController@quiz');
    Route::get('/search', 'PagesController@search');
    Route::get('/course', 'PagesController@course');
    Route::get('/subscribe', 'PagesController@subscribe');
    Route::get('/menu_course', 'PagesController@menu_course');
    
    Route::get('/search/N{K_JLPT}', 'JLPTController@searchJLPT');
    Route::get('/search/J{K_Jouyou}', 'JoyouController@searchJouyou');
    Route::get('/search/{KN_Tipe}', 'KanaController@searchKana');
    
    Route::get('/course/N{K_JLPT}', 'JLPTController@courseJLPT');
    Route::get('/course/{KN_Tipe}', 'JoyouController@courseKana');
    Route::get('/course/Kana/{ID_Kana}', 'KanaController@accessKana');
    Route::get('/course/Kanji/{ID_K_Increment}', 'KanjiController@accessKanji');
    
    Route::get('/quiz/attempt/N{K_JLPT}', 'QuizController@quizJLPT');
    Route::get('/quiz/attempt/{KN_Tipe}', 'QuizController@quizKana');
    Route::get('/quiz/result/N{K_JLPT}', 'QuizController@resultJLPT');
    Route::get('/quiz/result/{KN_Tipe}', 'QuizController@resultKana');
    
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
            Route::get('/eKosaKata/{kosakata}', 'KosaKataController@edit');
            Route::post('/editKosaKata/{kosaKata}', 'KosaKataController@update');
            Route::get('/deleteKosaKata/{kosaKata}', 'KosaKataController@destroy');

        });
    });

});


