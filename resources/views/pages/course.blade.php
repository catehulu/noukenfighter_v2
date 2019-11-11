@extends('layouts.app')

@section('content')

    <section class="bannerPart">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">COURSE</h1>
            </div>
        </div>
    </section>

    <section class="kanaPart" style="padding-top: 100px; padding-bottom: 100px;">
        <div id="partText" class="justify-content-center">
            <h1 class="text-white">KANA</h1>
        </div>

        <br>
        <div id="partContent">
            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/kana_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">HIRAGANA</h1>
                    <p class="card-text text-white font-weight-bold">level Basic</p>
                    <hr>
                    <p class="card-text text-white">This course contain basic writing system Hiragana Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kana/hiragana" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>

            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/kana_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">KATAKANA</h1>
                    <p class="card-text text-white font-weight-bold">level Basic</p>
                    <hr>
                    <p class="card-text text-white">This course contain basic writing system Katakana Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kana/katakana" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="kanjiPart" style="padding-top: 100px; padding-bottom: 100px;">
        <div id="partText" class="justify-content-center">
            <h1 class="text-white">KANJI</h1>
        </div>

        <br>
        <div id="partContent">
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
                <img class="card-img-top" src="{{ asset('img/n4_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">KANJI</h1>
                    <p class="card-text text-white font-weight-bold">level N4</p>
                    <hr>
                    <p class="card-text text-white">This course contain Kanji from JLPT N4 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kanji/N4" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>

            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n3_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">KANJI</h1>
                    <p class="card-text text-white font-weight-bold">level N3</p>
                    <hr>
                    <p class="card-text text-white">This course contain Kanji from JLPT N3 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kanji/N3" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>

            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n2_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">KANJI</h1>
                    <p class="card-text text-white font-weight-bold">level N2</p>
                    <hr>
                    <p class="card-text text-white">This course contain Kanji from JLPT N2 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kanji/N2" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>

            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n1_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">KANJI</h1>
                    <p class="card-text text-white font-weight-bold">level N1</p>
                    <hr>
                    <p class="card-text text-white">This course contain Kanji from JLPT N1 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kanji/N1" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vocabularyPart" style="padding-top: 100px; padding-bottom: 100px;">
        <div id="partText" class="justify-content-center">
            <h1 class="text-white">VOCABULARY</h1>
        </div>

        <br>
        <div id="partContent">
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
                <img class="card-img-top" src="{{ asset('img/n4_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">VOCABULARY</h1>
                    <p class="card-text text-white font-weight-bold">level N4</p>
                    <hr>
                    <p class="card-text text-white">This course contain Vocabulary from JLPT N4 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kosakata/N4" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>

            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n3_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">VOCABULARY</h1>
                    <p class="card-text text-white font-weight-bold">level N3</p>
                    <hr>
                    <p class="card-text text-white">This course contain Vocabulary from JLPT N3 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kosakata/N3" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>

            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n2_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">VOCABULARY</h1>
                    <p class="card-text text-white font-weight-bold">level N2</p>
                    <hr>
                    <p class="card-text text-white">This course contain Vocabulary from JLPT N2 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kosakata/N2" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>

            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n1_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">VOCABULARY</h1>
                    <p class="card-text text-white font-weight-bold">level N1</p>
                    <hr>
                    <p class="card-text text-white">This course contain Vocabulary from JLPT N1 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/kosakata/N1" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grammarPart" style="padding-top: 100px; padding-bottom: 100px;">
        <div id="partText" class="justify-content-center">
            <h1 class="text-white">GRAMMAR</h1>
        </div>

        <br>
        <div id="partContent">
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

            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n4_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">GRAMMAR</h1>
                    <p class="card-text text-white font-weight-bold">level N4</p>
                    <hr>
                    <p class="card-text text-white">This course contain Grammar from JLPT N4 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/grammar/N4" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>

            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n3_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">GRAMMAR</h1>
                    <p class="card-text text-white font-weight-bold">level N3</p>
                    <hr>
                    <p class="card-text text-white">This course contain Grammar from JLPT N3 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/grammar/N3" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>

            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n2_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">GRAMMAR</h1>
                    <p class="card-text text-white font-weight-bold">level N2</p>
                    <hr>
                    <p class="card-text text-white">This course contain Grammar from JLPT N2 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/grammar/N2" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>

            <div class="card bg-dark">
                <img class="card-img-top" src="{{ asset('img/n1_background.png') }}" alt="Card image cap">

                <div class="card-body">
                    <h1 class="card-title text-white font-weight-bolder">GRAMMAR</h1>
                    <p class="card-text text-white font-weight-bold">level N1</p>
                    <hr>
                    <p class="card-text text-white">This course contain Grammar from JLPT N1 Only</p>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a href="/course/grammar/N1" class="btn btn-success text-white rounded-2 font-weight-bolder">ACCESS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
