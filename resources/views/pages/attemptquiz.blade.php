<?php use App\ResourceAttempt;
use App\Model\User;
use App\Model\UserDetail;
?>
@extends('layouts.app')

@section('content')
    <?php
    function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }
    ?>

    @if(count($kanjis) > 0)
        <h1>Kanji Meaning Quiz Attempt</h1>
        <form action="/quiz/result/N{{$kanjis[0]->K_JLPT}}" method ="get">
        <?php
            $copykanjis = $kanjis;
            // echo $copykanjis;
            $questiongenerated = UniqueRandomNumbersWithinRange(0, count($kanjis)-1, 40);

        ?>
            @for($i = 0; $i < 10; $i++)
                <br>
                <?php
                    $oneforrand = rand(1,4);
                ?>
                <h1>{{$kanjis[$questiongenerated[4*$i]]->K_Kanji}}</h1>

                @if($oneforrand == 1)
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i]]->K_Keyword}}" checked="checked">{{$kanjis[$questiongenerated[4*$i]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+1]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i+1]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+2]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i+2]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+3]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i+3]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                @elseif($oneforrand == 2)
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+1]]->K_Keyword}}" checked="checked">{{$kanjis[$questiongenerated[4*$i+1]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+2]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i+2]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+3]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i+3]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                @elseif($oneforrand == 3)
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+1]]->K_Keyword}}" checked="checked">{{$kanjis[$questiongenerated[4*$i+1]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+2]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i+2]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+3]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i+3]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                @elseif($oneforrand == 4)
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+1]]->K_Keyword}}" checked="checked">{{$kanjis[$questiongenerated[4*$i+1]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+2]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i+2]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i+3]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i+3]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanjis[$questiongenerated[4*$i]]->K_Keyword}}">{{$kanjis[$questiongenerated[4*$i]]->K_Keyword}}
                        <span class="checkmark"></span>
                    </label>
                @endif
                <br>
            @endfor

            @for($k = 0; $k < 10; $k++)
                {{-- <input type="hidden" name="correct{{$k}}" value="{{$kanjis[$questiongenerated[$k*4]]->K_Keyword}}"> --}}
                {{-- <input type="hidden" name="diagram{{$k}}" values={{$kanjis[$questiongenerated[$k*4]]->K_Kanji}}> --}}
                <input type="hidden" name="correct{{$k}}" value={{$questiongenerated[$k*4]}}>
            @endfor
            <?php
                $users = Auth::user();
                $detail = UserDetail::where('email', $users->email)->get();

                $attempt = new ResourceAttempt;
                $attempt->ID_User = $detail[0]->detail_id;
                $attempt->email = $detail[0]->email;
                $attempt->Attempt_Tipe = 'N'.$kanjis[0]->K_JLPT;
                $attempt->save();
            ?>
            <input type="submit" value="Submit Answer" class="btn btn-info">
        </form>
    @endif

    @if(count($kanas) > 0)
        <h1>Kana Reading Quiz Attempt</h1>
        <form action="/quiz/result/{{$kanas[0]->KN_Tipe}}" method ="get">
            <?php
                $questiongenerated = UniqueRandomNumbersWithinRange(0, count($kanas)-1, 40);

            ?>
            @for($i = 0; $i < 10; $i++)
                <br>
                <?php
                    $oneforrand = rand(1,4);
                ?>
                <h1>{{$kanas[$questiongenerated[4*$i]]->KN_Kana}}</h1>

                @if($oneforrand == 1)
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i]]->KN_Reading}}" checked="checked">{{$kanas[$questiongenerated[4*$i]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+1]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i+1]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+2]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i+2]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+3]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i+3]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                @elseif($oneforrand == 2)
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+1]]->KN_Reading}}" checked="checked">{{$kanas[$questiongenerated[4*$i+1]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+2]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i+2]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+3]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i+3]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                @elseif($oneforrand == 3)
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+1]]->KN_Reading}}" checked="checked">{{$kanas[$questiongenerated[4*$i+1]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+2]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i+2]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+3]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i+3]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                @elseif($oneforrand == 4)
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+1]]->KN_Reading}}" checked="checked">{{$kanas[$questiongenerated[4*$i+1]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+2]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i+2]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i+3]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i+3]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">
                        <input type="radio" name="answer{{$i}}" value="{{$kanas[$questiongenerated[4*$i]]->KN_Reading}}">{{$kanas[$questiongenerated[4*$i]]->KN_Reading}}
                        <span class="checkmark"></span>
                    </label>
                @endif
                <br>
            @endfor

            @for($k = 0; $k < 10; $k++)
                {{-- <input type="hidden" name="correct{{$k}}" value="{{$kanjis[$questiongenerated[$k*4]]->K_Keyword}}"> --}}
                {{-- <input type="hidden" name="diagram{{$k}}" values={{$kanjis[$questiongenerated[$k*4]]->K_Kanji}}> --}}
                <input type="hidden" name="correct{{$k}}" value={{$questiongenerated[$k*4]}}>
            @endfor
            <?php
                $users = Auth::user();
                $detail = UserDetail::where('email', $users->email)->get();

                $attempt = new ResourceAttempt;
                $attempt->ID_User = $detail[0]->detail_id;
                $attempt->email = $detail[0]->email;
                $attempt->Attempt_Tipe = $kanas[0]->KN_Tipe;
                $attempt->save();
            ?>
            <input type="submit" value="Submit Answer" class="btn btn-info">
        </form>
    @endif
@endsection
