@extends('layouts.app')

@section('content')
    <h2>Insert Kana</h2>
    <form action="/admin/createKana" method="GET">
        <div class="form-group">
            <label for="KN_Kana">Kana:</label>
            <input type="text" class="form-control" id="KN_Kana" placeholder="KN_Kana" name="KN_Kana" required>
        </div>
        <div class="form-group">
            <label for="KN_Reading">Reading:</label>
            <input type="text" class="form-control" id="KN_Reading" placeholder="KN_Reading" name="KN_Reading" required>
        </div>
        <div class="form-group">
            <label for="KN_Tipe">Tipe:</label>
            <input type="text" class="form-control" id="KN_Tipe" placeholder="KN_Tipe" name="KN_Tipe" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection


