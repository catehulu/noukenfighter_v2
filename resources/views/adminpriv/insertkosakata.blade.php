@extends('layouts.app')

@section('content')
    <h2>Insert Kosakata</h2>
    <form action="/admin/createKosaKata" method="post">
        @csrf
        <div class="form-group">
            <label for="jp_vocab">Japan Vocabulary:</label>
            <input type="text" class="form-control" id="jp_vocab" placeholder="jp_vocab" name="jp_vocab" required>
        </div>
        <div class="form-group">
            <label for="eng_vocab">English Vocabulary:</label>
            <input type="text" class="form-control" id="eng_vocab" placeholder="eng_vocab" name="eng_vocab" required>
        </div>
        <div class="form-group">
            <label for="contoh_kalimat">Contoh Kalimat:</label>
            <input type="text" class="form-control" id="contoh_kalimat" placeholder="contoh_kalimat" name="contoh_kalimat" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection


