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
    <h2>Insert Grammar</h2>
    <form action="/admin/createGrammar" method="post">
        @csrf
        <div class="form-group">
            <label for="judul_grammar">Judul:</label>
            <input type="text" class="form-control" id="judul_grammar" placeholder="judul_grammar" name="judul_grammar" required>
        </div>
        <div class="form-group">
            <label for="arti_grammar">Arti:</label>
            <input type="text" class="form-control" id="arti_grammar" placeholder="arti_grammar" name="arti_grammar" required>
        </div>
        <div class="form-group">
            <label for="formula_grammar">Formula:</label>
            <input type="text" class="form-control" id="formula_grammar" placeholder="formula_grammar" name="formula_grammar" required>
        </div>
        <div class="form-group">
            <label for="contoh_kalimat">Contoh Kalimat:</label>
            <input type="text" class="form-control" id="contoh_kalimat" placeholder="contoh_kalimat" name="contoh_kalimat" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection
