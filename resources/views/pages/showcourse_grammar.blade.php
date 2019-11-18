@extends('layouts.app')

@section('content')

    <section class="bannerPart">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">GRAMMAR DESCRIPTION</h1>
            </div>
        </div>
    </section>

    <a href="/course/grammar/N5" class="btn">
        <div class="row align-items-center m-5 hoverEffect">
            <div class="col-3">
                <img src="{{ asset('img/goback_button.png') }}" alt="" srcset="">
            </div>
            <div class="col-9">
                <h1 class="text-dark text-uppercase">BACK TO GRAMMAR N5</h1>
            </div>
        </div>
    </a>

    @if(Auth::user()->status == 2)
    <div class="row justify-content-end">
        <div class="col-12">
            <form action="#">
                <input type="submit" value="Delete" class="btn hoverEffect" style="background-color: #ff4f4f; float:right">
            </form>

            <form action="#">
                <input type="submit" value="Edit" class="btn hoverEffect" style="background-color: #fcf04e; float:right">
            </form>
        </div>
    </div>
    @endif

    <section class="contentPart" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="mainPart" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-6">
                    <h1 id="partText" class="font-weight-bolder text-white text-center bg-blue">[GRAMMAR_TITLE]</h1>
                </div>
            </div>
            <div class="row" style="padding-left: 40px; padding-right: 40px;">
                <h3 id="partText" class="font-weight-bold">[GRAMMAR_MEANING]</h3>
            </div>
        </div>
    </section>

    <section id="formulaPart" style="margin-top: 50px;">
        <div class="row">
            <div class="col-12">
                <h1 id="partText" class="font-weight-bolder text-white text-center">FORMULA</h1>
            </div>
        </div>
        <div class="row align-items-center justify-content-center completeRoundedSquare bg-blue p-5" style="opacity: 0.8;">
            <h3 class="text-center text-white">[GRAMMAR_FORMULA]</h3>
        </div>
    </section>

    <section id="descriptionPart" style="margin-top: 50px;">
        <div class="row">
            <div class="col-12">
                <h1 id="partText" class="font-weight-bolder text-white text-center">EXAMPLE SENTENCE</h1>
            </div>
        </div>
        <div class="row align-items-center justify-content-center completeRoundedSquare bg-blue p-5" style="opacity: 0.8;">
            <h3 class="text-center text-white">[GRAMMAR_EXAMPLE_SENTENCE]</h3>
        </div>
    </section>


    {{-- <form action="/course/grammar/N5">
    <input type="submit" value="Go Back" class="btn btn-danger">
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center" scope="row">Attribute</th>
                <th class="text-center" scope="col">Value</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <th>Grammar</th>
                    <td class="text-center" scope="row" style="font-size: 20px">{{$grammar->judul_grammar}}</th>
                </tr>
                <tr>
                    <th>Arti Grammar</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$grammar->arti_grammar}}</th>
                </tr>
                <tr>
                    <th>Formula Grammar</th>
                    <td class="text-center" scope="row" style="font-size: 72px">{{$grammar->formula_grammar}}</th>
                </tr>
                <tr>
                    <th>Contoh Kalimat</th>
                    <td class="text-center" scope="row" style="font-size: 72px">{{$grammar->contoh_kalimat}}</th>
                </tr>
        </tbody>
    </table> --}}
@endsection
