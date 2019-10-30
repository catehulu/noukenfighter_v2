@extends('layouts.app')

@section('content')
    <form action="/course/kanji/{{$kanji->jlpt->jlpt_level}}">
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
                    <th>ID Kanji</th>
                    <td class="text-center" scope="row" style="font-size: 20px">{{$kanji->id}}</th>
                </tr>
                <tr>
                    <th>Kanji Keyword</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->keyword}}</th>
                </tr>
                <tr>
                    <th>Kanji</th>
                    <td class="text-center" scope="row" style="font-size: 72px">{{$kanji->kanji}}</th>
                </tr>
                <tr>
                    <th>Constituent</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->constituent}}</th>
                </tr>
                <tr>
                    <th>Stroke Count</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->stroke_count}}</th>
                </tr>
                <tr>
                    <th>Lesson Number</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->lesson_no}}</th>
                </tr>
                <tr>
                    <th>Story</th>
                    <td class="text-center" style="font-size: 20px" scope="row">{{$kanji->story}}</th>
                </tr>
                <tr>
                    <th>JLPT Level</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->jlpt->jlpt_level}}</th>
                </tr>
                <tr>
                    <th>OnYomi</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->on_yomi}}</th>
                </tr>
                <tr>
                    <th>KunYomi</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->kun_yomi}}</th>
                </tr>
        </tbody>
    </table>
@endsection
