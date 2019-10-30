@extends('layouts.app')

@section('content')

    <h1>Course</h1>
    <h3>Welcome to our Course page where you can review some of the words you have learned throughout your journey learning in our website. Each word has a corresponding picture and the details on how to memorize them properly.</h3>
    <br>
    @if(count($grammars) >= 1)
    <h2>Result Grammar : {{count($grammars)}}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="row">Grammar</th>
                <th scope="col">Arti Grammar</th>
                <th scope="col">Formula Grammar</th>
                <th scope="col">Contoh Kalimat</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach($grammars as $grammar)
        <tbody>
                <tr>
                        <th class="text-center" scope="row" style="font-size: 72px">{{$grammar->judul_grammar}}</th>
                        <td>{{$grammar->arti_grammar}}</td>
                        <td>{{$grammar->formula_grammar}}</td>
                        <td>{{$grammar->contoh_kalimat}}</td>
                        <td>
                                <form action="/course/grammar/detail/{{$grammar->id}}">
                                <input type="submit" value="Akses" class="btn" style="background-color: #a5f69d">
                                </form>
                        </td>
                        @if(Auth::user()->status == 2)
                        <td>

                                <form action="/admin/eGrammar/{{$grammar->id}}">
                                <input type="submit" value="Edit" class="btn" style="background-color: #fcf04e">
                                </form>
                        </td>
                        <td>
                                <form action="/admin/deleteGrammar/{{$grammar->id}}">
                                <input type="submit" value="Delete" class="btn" style="background-color: #ff4f4f">
                                </form>
                        </td>
                        @endif
                </tr>
        </tbody>
        @endforeach
    @else
        <!--p>No grammar found</p-->
    @endif
        </table>
@endsection
