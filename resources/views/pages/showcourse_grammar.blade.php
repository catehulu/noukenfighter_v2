@extends('layouts.app')

@section('content')
    <form action="/course/grammar/N5">
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
                    <th>Grammar</th>
                    <td class="text-center" scope="row" style="font-size: 20px">{{$grammar->judul_grammar}}</th>
                </tr>
                <tr>
                    <th>Arti Grammar</th>
                    <td class="text-center" scope="row" style="font-size: 40px">{{$grammar->arti_grammar}}</th>
                </tr>
                <tr>
                    <th>Formula Grammar</th>
                    <td class="text-center" scope="row" style="font-size: 72px">{{$grammar->formula_grammar}}</th>
                </tr>
                <tr>
                    <th>Contoh Kalimat</th>
                    <td class="text-center" scope="row" style="font-size: 72px">{{$grammar->contoh_kalimat}}</th>
                </tr>
        </tbody>
    </table>
@endsection
