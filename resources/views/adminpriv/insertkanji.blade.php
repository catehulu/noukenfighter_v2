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
    <h2>Insert Kanji</h2>
    <form action="/admin/createKanji" method="post">
        @csrf
        <div class="form-group">
            <label for="K_Keyword">Keyword:</label>
            <input type="text" class="form-control" id="K_Keyword" placeholder="K_Keyword" name="K_Keyword" required>
        </div>
        <div class="form-group">
            <label for="K_Kanji">Kanji:</label>
            <input type="text" class="form-control" id="K_Kanji" placeholder="K_Kanji" name="K_Kanji" required>
        </div>
        <div class="form-group">
            <label for="K_Constituent">Constituent:</label>
            <input type="text" class="form-control" id="K_Constituent" placeholder="K_Constituent" name="K_Constituent" required>
        </div>
        <div class="form-group">
            <label for="K_StrokeCount">StrokeCount:</label>
            <input type="text" class="form-control" id="K_StrokeCount" placeholder="K_StrokeCount" name="K_StrokeCount" required>
        </div>
        <div class="form-group">
            <label for="K_LessonNo">Lesson No:</label>
            <input type="text" class="form-control" id="K_LessonNo" placeholder="K_LessonNo" name="K_LessonNo" required>
        </div>
        <div class="form-group">
            <label for="K_Story">Story:</label>
            <input type="text" class="form-control" id="K_Story" placeholder="K_Story" name="K_Story" required>
        </div>
        <div class="form-group">
            <label for="K_JouYou">Jouyou:</label>
            <input type="text" class="form-control" id="K_JouYou" placeholder="K_JouYou" name="K_JouYou" required>
        </div>
        <div class="form-group">
            <label for="K_JLPT">JLPT:</label>
            <input type="text" class="form-control" id="K_JLPT" placeholder="K_JLPT" name="K_JLPT" required>
        </div>
        <div class="form-group">
            <label for="K_OnYomi">On-Yomi:</label>
            <input type="text" class="form-control" id="K_OnYomi" placeholder="K_OnYomi" name="K_OnYomi" required>
        </div>
        <div class="form-group">
            <label for="K_KunYomi">Kun-Yomi:</label>
            <input type="text" class="form-control" id="K_KunYomi" placeholder="K_KunYomi" name="K_KunYomi" required>
        </div>
        <input type="hidden" class="form-control" id="K_StrokeDiagram" value="a" name="K_StrokeDiagram">
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection
