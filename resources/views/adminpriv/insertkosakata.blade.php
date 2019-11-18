@extends('layouts.app')

@section('content')
    <section class="bannerPart" style="margin-bottom: 100px;">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">INSERT</h1>
            </div>
        </div>
    </section>
    <h2>Insert Kosakata</h2>
    <form action="/admin/createKosaKata" method="post">
        @csrf
        <div class="form-group">
            <label for="jp_vocab">Japan Vocabulary:</label>
            <input type="text" class="form-control" id="jp_vocab" placeholder="jp_vocab" name="jp_vocab" required>
        </div>
        <div class="form-group">
            <label for="eng_vocab">English Vocabulary:</label>
            <input type="text" class="form-control" id="eng_vocab" placeholder="eng_vocab" name="eng_vocab" required>
        </div>
        <div class="form-group">
            <label for="contoh_kalimat">Contoh Kalimat:</label>
            <input type="text" class="form-control" id="contoh_kalimat" placeholder="contoh_kalimat" name="contoh_kalimat" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection


