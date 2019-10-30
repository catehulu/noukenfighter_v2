@extends('layouts.app')

@section('content')
    <h2>Edit Kanji</h2>
    @if($kosakata)
        <form action="/admin/editKosaKata/{{$kosakata}}" method="post">
            @csrf
            <div class="form-group">
                <label for="jp_vocab">Japan Vocabulary:</label>
                <input type="text" class="form-control" id="jp_vocab" value="{{$kosakata->jp_vocab}}" placeholder="jp_vocab" name="jp_vocab" required>
            </div>
            <div class="form-group">
                <label for="eng_vocab">English Vocabulary:</label>
                <input type="text" class="form-control" id="eng_vocab" value="{{$kosakata->eng_vocab}}" placeholder="eng_vocab" name="eng_vocab" required>
            </div>
            <div class="form-group">
                <label for="contoh_kalimat">Contoh Kalimat:</label>
                <input type="text" class="form-control" id="contoh_kalimat" value="{{$kosakata->contoh_kalimat}}" placeholder="contoh_kalimat" name="contoh_kalimat" required>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        @endforeach
    @else
        <h3>No Vocab Found</h3>
    @endif
@endsection
