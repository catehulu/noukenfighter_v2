@extends('layouts.app')

@section('content')

    <h1>Course</h1>
    <h3>Welcome to our Course page where you can review some of the words you have learned throughout your journey learning in our website. Each word has a corresponding picture and the details on how to memorize them properly.</h3>
    <br>
    @if(count($kosakatas) >= 1)
    <h2>Result Kosa Kata : {{count($kosakatas)}}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="row">Kosa Kata</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach($kosakatas as $kosakata)
        <tbody>
                <tr>
                        <th class="text-center" scope="row" style="font-size: 72px">{{$kosakata->jp_vocab}}</th>
                        <td>
                                <form action="/course/kosakata/detail/{{$kosakata->id}}">
                                <input type="submit" value="Akses" class="btn" style="background-color: #a5f69d">
                                </form>
                        </td>
                        @if(Auth::user()->status == 2)
                        <td>
                                <form action="/admin/eKosaKata/{{$kosakata->id}}">
                                <input type="submit" value="Edit" class="btn" style="background-color: #fcf04e">
                                </form>
                        </td>
                        <td>
                                <form action="/admin/deleteKosaKata/{{$kosakata->id}}">
                                <input type="submit" value="Delete" class="btn" style="background-color: #ff4f4f">
                                </form>
                        </td>
                        @endif
                </tr>
        </tbody>
        @endforeach
    @else
        <!--p>No KosaKata found</p-->
    @endif
        </table>
@endsection
