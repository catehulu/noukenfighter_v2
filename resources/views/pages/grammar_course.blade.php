@extends('layouts.app')

@section('content')

    <section class="bannerPart">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">GRAMMAR</h1>
            </div>
        </div>
    </section>

    {{-- Conditional Styling --}}
    <?php
        $styling = "bg-blue"
    ?>

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
                <h1 class="text-white font-weight-bolder">LEVEL GRAMMAR</h1>
            </div>
            <div class="col-3 p-3 text-center {{$styling}} hoverEffect">
                <a href="#" class="btn">
                    <h1 class="text-white">REVIEW</h1>
                </a>
            </div>
        </div>

        <section class="studyPart" style="margin-top: 100px; margin-bottom: 100px">
            <h1 id="partText" class="font-weight-bolder text-white">STUDY</h1>
            {{-- <h3 class="font-weight-bold text-center">The following table represents how many cards are scheduled for review on the following day</h3> --}}

            @for($i=0; $i<10; $i++)
            <br>
            <div class="row hoverEffect">
                <div class="col-8 p-3 {{$styling}}">
                    <h2 class="text-white">GRAMMAR</h2>
                </div>
                <div class="col-4 p-3 {{$styling}}" style="opacity: 0.5">
                    <h1 class="text-center text-white">ARTI_GRAMMAR</h1>
                </div>
            </div>
            @endfor
        </section>
    </section>

    {{-- <h1>Course</h1>
    <h3>Welcome to our Course page where you can review some of the words you have learned throughout your journey learning in our website. Each word has a corresponding picture and the details on how to memorize them properly.</h3>
    <br>
    @if(count($grammars) >= 1)
    <h2>Result Grammar : {{count($grammars)}}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="row">Grammar</th>
                <th scope="col">Arti Grammar</th>
                <th scope="col">Formula Grammar</th>
                <th scope="col">Contoh Kalimat</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach($grammars as $grammar)
        <tbody>
                <tr>
                        <th class="text-center" scope="row" style="font-size: 72px">{{$grammar->judul_grammar}}</th>
                        <td>{{$grammar->arti_grammar}}</td>
                        <td>{{$grammar->formula_grammar}}</td>
                        <td>{{$grammar->contoh_kalimat}}</td>
                        <td>
                                <form action="/course/grammar/detail/{{$grammar->id}}">
                                <input type="submit" value="Akses" class="btn" style="background-color: #a5f69d">
                                </form>
                        </td>
                        @if(Auth::user()->status == 2)
                        <td>

                                <form action="/admin/eGrammar/{{$grammar->id}}">
                                <input type="submit" value="Edit" class="btn" style="background-color: #fcf04e">
                                </form>
                        </td>
                        <td>
                                <form action="/admin/deleteGrammar/{{$grammar->id}}">
                                <input type="submit" value="Delete" class="btn" style="background-color: #ff4f4f">
                                </form>
                        </td>
                        @endif
                </tr>
        </tbody>
        @endforeach
    @else
        <!--p>No grammar found</p-->
    @endif
        </table> --}}
@endsection
