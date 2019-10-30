@extends('layouts.app')

@section('content')
    <form action="/course/kosakata/N5">
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
                    <th>Japanese Vocab</th>
                    <td class="text-center" scope="row" style="font-size: 20px">{{$kosaKata->jp_vocab}}</th>
                </tr>
                <tr>
                    <th>English Vocabulary</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$kosaKata->eng_vocab}}</th>
                </tr>
                <tr>
                    <th>Contoh Kalimat</th>
                    <td class="text-center" scope="row" style="font-size: 72px">{{$kosaKata->contoh_kalimat}}</th>
                </tr>
        </tbody>
    </table>
@endsection
