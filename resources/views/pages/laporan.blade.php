@extends('layouts.app')

@section('content')


    <section class="bannerPart">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">PROGRESS REPORT</h1>
            </div>
        </div>
    </section>

    <section class="contentPart" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="reportPart" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-6">
                    <h1 id="partTextDark" class="font-weight-bolder text-white text-center">VOCABULARY</h1>
                </div>
            </div>
            <div class="row" style="padding-left: 40px; padding-right: 40px;">
                <h3 id="partText" class="font-weight-bold">Amount of cards reviewed</h3>
            </div>
            <div class="row" style="padding-left: 60px; padding-right: 60px;">
                <div class="col-10 p-3 bg-blue">
                    <h2 class="text-white">N5 VOCAB</h2>
                </div>
                <div class="col-2 p-3 bg-blue" style="opacity: 0.5">
                    <h1 class="text-center text-white">1256x</h1>
                </div>

                <div class="col-10 p-3 bg-green">
                    <h2 class="text-white">N4 VOCAB</h2>
                </div>
                <div class="col-2 p-3 bg-green" style="opacity: 0.5">
                    <h1 class="text-center text-white">900x</h1>
                </div>

                <div class="col-10 p-3 bg-purple">
                    <h2 class="text-white">N3 VOCAB</h2>
                </div>
                <div class="col-2 p-3 bg-purple" style="opacity: 0.5">
                    <h1 class="text-center text-white">736x</h1>
                </div>

                <div class="col-10 p-3 bg-orange">
                    <h2 class="text-white">N2 VOCAB</h2>
                </div>
                <div class="col-2 p-3 bg-orange" style="opacity: 0.5">
                    <h1 class="text-center text-white">573x</h1>
                </div>

                <div class="col-10 p-3 bg-red">
                    <h2 class="text-white">N1 VOCAB</h2>
                </div>
                <div class="col-2 p-3 bg-red" style="opacity: 0.5">
                    <h1 class="text-center text-white">450x</h1>
                </div>
            </div>
        </div>

        <div class="reportPart" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-6">
                    <h1 id="partTextDark" class="font-weight-bolder text-white text-center">GRAMMAR</h1>
                </div>
            </div>
            <div class="row" style="padding-left: 40px; padding-right: 40px;">
                <h3 id="partText" class="font-weight-bold">Amount of cards reviewed</h3>
            </div>
            <div class="row" style="padding-left: 60px; padding-right: 60px;">
                <div class="col-10 p-3 bg-blue">
                    <h2 class="text-white">N5 GRAMMAR</h2>
                </div>
                <div class="col-2 p-3 bg-blue" style="opacity: 0.5">
                    <h1 class="text-center text-white">1256x</h1>
                </div>

                <div class="col-10 p-3 bg-green">
                    <h2 class="text-white">N4 GRAMMAR</h2>
                </div>
                <div class="col-2 p-3 bg-green" style="opacity: 0.5">
                    <h1 class="text-center text-white">900x</h1>
                </div>

                <div class="col-10 p-3 bg-purple">
                    <h2 class="text-white">N3 GRAMMAR</h2>
                </div>
                <div class="col-2 p-3 bg-purple" style="opacity: 0.5">
                    <h1 class="text-center text-white">736x</h1>
                </div>

                <div class="col-10 p-3 bg-orange">
                    <h2 class="text-white">N2 GRAMMAR</h2>
                </div>
                <div class="col-2 p-3 bg-orange" style="opacity: 0.5">
                    <h1 class="text-center text-white">573x</h1>
                </div>

                <div class="col-10 p-3 bg-red">
                    <h2 class="text-white">N1 GRAMMAR</h2>
                </div>
                <div class="col-2 p-3 bg-red" style="opacity: 0.5">
                    <h1 class="text-center text-white">450x</h1>
                </div>
            </div>
        </div>

        <div class="reportPart" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-6">
                    <h1 id="partTextDark" class="font-weight-bolder text-white text-center">KANJI</h1>
                </div>
            </div>
            <div class="row" style="padding-left: 40px; padding-right: 40px;">
                <h3 id="partText" class="font-weight-bold">Amount of cards known</h3>
            </div>
            <div class="row" style="padding-left: 60px; padding-right: 60px; margin-bottom: 40px">
                <div class="col-10 p-3 bg-blue">
                    <h2 class="text-white">N5</h2>
                </div>
                <div class="col-2 p-3 bg-blue" style="opacity: 0.5">
                    <h1 class="text-center text-white">86</h1>
                </div>

                <div class="col-10 p-3 bg-green">
                    <h2 class="text-white">N4</h2>
                </div>
                <div class="col-2 p-3 bg-green" style="opacity: 0.5">
                    <h1 class="text-center text-white">70</h1>
                </div>

                <div class="col-10 p-3 bg-purple">
                    <h2 class="text-white">N3</h2>
                </div>
                <div class="col-2 p-3 bg-purple" style="opacity: 0.5">
                    <h1 class="text-center text-white">156</h1>
                </div>

                <div class="col-10 p-3 bg-orange">
                    <h2 class="text-white">N2</h2>
                </div>
                <div class="col-2 p-3 bg-orange" style="opacity: 0.5">
                    <h1 class="text-center text-white">312</h1>
                </div>

                <div class="col-10 p-3 bg-red">
                    <h2 class="text-white">N1</h2>
                </div>
                <div class="col-2 p-3 bg-red" style="opacity: 0.5">
                    <h1 class="text-center text-white">120</h1>
                </div>
            </div>
            <div class="row" style="padding-left: 40px; padding-right: 40px;">
                <h3 id="partText" class="font-weight-bold">Card statistics</h3>
            </div>
            <div class="row" style="padding-left: 60px; padding-right: 60px; margin-bottom: 40px">
                <div class="col-10 p-3 bg-red" style="opacity: 0.8">
                    <h2 class="text-white">New</h2>
                </div>
                <div class="col-2 p-3" style="opacity: 0.5">
                    <h1 class="text-center">1832</h1>
                </div>

                <div class="col-10 p-3 bg-blue" style="opacity: 0.5">
                    <h2 class="text-white">Pre-Mature 1</h2>
                </div>
                <div class="col-2 p-3" style="opacity: 0.5">
                    <h1 class="text-center ">20</h1>
                </div>

                <div class="col-10 p-3 bg-blue" style="opacity: 0.5">
                    <h2 class="text-white">Pre-Mature 2</h2>
                </div>
                <div class="col-2 p-3" style="opacity: 0.5">
                    <h1 class="text-center ">25</h1>
                </div>

                <div class="col-10 p-3 bg-blue" style="opacity: 0.75">
                    <h2 class="text-white">Pre-Mature 3</h2>
                </div>
                <div class="col-2 p-3" style="opacity: 0.5">
                    <h1 class="text-center ">30</h1>
                </div>

                <div class="col-10 p-3 bg-blue">
                    <h2 class="text-white">Mature 1</h2>
                </div>
                <div class="col-2 p-3" style="opacity: 0.5">
                    <h1 class="text-center ">100</h1>
                </div>

                <div class="col-10 p-3 bg-blue">
                    <h2 class="text-white">Mature 2</h2>
                </div>
                <div class="col-2 p-3" style="opacity: 0.5">
                    <h1 class="text-center ">10</h1>
                </div>
            </div>
        </div>
    </section>

    <h1>Laporan</h1>
    <h3>Your Learning History</h3>
    <br>

    <div class="card border-primary">
      <div class="card-body">
        <h4 class="card-title">Kanji Course</h4>
           <h4>Number of Kanji you've learn : </h4>
           <h1>{{count(explode(',',$dataPembelajaran->srs_data))}}</h1>
      </div>
    </div>

    <br>        
    @foreach ($dataPembelajaran->quiz as $quizes)
        <div class="card border-primary">
        <div class="card-body">
            <h4 class="card-title">{{$quizes->keterangan}}</h4>
                <div class="row">
                    <label for="score">Your Score : </label>
                    <h4 id="score" name="score">{{$quizes->skor}}</h4>
                </div>
            </div>
         </div>
    <br>
    @endforeach
@endsection
