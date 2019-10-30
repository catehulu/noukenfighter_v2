@extends('layouts.template')

@section('content')
    <h1>Search</h1>
    @if(count($kanjis) > 1)
        @foreach($kanjis as $kanji)
            <div class="well">
                <h3>{{$kanji->K_Kanji}} : {{$kanji->K_Keyword}}</h3>
                
            </div>
        @endforeach
    @else
        <p>No kanji found</p>
    @endif
@endsection