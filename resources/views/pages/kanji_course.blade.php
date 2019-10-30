@extends('layouts.app')

@section('content')

    <h1>Course {{$kanjis[0]->jlpt->jlpt_level}}</h1>
    <h3>Welcome to our Course page where you can review some of the words you have learned throughout your journey learning in our website. Each word has a corresponding picture and the details on how to memorize them properly.</h3>
    <br>
    @if(count($kanjis) >= 1)
    <h2>Result Kanji : {{count($kanjis)}}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="row">Kanji</th>
                    <th scope="col">Keyword</th>

                    <th scope="col">StrokeCount</th>
                    <th scope="col">LessonNo</th>

                    <th scope="col">JLPT</th>
                    <th scope="col"></th>

            </tr>
        </thead>
        @foreach($kanjis as $kanji)
        <tbody>
                <tr>
                        <th class="text-center" scope="row" style="font-size: 72px">{{$kanji->kanji}}</th>
                        <td>{{$kanji->keyword}}</td>

                        <td>{{$kanji->stroke_count}}</td>
                        <td>{{$kanji->lesson_no}}</td>

                        <td>{{$kanji->jlpt->jlpt_level}}</td>
                        <td>
                                <form action="/course/kanji/detail/{{$kanji->id}}">
                                <input type="submit" value="Akses" class="btn" style="background-color: #a5f69d">
                                </form>
                        </td>
                        @if(Auth::user()->status == 2)
                        <td>
                                <form action="/admin/eKanji/{{$kanji->id}}">
                                <input type="submit" value="Edit" class="btn" style="background-color: #fcf04e">
                                </form>
                        </td>
                        <td>
                                <form action="/admin/deleteKanji/{{$kanji->id}}">
                                <input type="submit" value="Delete" class="btn" style="background-color: #ff4f4f">
                                </form>
                        </td>
                        @endif

                </tr>
        </tbody>
        @endforeach
    @else
        <!--p>No kanji found</p-->
    @endif
        </table>

@endsection
