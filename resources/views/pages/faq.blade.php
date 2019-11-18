@extends('layouts.app')

@section('content')

    <section class="bannerPart">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">FAQ</h1>
            </div>
        </div>
    </section>

    <section class="contentPart" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="qnaPart" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-6">
                    <h1 id="partTextDark" class="font-weight-bolder text-white text-center">WHAT IS KANJI?</h1>
                </div>
            </div>
            <div class="row" style="padding-left: 40px; padding-right: 40px;">
                <h3 id="partText" class="font-weight-bold">Kanji is Japanese alphabet, there are 2200 for Jouyou Kanji</h3>
            </div>
        </div>

        <div class="qnaPart" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-6">
                    <h1 id="partTextDark" class="font-weight-bolder text-white text-center">WHAT IS KANA?</h1>
                </div>
            </div>
            <div class="row" style="padding-left: 40px; padding-right: 40px;">
                <h3 id="partText" class="font-weight-bold">Kana is Japanese basic alphabet</h3>
            </div>
        </div>
    </section>

@endsection
