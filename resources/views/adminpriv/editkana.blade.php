@extends('layouts.app')

@section('content')
    <section class="bannerPart" style="margin-bottom: 100px;">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">EDIT</h1>
            </div>
        </div>
    </section>
    @if ($kana)
        <h2>Edit Kana</h2>
        <form action="/admin/editKana/{{$kana->id}}" method="post">
            @csrf
            <div class="form-group">
                <label for="kana">Kana:</label>
                <input type="text" class="form-control" id="kana" value="{{$kana->kana}}" placeholder="kana" name="KN_Kana" required>
            </div>
            <div class="form-group">
                <label for="reading">Reading:</label>
                <input type="text" class="form-control" id="reading" value="{{$kana->reading}}" placeholder="reading" name="reading" required>
            </div>
            <div class="form-group">
                <label for="tipe">Tipe:</label>
                <input type="text" class="form-control" id="tipe" value="{{$kana->tipe}}" placeholder="tipe" name="tipe" required>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    @else
        <h3>No Kana Found.</h3>
    @endif
@endsection
