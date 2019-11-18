@extends('layouts.app')

@section('content')

    @if($kanji->jlpt->jlpt_level == "N5")
        <?php
            $styling = "bg-blue";
        ?>
    @elseif($kanji->jlpt->jlpt_level == "N4")
        <?php
            $styling = "bg-green";
        ?>
    @elseif($kanji->jlpt->jlpt_level == "N3")
        <?php
            $styling = "bg-purple";
        ?>
    @elseif($kanji->jlpt->jlpt_level == "N2")
        <?php
            $styling = "bg-orange";
        ?>
    @elseif($kanji->jlpt->jlpt_level == "N1")
        <?php
            $styling = "bg-red";
        ?>
    @endif

    <section class="bannerPart">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">KANJI DESCRIPTION</h1>
            </div>
        </div>
    </section>

    <a href="/course/kanji/{{$kanji->jlpt->jlpt_level}}" class="btn">
        <div class="row align-items-center m-5 hoverEffect">
            <div class="col-3">
                <img src="{{ asset('img/goback_button.png') }}" alt="" srcset="">
            </div>
            <div class="col-9">
                <h1 class="text-dark text-uppercase">BACK TO KANJI {{$kanji->jlpt->jlpt_level}}</h1>
            </div>
        </div>
    </a>

    <div class="row justify-content-center align-items-center">
        <div class="col-2 {{$styling}} completeRoundedSquare" style="height: 100%; width: 100%;">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="text-white" style="font-size: 80px">
                    {{$kanji->kanji}}
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center align-items-center">
        <div class="col-2 {{$styling}} completeRoundedSquare" style="height: 100%; width: 100%; opacity: 0.8;">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="text-white text-center" style="font-size: 35px;">
                    {{$kanji->keyword}}
                </div>
            </div>
        </div>
    </div>

    <section id="mnemonicsPart" style="margin-top: 50px;">
        <div class="row">
            <div class="col-12">
                <h1 id="partText" class="font-weight-bolder text-white text-center">MNEMONICS</h1>
            </div>
        </div>
        <div class="row align-items-center justify-content-center completeRoundedSquare {{$styling}} p-5" style="opacity: 0.8;">
            <h3 class="text-center text-white">{{$kanji->story}}</h3>
        </div>
    </section>

    <section id="descriptionPart" style="margin-top: 50px;">
        <div class="row">
            <div class="col-12">
                <h1 id="partText" class="font-weight-bolder text-white text-center">DESCRIPTION</h1>
            </div>
        </div>

        @if(Auth::user()->status == 2)
        <div class="row justify-content-end">
            <div class="col-12">
                <form action="/admin/deleteKanji/{{$kanji->id}}">
                <input type="submit" value="Delete" class="btn {{$styling}}" style="float:right; opacity: 0.7;">
                </form>

                <form action="/admin/eKanji/{{$kanji->id}}">
                <input type="submit" value="Edit" class="btn {{$styling}}" style="float:right; opacity: 0.5;">
                </form>
            </div>
        </div>
        @endif


        {{-- TABEL --}}
        <table class="table table-bordered text-uppercase">
            <thead class="{{$styling}}">
                <tr>
                    <th class="text-center" scope="row">Attribute</th>
                    <th class="text-center" scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                    {{-- <tr>
                        <th>Kanji Keyword</th>
                        <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->keyword}}</th>
                    </tr> --}}
                    <tr>
                        <th>Kanji</th>
                        <td class="text-center" scope="row" style="font-size: 72px">{{$kanji->kanji}}</th>
                    </tr>
                    <tr>
                        <th>Constituent</th>
                        <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->constituent}}</th>
                    </tr>
                    <tr>
                        <th>Stroke Count</th>
                        <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->stroke_count}}</th>
                    </tr>
                    <tr>
                        <th>Lesson Number</th>
                        <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->lesson_no}}</th>
                    </tr>
                    {{-- <tr>
                        <th>Story</th>
                        <td class="text-center" style="font-size: 20px" scope="row">{{$kanji->story}}</th>
                    </tr> --}}
                    <tr>
                        <th>JLPT Level</th>
                        <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->jlpt->jlpt_level}}</th>
                    </tr>
                    <tr>
                        <th>OnYomi</th>
                        <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->on_yomi}}</th>
                    </tr>
                    <tr>
                        <th>KunYomi</th>
                        <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->kun_yomi}}</th>
                    </tr>
            </tbody>
        </table>
    </section>
@endsection
