@extends('layouts.app')

@section('content')
    <h2>Edit Kana</h2>
        @foreach($kana as $kanas)
        <form action="/admin/editKana/{{$kanas->ID_Kana}}" method="GET">
            <div class="form-group">
                <label for="KN_Kana">Kana:</label>
                <input type="text" class="form-control" id="KN_Kana" value="{{$kanas->KN_Kana}}" placeholder="KN_Kana" name="KN_Kana" required>
            </div>
            <div class="form-group">
                <label for="KN_Reading">Reading:</label>
                <input type="text" class="form-control" id="KN_Reading" value="{{$kanas->KN_Reading}}" placeholder="KN_Reading" name="KN_Reading" required>
            </div>
            <div class="form-group">
                <label for="KN_Tipe">Tipe:</label>
                <input type="text" class="form-control" id="KN_Tipe" value="{{$kanas->KN_Tipe}}" placeholder="KN_Tipe" name="KN_Tipe" required>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        @endforeach
    @else
        <h3>No Kana Found.</h3>
    @endif
@endsection
