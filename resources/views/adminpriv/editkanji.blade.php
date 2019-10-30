@extends('layouts.app')

@section('content')
    <h2>Edit Kanji</h2>
    @if(count($kanji) > 0)
        @foreach($kanji as $kanjis)
        <form action="/admin/editKanji/{{$kanjis->ID_K_Increment}}" method="GET">
            <div class="form-group">
                <label for="ID_Kanji">ID Kanji:</label>
                <input type="text" class="form-control" id="ID_Kanji" value="{{$kanjis->ID_Kanji}}" placeholder="ID_Kanji" name="ID_Kanji" required>
            </div>
            <div class="form-group">
                <label for="K_Keyword">Keyword:</label>
                <input type="text" class="form-control" id="K_Keyword" value="{{$kanjis->K_Keyword}}" placeholder="K_Keyword" name="K_Keyword" required>
            </div>
            <div class="form-group">
                <label for="K_Kanji">Kanji:</label>
                <input type="text" class="form-control" id="K_Kanji" value="{{$kanjis->K_Kanji}}" placeholder="K_Kanji" name="K_Kanji" required>
            </div>
            <div class="form-group">
                <label for="K_Constituent">Constituent:</label>
                <input type="text" class="form-control" id="K_Constituent" value="{{$kanjis->K_Constituent}}" placeholder="K_Constituent" name="K_Constituent" required>
            </div>
            <div class="form-group">
                <label for="K_StrokeCount">StrokeCount:</label>
                <input type="text" class="form-control" id="K_StrokeCount" value="{{$kanjis->K_StrokeCount}}" placeholder="K_StrokeCount" name="K_StrokeCount" required>
            </div>
            <div class="form-group">
                <label for="K_LessonNo">Lesson No:</label>
                <input type="text" class="form-control" id="K_LessonNo" value="{{$kanjis->K_LessonNo}}" placeholder="K_LessonNo" name="K_LessonNo" required>
            </div>
            <div class="form-group">
                <label for="K_Story">Story:</label>
                <input type="text" class="form-control" id="K_Story" value="{{$kanjis->K_Story}}" placeholder="K_Story" name="K_Story" required>
            </div>
            <div class="form-group">
                <label for="K_JouYou">Jouyou:</label>
                <input type="text" class="form-control" id="K_JouYou" value="{{$kanjis->K_JouYou}}" placeholder="K_JouYou" name="K_JouYou" required>
            </div>
            <div class="form-group">
                <label for="K_JLPT">JLPT:</label>
                <input type="text" class="form-control" id="K_JLPT" value="{{$kanjis->K_JLPT}}" placeholder="K_JLPT" name="K_JLPT" required>
            </div>
            <div class="form-group">
                <label for="K_OnYomi">On-Yomi:</label>
                <input type="text" class="form-control" id="K_OnYomi" value="{{$kanjis->K_OnYomi}}" placeholder="K_OnYomi" name="K_OnYomi" required>
            </div>
            <div class="form-group">
                <label for="K_KunYomi">Kun-Yomi:</label>
                <input type="text" class="form-control" id="K_KunYomi" value="{{$kanjis->K_KunYomi}}" placeholder="K_KunYomi" name="K_KunYomi" required>
            </div>
            <input type="hidden" class="form-control" id="K_StrokeDiagram" value="a" name="K_StrokeDiagram">
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        @endforeach
    @else
        <h3>No Kanji Found</h3>
    @endif
@endsection
