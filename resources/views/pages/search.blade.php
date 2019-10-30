@extends('layouts.app')

@section('content')
        <style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                  }

                  td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  }

                  tr:nth-child(even) {
                    background-color: #dddddd;
                  }
        </style>
        <h1>Search</h1>
        <h3>Below are list of Kanjis and Kanas you can conquer. You can learn many more Kanjis and Kanas from our extensive site.</h3>
        <br>
        <br>
        <div class="row">
                Sorted By Kana :
                <div class="col-sm-2">
                        <form action="/search/Katakana">
                        <input type="submit" value="Katakana" class="btn btn-lg" style="background-color: #ffccff">
                        </form>
                </div>
                <div class="col-sm-1">
                        <form action="/search/Hiragana">
                        <input type="submit" value="Hiragana" class="btn btn-lg" style="background-color: #ffccff">
                        </form>
                </div>
        </div>
        <br>
        <div class="row">
                Sorted By JLPT :
                <div class="col-sm-1">
                        <form action="/search/N5">
                        <input type="submit" value="N5" class="btn btn-lg" style="background-color: #d99efb">
                        </form>
                </div>

                <div class="col-sm-1">
                        <form action="/search/N4">
                        <input type="submit" value="N4" class="btn btn-lg" style="background-color: #90e1f9">
                        </form>
                </div>
                <div class="col-sm-1">
                        <form action="/search/N3">
                        <input type="submit" value="N3" class="btn btn-lg" style="background-color: #a5f69d">
                        </form>
                </div>
                <div class="col-sm-1">
                        <form action="/search/N2">
                        <input type="submit" value="N2" class="btn btn-lg" style="background-color: #e7f695">
                        </form>
                </div>
                <div class="col-sm-1">
                        <form action="/search/N1">
                        <input type="submit" value="N1" class="btn btn-lg" style="background-color: #fd8c8c">
                        </form>
                </div>
        </div>
        <br>
        <div class="row">
                Sorted By Jouyou :
                <div class="col-sm-1">
                        <form action="/search/J1">
                        <input type="submit" value="E1" class="btn btn-lg" style="background-color: #1874cd">
                        </form>
                </div>

                <div class="col-sm-1">
                        <form action="/search/J2">
                        <input type="submit" value="E2" class="btn btn-lg" style="background-color: #1c86ee">
                        </form>
                </div>
                <div class="col-sm-1">
                        <form action="/search/J3">
                        <input type="submit" value="E3" class="btn btn-lg" style="background-color: #1e90ff">
                        </form>
                </div>
                <div class="col-sm-1">
                        <form action="/search/J4">
                        <input type="submit" value="E4" class="btn btn-lg" style="background-color: #009acd">
                        </form>
                </div>
                <div class="col-sm-1">
                        <form action="/search/J5">
                        <input type="submit" value="E5" class="btn btn-lg" style="background-color: #00b2ee">
                        </form>
                </div>
                <div class="col-sm-1">
                        <form action="/search/J6">
                        <input type="submit" value="E6" class="btn btn-lg" style="background-color: #00bfff">
                        </form>
                </div>
                <div class="col-sm-1">
                        <form action="/search/JJH">
                        <input type="submit" value="JH" class="btn btn-lg" style="background-color: #00e6e6">
                        </form>
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
                    <th scope="col">Tipe</th>
            </tr>
        </thead>
        @foreach($kanas as $kana)
        <tbody>
                <tr>
                        <th class="text-center" scope="row" style="font-size: 72px">{{$kana->KN_Kana}}</th>
                        <td>{{$kana->KN_Tipe}}</td>
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

                </tr>
        </tbody>
        @endforeach
    @else
        <!--p>No kanji found</p-->
    @endif
        </table>
@endsection
