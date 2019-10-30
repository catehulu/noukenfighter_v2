@extends('layouts.app')

@section('content')
    @if ($kana)
        <h2>Edit Kana</h2>
        <form action="/admin/editKana/{{$kana}}" method="post">
            @csrf
            <div class="form-group">
                <label for="kana">Kana:</label>
                <input type="text" class="form-control" id="kana" value="{{$kana->kana}}" placeholder="kana" name="KN_Kana" required>
            </div>
            <div class="form-group">
                <label for="reading">Reading:</label>
                <input type="text" class="form-control" id="reading" value="{{$kana->reading}}" placeholder="reading" name="reading" required>
            </div>
            <div class="form-group">
                <label for="tipe">Tipe:</label>
                <input type="text" class="form-control" id="tipe" value="{{$kana->tipe}}" placeholder="tipe" name="tipe" required>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    @else
        <h3>No Kana Found.</h3>
    @endif
@endsection
