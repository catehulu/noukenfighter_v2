@extends('layouts.app')

@section('content')

    <section class="bannerPart">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">KANJI</h1>
            </div>
        </div>
    </section>

    @if($kanjis[0]->jlpt->jlpt_level == "N5")
        <?php
            $styling = "bg-blue";
        ?>
    @elseif($kanjis[0]->jlpt->jlpt_level == "N4")
        <?php
            $styling = "bg-green";
        ?>
    @elseif($kanjis[0]->jlpt->jlpt_level == "N3")
        <?php
            $styling = "bg-purple";
        ?>
    @elseif($kanjis[0]->jlpt->jlpt_level == "N2")
        <?php
            $styling = "bg-orange";
        ?>
    @elseif($kanjis[0]->jlpt->jlpt_level == "N1")
        <?php
            $styling = "bg-red";
        ?>
    @endif

    <section class="contentPart" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="row align-items-center justify-content-center completeRoundedSquare {{$styling}} p-5" style="opacity: 0.8;">
            <h3 class="text-center text-white">Welcome to our Course page where you can review some of the words you have learned throughout your journey learning in our website. Each word has a corresponding picture and the details on how to memorize them properly.</h3>
        </div>
        <a href="/course" class="btn">
            <div class="row align-items-center m-5 hoverEffect">
                <div class="col-3">
                    <img src="{{ asset('img/goback_button.png') }}" alt="" srcset="">
                </div>
                <div class="col-9">
                    <h1 class="text-dark">BACK TO COURSE</h1>
                </div>
            </div>
        </a>


        <div class="row justify-content-between align-items-center">
            <div class="col-4 {{$styling}} roundedSquare text-center align-content-center h-100">
                <h1 class="text-white font-weight-bolder">{{$kanjis[0]->jlpt->jlpt_level}}</h1>
            </div>
            <div class="col-3 p-3 text-center {{$styling}} hoverEffect">
                <a href="/kanjisrs" class="btn">
                    <h1 class="text-white">SRS</h1>
                </a>
            </div>
        </div>

        <br>
        @if(count($kanjis) >= 1)
            <section class="duePart">
                <h1 id="partText" class="font-weight-bolder text-white">DUE CARDS</h1>
                <h3 class="font-weight-bold text-center">The following table represents how many cards are scheduled for review on the following day</h3>

                <div class="row">
                    <div class="col-10 p-3 {{$styling}}">
                        <h2 class="text-white">TODAY</h2>
                    </div>
                    <div class="col-2 p-3 {{$styling}}" style="opacity: 0.5">
                        <h1 class="text-center text-white">100</h1>
                    </div>
                </div>
            </section>

            <section class="studyPart" style="margin-top: 100px; margin-bottom: 100px">
                <div class="row">
                    <div class="col-12">
                        <h1 id="partText" class="font-weight-bolder text-white">STUDY</h1>
                        <h2 id="partText" class="font-weight-bold text-white">Total {{$kanjis[0]->jlpt->jlpt_level}} Kanji : {{count($kanjis)}}</h2>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center p-5">
                    @foreach($kanjis as $kanji)
                    <div class="col-2 {{$styling}} completeRoundedSquare m-3 hoverAnimation">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <form class="text-center" action="/course/kanji/detail/{{$kanji->id}}">
                                <button type="submit" class="btn text-white" style="font-size: 80px;">{{$kanji->kanji}}</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        @else
            <p>No kanji found</p>
        @endif
    </section>

@endsection
