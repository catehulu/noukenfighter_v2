@extends('layouts.app')

@section('content')

    <section class="bannerPart">
        <img src="{{ asset('img/travel_advertising_with_travel_A1_Rectangle_5_pattern@2x.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="bannerText" src="{{ asset('img/Learn Japanese Easily.png') }}" alt="" srcset="">
        <a href="/course" class="hoverEffect">
            <img id="bannerButton" src="{{ asset('img/get_started.png') }}"  alt="" srcset="">
        </a>
    </section>

    <section class="mottoPart">
        <div id="motto" class="text-center m-5">
            <h2 class="font-weight-bolder">Learning Japanese was never this easy</h2>
        </div>
        <div id="mottoContent" class="p-3 d-flex text-center">
            <p class="font-weight-bold">Learning Japanese can be difficult, but here we learn using the easiest method available. No matter what kind of japanese you learn, we've put together this guide for that purpose! Just follow the steps and you'll be able to see how it all works by the end.
                    The reason we have this guide is that you never know what you might see, especially if your eyes have never been to a Japanese school. Even if you didn't speak any sort of japanese for the entire time, if you look carefully you know this is your first time reading Japanese! It has nothing to do with the amount of mistakes you're likely to make at the first day, but as you get used to reading Japanese and begin learning the language better, you might be able to put it past the first night.</p>
        </div>
    </section>

    <section class="popularPart">
        <div id="popular" class="text-center m-5">
            <h1 class="font-weight-bolder uppercase">Popular Online Course</h1>
        </div>
        <div id="popularCard" class="row">
            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n5_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">KANJI</h1>
                    <p class="card-text text-white font-weight-bold">level N5</p>
                    <hr>
                    <p class="card-text text-white">This course contain Kanji from JLPT N5 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kanji/N5" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>
            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n5_background.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">VOCABULARY</h1>
                    <p class="card-text text-white font-weight-bold">level N5</p>
                    <hr>
                    <p class="card-text text-white">This course contain Vocabulary from JLPT N5 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kosakata/N5" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>
            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n5_background.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">GRAMMAR</h1>
                    <p class="card-text text-white font-weight-bold">level N5</p>
                    <hr>
                    <p class="card-text text-white">This course contain Grammar from JLPT N5 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/grammar/N5" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="methodPart">
        <div id="method" class="text-center m-5">
            <h1 class="font-weight-bolder uppercase">Why you should use Nouken Fighter?</h1>
        </div>
        <div id="methodContent">
            <div class="row m-5">
                <div class="col-6">
                    <img src="{{ asset('img/mnemonics_logo.png') }}" alt="" srcset="">
                </div>
                <div class="col-6">
                    <h1>Mnemonics</h1>
                    <p>NoukenFighter provide you how to remember Kanji easily with specific way to picture that Kanji clearly in your memory</p>
                </div>
            </div>
            <div class="row m-5">
                <div class="col-6">
                    <h1>Sentence-Cards</h1>
                    <p>NoukenFighter provide you example sentence for each vocabulary to make sure, you as the learner understand the nuance or usage of the vocabulary</p>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/sentence_cards.png') }}" alt="" srcset="">
                </div>
            </div>
            <div class="row m-5">
                <div class="col-6">
                    <img src="{{ asset('img/srs_logo.png') }}" alt="" srcset="">
                </div>
                <div class="col-6">
                    <h1>Spaced Repetition System</h1>
                    <p>NoukenFighter provide you repepetitive review system that keep your memory fresh for every Kanji that you remembered</p>
                </div>
            </div>
        </div>
    </section>
@endsection
