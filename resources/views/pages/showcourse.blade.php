<?php use App\ResourceAkses;
use App\Model\User;
use App\Model\UserDetail;
?>
@extends('layouts.app')

@section('content')
    {{-- <style>
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
    </style> --}}
    @if(count($kanjis) == 1)
        <form action="/course">
        <input type="submit" value="Go Back" class="btn btn-danger">
        </form>
    <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" scope="row">Attribute</th>
                    <th class="text-center" scope="col">Value</th>
                </tr>
            </thead>
        @foreach($kanjis as $kanji)
            <tbody>
                    <tr>
                            <th>ID Kanji</th>
                            <td class="text-center" scope="row" style="font-size: 20px">{{$kanji->ID_Kanji}}</th>
                    </tr>
                    <tr>
                            <th>Kanji Keyword</th>
                            <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->K_Keyword}}</th>
                    </tr>
                    <tr>
                            <th>Kanji</th>
                            <td class="text-center" scope="row" style="font-size: 72px">{{$kanji->K_Kanji}}</th>
                    </tr>
                    <tr>
                            <th>Constituent</th>
                            <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->K_Constituent}}</th>
                    </tr>
                    <tr>
                            <th>Stroke Count</th>
                            <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->K_StrokeCount}}</th>
                    </tr>
                    <tr>
                            <th>Lesson Number</th>
                            <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->K_LessonNo}}</th>
                    </tr>
                    <tr>
                            <th>Story</th>
                            {{-- <td class="text-center"><textarea style="border : none">{{$kanji->K_Story}}</textarea></td> --}}
                            <td class="text-center" style="font-size: 20px" scope="row">{{$kanji->K_Story}}</th>

                    </tr>
                    <tr>
                            <th>Jouyou</th>
                            <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->K_JouYou}}</th>
                    </tr>
                    <tr>
                            <th>JLPT Level</th>
                            <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->K_JLPT}}</th>
                    </tr>
                    <tr>
                            <th>OnYomi</th>
                            <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->K_OnYomi}}</th>
                    </tr>
                    <tr>
                            <th>KunYomi</th>
                            <td class="text-center" scope="row" style="font-size: 40px">{{$kanji->K_KunYomi}}</th>
                    </tr>
            </tbody>
        @endforeach
        </table>
        <?php
            $users = Auth::user();
            $detail = UserDetail::where('email', $users->email)->get();

            $akses = new ResourceAkses;
            $akses->ID_User = $detail[0]->detail_id;
            $akses->email = $detail[0]->email;
            $akses->Akses_Tipe = 'Kanji';
            $akses->ID_Contain = $kanjis[0]->ID_K_Increment;
            $akses->save();
        ?>
    @endif
    @if(count($kanas) == 1)
    <form action="/course">
        <input type="submit" value="Go Back" class="btn btn-danger">
        </form>
    <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" scope="row">Attribute</th>
                    <th class="text-center" scope="col">Value</th>
                </tr>
            </thead>
        @foreach($kanas as $kana)
            <tbody>
                    <tr>
                            <th>ID Kana</th>
                            <td class="text-center" scope="row" style="font-size: 20px">{{$kana->ID_Kana}}</th>
                    </tr>
                    <tr>
                            <th>Kana</th>
                            <td class="text-center" scope="row" style="font-size: 72px">{{$kana->KN_Kana}}</th>
                    </tr>
                    <tr>
                            <th>Reading</th>
                            <td class="text-center" scope="row" style="font-size: 40px">{{$kana->KN_Reading}}</th>
                    </tr>
                    <tr>
                            <th>Tipe</th>
                            <td class="text-center" scope="row" style="font-size: 40px">{{$kana->KN_Tipe}}</th>
                    </tr>
            </tbody>
        @endforeach
        </table>
        <?php
            $users = Auth::user();
            $detail = UserDetail::where('email', $users->email)->get();

            $akses = new ResourceAkses;
            $akses->ID_User = $detail[0]->detail_id;
            $akses->email = $detail[0]->email;
            $akses->Akses_Tipe = 'Kana';
            $akses->ID_Contain = $kanas[0]->ID_Kana;
            $akses->save();
        ?>
    @endif
@endsection
