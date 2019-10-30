@extends('layouts.app')

@section('content')

    <h1>Course</h1>
    <h3>Welcome to our Course page where you can review some of the words you have learned throughout your journey learning in our website. Each word has a corresponding picture and the details on how to memorize them properly.</h3>
    <br>
    <div class="row">
            Sorted By Kana :
            <div class="col-sm-2">
                    <form action="/course/Katakana">
                    <input type="submit" value="Katakana" class="btn btn-lg" style="background-color: #ffccff">
                    </form>
            </div>
            <div class="col-sm-1">
                    <form action="/course/Hiragana">
                    <input type="submit" value="Hiragana" class="btn btn-lg" style="background-color: #ffccff">
                    </form>
            </div>
    </div>
    <br>
    <div class="row">
            Sorted By JLPT :
            <div class="col-sm-1">
                {{-- @if($reviews >= 100) --}}
                    <form action="/course/N5">
                    <input type="submit" value="N5" class="btn btn-lg" style="background-color: #d99efb">
                    </form>
                {{-- @else
                    <form action="/course/N5">
                    <input type="submit" value="N5" class="btn btn-lg" disabled style="background-color: #aaaaaa">
                    </form>
                @endif --}}
            </div>
            <div class="col-sm-1">
                {{-- @if($reviews >= 300) --}}
                    <form action="/course/N4">
                    <input type="submit" value="N4" class="btn btn-lg" style="background-color: #90e1f9">
                    </form>
                {{-- @else
                    <form action="/course/N4">
                    <input type="submit" value="N4" class="btn btn-lg" disabled style="background-color: #aaaaaa">
                    </form>
                @endif --}}
            </div>
            <div class="col-sm-1">
                {{-- @if($reviews >= 500) --}}
                    <form action="/course/N3">
                    <input type="submit" value="N3" class="btn btn-lg" style="background-color: #a5f69d">
                    </form>
                {{-- @else
                    <form action="/course/N3">
                    <input type="submit" value="N3" class="btn btn-lg" disabled style="background-color: #aaaaaa">
                    </form>
                @endif --}}
            </div>
            <div class="col-sm-1">
                {{-- @if($reviews >= 700) --}}
                    <form action="/course/N2">
                    <input type="submit" value="N2" class="btn btn-lg" style="background-color: #e7f695">
                    </form>
                {{-- @else
                    <form action="/course/N2">
                    <input type="submit" value="N2" class="btn btn-lg" disabled style="background-color: #aaaaaa">
                    </form>
                @endif --}}
            </div>
            <div class="col-sm-1">
                {{-- @if($reviews >= 1000) --}}
                    <form action="/course/N1">
                    <input type="submit" value="N1" class="btn btn-lg" style="background-color: #fd8c8c">
                    </form>
                {{-- @else
                    <form action="/course/N1">
                    <input type="submit" value="N1" class="btn btn-lg" disabled style="background-color: #aaaaaa">
                    </form>
                @endif --}}
            </div>
    </div>
    <br>
    <br>
    @if(count($kanas) >= 1)
    <h2>Result Kana : {{count($kanas)}}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="row">Kana</th>
                    <th scope="col">Reading</th>
                    <th scope="col">Tipe</th>
                    <th scope="col"></th>
            </tr>
        </thead>
        @foreach($kanas as $kana)
        <tbody>
                <tr>
                        <th class="text-center" scope="row" style="font-size: 72px">{{$kana->KN_Kana}}</th>
                        <td>{{$kana->KN_Reading}}</td>
                        <td>{{$kana->KN_Tipe}}</td>
                        <td>
                                <form action="/course/Kana/{{$kana->ID_Kana}}">
                                <input type="submit" value="Akses" class="btn" style="background-color: #a5f69d">
                                </form>
                        </td>
                        @if($auth == 1)
                        <td>
                                <form action="/admin/eKana/{{$kana->ID_Kana}}">
                                <input type="submit" value="Edit" class="btn" style="background-color: #fcf04e">
                                </form>
                        </td>
                        <td>
                                <form action="/admin/deleteKana/{{$kana->ID_Kana}}">
                                <input type="submit" value="Delete" class="btn" style="background-color: #ff4f4f">
                                </form>
                        </td>
                        @endif
                </tr>
        </tbody>
        @endforeach
    @else
        <!--p>No Kana found</p-->
    @endif
        </table>
    @if(count($kanjis) >= 1)
    <h2>Result Kanji : {{count($kanjis)}}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="row">Kanji</th>
                    <th scope="col">Keyword</th>

                    <th scope="col">StrokeCount</th>
                    <th scope="col">LessonNo</th>

                    <th scope="col">Jouyou</th>
                    <th scope="col">JLPT</th>
                    <th scope="col"></th>

            </tr>
        </thead>
        @foreach($kanjis as $kanji)
        <tbody>
                <tr>
                        <th class="text-center" scope="row" style="font-size: 72px">{{$kanji->K_Kanji}}</th>
                        <td>{{$kanji->K_Keyword}}</td>

                        <td>{{$kanji->K_StrokeCount}}</td>
                        <td>{{$kanji->K_LessonNo}}</td>

                        <td>{{$kanji->K_JouYou}}</td>
                        <td>{{$kanji->K_JLPT}}</td>
                        <td>
                                <form action="/course/Kanji/{{$kanji->ID_K_Increment}}">
                                <input type="submit" value="Akses" class="btn " style="background-color: #a5f69d">
                                </form>
                        </td>
                        @if($auth == 1)
                        <td>
                                <form action="/admin/eKanji/{{$kanji->ID_K_Increment}}">
                                <input type="submit" value="Edit" class="btn" style="background-color: #fcf04e">
                                </form>
                        </td>
                        <td>
                                <form action="/admin/deleteKanji/{{$kanji->ID_K_Increment}}">
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
