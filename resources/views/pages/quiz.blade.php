@extends('layouts.app')

@section('content')
    <h1>Quiz</h1>
    <h3>Welcome to our Quiz page. We are going to give you some test to measure how well you have memorize the japanese words you learned. Answer correctly on every occuring words to unlock the next level.</h3>
    <div class="card border-primary">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
              <h4 class="card-title">Kana Course</h4>
              <div class="row">
                  <div class="col-sm-6">
                      <form action="/quiz/attempt/kana/katakana">
                      <input type="submit" value="Katakana" class="btn btn-lg" style="background-color: #ffccff">
                      </form>
                  </div>
                  <div class="col-sm-6">
                          <form action="/quiz/attempt/kana/hiragana">
                      <input type="submit" value="Hiragana" class="btn btn-lg" style="background-color: #ffccff">
                      </form>
                  </div>
              </div>
            </div>
          </div>
      
          <div class="card border-primary">
            <div class="card-body">
              <h4 class="card-title">Kanji Course</h4>
                  <div class="row">
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/kanji/N5">
                          <input type="submit" value="N5" class="btn btn-lg" style="background-color: #d99efb">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/kanji/N4">
                          <input type="submit" value="N4" class="btn btn-lg" style="background-color: #90e1f9">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/kanji/N3">
                          <input type="submit" value="N3" class="btn btn-lg" style="background-color: #a5f69d">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/kanji/N2">
                          <input type="submit" value="N2" class="btn btn-lg" style="background-color: #e7f695">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/kanji/N1">
                          <input type="submit" value="N1" class="btn btn-lg" style="background-color: #fd8c8c">
                          </form>
                      </div>
                  </div>
            </div>
          </div>
      
          
      
          <div class="card border-primary">
            <div class="card-body">
              <h4 class="card-title">Vocabulary Course</h4>
                  <div class="row">
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/kosakata/N5">
                          <input type="submit" value="N5" class="btn btn-lg" style="background-color: #d99efb">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/kosakata/N4">
                          <input type="submit" value="N4" class="btn btn-lg" style="background-color: #90e1f9">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/kosakata/N3">
                          <input type="submit" value="N3" class="btn btn-lg" style="background-color: #a5f69d">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/kosakata/N2">
                          <input type="submit" value="N2" class="btn btn-lg" style="background-color: #e7f695">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/kosakata/N1">
                          <input type="submit" value="N1" class="btn btn-lg" style="background-color: #fd8c8c">
                          </form>
                      </div>
                  </div>
            </div>
          </div>
      
          
      
          <div class="card border-primary">
            <div class="card-body">
              <h4 class="card-title">Grammar Course</h4>
                  <div class="row">
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/grammar/N5">
                          <input type="submit" value="N5" class="btn btn-lg" style="background-color: #d99efb">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/grammar/N4">
                          <input type="submit" value="N4" class="btn btn-lg" style="background-color: #90e1f9">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/grammar/N3">
                          <input type="submit" value="N3" class="btn btn-lg" style="background-color: #a5f69d">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/grammar/N2">
                          <input type="submit" value="N2" class="btn btn-lg" style="background-color: #e7f695">
                          </form>
                      </div>
                      <div class="col-sm-2">
                          <form action="/quiz/attempt/grammar/N1">
                          <input type="submit" value="N1" class="btn btn-lg" style="background-color: #fd8c8c">
                          </form>
                      </div>
                  </div>
            </div>
          </div>
@endsection
