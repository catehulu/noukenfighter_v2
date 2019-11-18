@extends('layouts.app')

@section('content')

    <section class="bannerPart">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">KANA DESCRIPTION</h1>
            </div>
        </div>
    </section>

    <a href="/course/kana/{{$kana->tipe}}" class="btn">
        <div class="row align-items-center m-5 hoverEffect">
            <div class="col-3">
                <img src="{{ asset('img/goback_button.png') }}" alt="" srcset="">
            </div>
            <div class="col-9">
                <h1 class="text-dark text-uppercase">BACK TO {{$kana->tipe}}</h1>
            </div>
        </div>
    </a>



    <div class="row justify-content-center align-items-center">
        <div class="col-2 bg-gray completeRoundedSquare m-3" style="height: 100%; width: 100%;">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="text-white" style="font-size: 80px">
                    {{$kana->kana}}
                </div>
            </div>
        </div>
    </div>

    <section id="descriptionPart" style="margin-top: 50px;">
        <div class="row">
            <div class="col-12">
                <h1 id="partText" class="font-weight-bolder text-white text-center">DESCRIPTION</h1>
            </div>
        </div>
    </section>


    @if(Auth::user()->status == 2)
    <div class="row justify-content-end">
        <div class="col-12">
            <form action="/admin/deleteKana/{{$kana->id}}">
                <input type="submit" value="Delete" class="btn hoverEffect" style="background-color: #ff4f4f; float:right">
            </form>

            <form action="/admin/eKana/{{$kana->id}}">
                <input type="submit" value="Edit" class="btn hoverEffect" style="background-color: #fcf04e; float:right">
            </form>
        </div>
    </div>
    @endif

    <table class="table table-bordered">
        <thead class="bg-gray text-white">
            <tr>
                <th class="text-center" scope="row">ATTRIBUTE</th>
                <th class="text-center" scope="col">VALUE</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <th>KANA</th>
                    <td class="text-center" scope="row" style="font-size: 72px">{{$kana->kana}}</th>
                </tr>
                <tr>
                    <th>READING</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kana->reading}}</th>
                </tr>
                <tr>
                    <th>TIPE</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kana->tipe}}</th>
                </tr>
        </tbody>
    </table>
@endsection
