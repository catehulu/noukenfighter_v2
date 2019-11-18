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
    <h2>Insert Kana</h2>
    <form action="/admin/createKana" method="post">
        @csrf
        <div class="form-group">
            <label for="KN_Kana">Kana:</label>
            <input type="text" class="form-control" id="KN_Kana" placeholder="KN_Kana" name="KN_Kana" required>
        </div>
        <div class="form-group">
            <label for="KN_Reading">Reading:</label>
            <input type="text" class="form-control" id="KN_Reading" placeholder="KN_Reading" name="KN_Reading" required>
        </div>
        <div class="form-group">
            <label for="KN_Tipe">Tipe:</label>
            <input type="text" class="form-control" id="KN_Tipe" placeholder="KN_Tipe" name="KN_Tipe" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection


