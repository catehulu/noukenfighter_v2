@extends('layouts.app')

@section('content')
        <form action="/quiz">
        <input type="submit" value="Go Back" class="btn btn-danger">
        </form>
        <div>Correct Answer {{$quiz->skor}} out of {{count($quiz->kunci_jawaban)}}</div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row">Question</th>
                    <th scope="col">Correct Answer</th>
                    <th scope="col">Your Answer</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            @foreach ($quiz->data_soal as $key => $question)
                <tbody>
                    @if($quiz->kunci_jawaban[$key] == $quiz->jawaban_peserta[$key])
                    <tr style="background-color:#79e582">
                    @else
                    <tr style="background-color:#ef5656">
                    @endif
                            <th class="text-center" scope="row" style="font-size: 72px">{{$question}}</th>
                            <td>{{$quiz->kunci_jawaban[$key]}}</td>
                            <td>{{$quiz->jawaban_peserta[$key]}}</td>
                            @if($quiz->kunci_jawaban[$key] == $quiz->jawaban_peserta[$key])
                                <td>Accepted</td>
                            @else
                                <td>Wrong Answer</td>
                            @endif
                    </tr>
                </tbody>
            @endforeach
        </table>

@endsection
