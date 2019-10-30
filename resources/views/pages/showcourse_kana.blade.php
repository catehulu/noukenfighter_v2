@extends('layouts.app')

@section('content')
    <form action="/course/{{$kana->tipe}}">
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
                    <th>ID Kana</th>
                    <td class="text-center" scope="row" style="font-size: 20px">{{$kana->id}}</th>
                </tr>
                <tr>
                    <th>Kana</th>
                    <td class="text-center" scope="row" style="font-size: 72px">{{$kana->kana}}</th>
                </tr>
                <tr>
                    <th>Reading</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kana->reading}}</th>
                </tr>
                <tr>
                    <th>Tipe</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kana->tipe}}</th>
                </tr>
        </tbody>
    </table>
@endsection
