@extends('layouts.app')

@section('content')
    <h1>Quiz {{$quizs['keterangan']}}</h1>
    @foreach ($quizs['data_soal'] as $key => $soal)
        <form action="/quiz/result/" method ="post">
            @csrf
                <h1>{{$soal}}</h1>
                    <label class="container">
                        <input type="radio" name="answer[{{$key}}]" value="{{$quizs['data_jawaban'][$key][0]}}" checked="checked">{{$quizs['data_jawaban'][$key][0]}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer[{{$key}}]" value="{{$quizs['data_jawaban'][$key][1]}}">{{$quizs['data_jawaban'][$key][1]}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer[{{$key}}]" value="{{$quizs['data_jawaban'][$key][2]}}">{{$quizs['data_jawaban'][$key][2]}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer[{{$key}}]" value="{{$quizs['data_jawaban'][$key][3]}}">{{$quizs['data_jawaban'][$key][3]}}
                        <span class="checkmark"></span>
                    </label>
        @endforeach
            <input type="submit" value="Submit Answer" class="btn btn-info">
        </form>
@endsection
