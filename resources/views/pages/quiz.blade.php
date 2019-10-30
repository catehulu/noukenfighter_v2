@extends('layouts.app')

@section('content')
    <h1>Quiz</h1>
    <h3>Welcome to our Quiz page. We are going to give you some test to measure how well you have memorize the japanese words you learned. Answer correctly on every occuring words to unlock the next level.</h3>
    <div class="row">
            Kana Quiz:
            <div class="col-sm-2">
                    <form action="/quiz/attempt/Katakana">
                    <input type="submit" value="Katakana" class="btn btn-lg" style="background-color: #ffccff">
                    </form>
            </div>
            <div class="col-sm-1">
                    <form action="/quiz/attempt/Hiragana">
                    <input type="submit" value="Hiragana" class="btn btn-lg" style="background-color: #ffccff">
                    </form>
            </div>
    </div>
    <br>
    <div class="row">
            JLPT Quiz:
            <div class="col-sm-1">
                @if($reviews >= 100)
                    <form action="/quiz/attempt/N5">
                    <input type="submit" value="N5" class="btn btn-lg" style="background-color: #d99efb">
                    </form>
                @else
                    <form action="/quiz/attempt/N5">
                    <input type="submit" value="N5" class="btn btn-lg" disabled style="background-color: #aaaaaa">
                    </form>
                @endif
            </div>
            <div class="col-sm-1">
                @if($reviews >= 300)
                    <form action="/quiz/attempt/N4">
                    <input type="submit" value="N4" class="btn btn-lg" style="background-color: #90e1f9">
                    </form>
                @else
                    <form action="/quiz/attempt/N4">
                    <input type="submit" value="N4" class="btn btn-lg" disabled style="background-color: #aaaaaa">
                    </form>
                @endif
            </div>
            <div class="col-sm-1">
                @if($reviews >= 500)
                    <form action="/quiz/attempt/N3">
                    <input type="submit" value="N3" class="btn btn-lg" style="background-color: #a5f69d">
                    </form>
                @else
                    <form action="/quiz/attempt/N3">
                    <input type="submit" value="N3" class="btn btn-lg" disabled style="background-color: #aaaaaa">
                    </form>
                @endif
            </div>
            <div class="col-sm-1">
                @if($reviews >= 700)
                    <form action="/quiz/attempt/N2">
                    <input type="submit" value="N2" class="btn btn-lg" style="background-color: #e7f695">
                    </form>
                @else
                    <form action="/quiz/attempt/N2">
                    <input type="submit" value="N2" class="btn btn-lg" disabled style="background-color: #aaaaaa">
                    </form>
                @endif
            </div>
            <div class="col-sm-1">
                @if($reviews >= 1000)
                    <form action="/quiz/attempt/N1">
                    <input type="submit" value="N1" class="btn btn-lg" style="background-color: #fd8c8c">
                    </form>
                @else
                    <form action="/quiz/attempt/N1">
                    <input type="submit" value="N1" class="btn btn-lg" disabled style="background-color: #aaaaaa">
                    </form>
                @endif
            </div>
    </div>
@endsection
