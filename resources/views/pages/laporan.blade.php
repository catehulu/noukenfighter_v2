@extends('layouts.app')

@section('content')

    <h1>Laporan</h1>
    <h3>Your Learning History</h3>
    <br>

    <div class="card border-primary">
      <div class="card-body">
        <h4 class="card-title">Kanji Course</h4>
           <h4>Number of Kanji you've learn : </h4>
           <h1>{{count(explode(',',$dataPembelajaran->srs_data))}}</h1>
      </div>
    </div>

    <br>        
    @foreach ($dataPembelajaran->quiz as $quizes)
        <div class="card border-primary">
        <div class="card-body">
            <h4 class="card-title">{{$quizes->keterangan}}</h4>
                <div class="row">
                    <label for="score">Your Score : </label>
                    <h4 id="score" name="score">{{$quizes->skor}}</h4>
                </div>
            </div>
         </div>
    <br>
    @endforeach
@endsection
