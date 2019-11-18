@extends('layouts.app')

@section('content')
    <section class="bannerPart">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">KANA</h1>
            </div>
        </div>
    </section>

    <section class="contentPart" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="row align-items-center justify-content-center completeRoundedSquare bg-gray p-5" style="opacity: 0.8;">
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
            <div class="col-4 bg-gray roundedSquare text-center align-content-center h-100">
                <h1 class="text-white font-weight-bolder text-uppercase">{{$kanas[0]->tipe}}</h1>
            </div>
            <div class="col-3 p-3 text-center bg-gray hoverEffect">
                <a href="/reviewkana" class="btn">
                    <h1 class="text-white">REVIEW</h1>
                </a>
            </div>
        </div>

        <br>
        @if(count($kanas) >= 1)
            <section class="studyPart">
                <div class="row">
                    <div class="col-12">
                        <h1 id="partText" class="font-weight-bolder text-white">STUDY</h1>
                        <h2 id="partText" class="font-weight-bold text-white">Total {{$kanas[0]->tipe}} : {{count($kanas)}}</h2>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center p-5">
                    @foreach($kanas as $kana)
                    <div class="col-2 bg-gray completeRoundedSquare m-3 hoverAnimation" style="height: 100%; width: 100%;">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <form class="text-center" action="/course/kana/detail/{{$kana->id}}">
                                <button type="submit" class="btn text-white" style="font-size: 80px;">{{$kana->kana}}</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        @else
            <p>No kana found</p>
        @endif
    </section>

    {{-- <h1>Course</h1>
    <h3>Welcome to our Course page where you can review some of the words you have learned throughout your journey learning in our website. Each word has a corresponding picture and the details on how to memorize them properly.</h3>
    <br>
    @if(count($kanas) >= 1)
    <h2>Result Kana : {{count($kanas)}}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="row">Kana</th>
                <th scope="col">Reading</th>
                <th scope="col">Tipe</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach($kanas as $kana)
        <tbody>
            <tr>
                <th class="text-center" scope="row" style="font-size: 72px">{{$kana->kana}}</th>
                <td>{{$kana->reading}}</td>
                <td>{{$kana->tipe}}</td>
                <td>
                        <form action="/course/kana/detail/{{$kana->id}}">
                        <input type="submit" value="Akses" class="btn" style="background-color: #a5f69d">
                        </form>
                </td>
                @if(Auth::user()->status == 2)
                <td>

                        <form action="/admin/eKana/{{$kana->id}}">
                        <input type="submit" value="Edit" class="btn" style="background-color: #fcf04e">
                        </form>
                </td>
                <td>
                        <form action="/admin/deleteKana/{{$kana->id}}">
                        <input type="submit" value="Delete" class="btn" style="background-color: #ff4f4f">
                        </form>
                </td>
                @endif
            </tr>
        </tbody>
        @endforeach
    @else
        <!--p>No Kana found</p-->
    @endif
        </table> --}}
@endsection
