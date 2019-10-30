@extends('layouts.app')

@section('content')
    <?php
        use App\Model\User;
        use App\Model\UserDetail;
        use App\ResourceReview;
        $realans = array();
        $usrans = array();
        $correctanswer = 0;

        $users = Auth::user();
        $details = UserDetail::where('email', $users->email)->get();
        for($i = 0; $i < 10; $i++){
            $firststring = 'correct';
            $secondstring = 'answer';
            $realans[$i] = $_GET[$firststring.$i];
            $usrans[$i] = $_GET[$secondstring.$i];
            if($kanjis[$realans[$i]]->K_Keyword == $usrans[$i]){
                $correctanswer += 1;

                $review = new ResourceReview;
                $review->ID_User = $details[0]->detail_id;
                $review->email = $details[0]->email;
                $review->Review_Tipe = 'N'.$kanjis[0]->K_JLPT;
                $review->ID_Contain = $kanjis[$realans[$i]]->ID_K_Increment;
                $review->save();
            }
        }

        // $details[0]->review_counter += $correctanswer;
        // $details[0]->attemptquiz_counter += 1;
        // $details[0]->save();
    ?>

    @if(count($kanjis) > 0)
        <form action="/quiz">
        <input type="submit" value="Go Back" class="btn btn-danger">
        </form>
        <div>Correct Answer {{$correctanswer}} out of 10</div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row">Kanji</th>
                    <th scope="col">Correct Answer</th>
                    <th scope="col">Your Answer</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            @for($i = 0; $i < 10; $i++)
                <tbody>
                    @if($kanjis[$realans[$i]]->K_Keyword == $usrans[$i])
                    <tr style="background-color:#79e582">
                    @else
                    <tr style="background-color:#ef5656">
                    @endif
                            <th class="text-center" scope="row" style="font-size: 72px">{{$kanjis[$realans[$i]]->K_Kanji}}</th>
                            <td>{{$kanjis[$realans[$i]]->K_Keyword}}</td>
                            <td>{{$usrans[$i]}}</td>
                            @if($kanjis[$realans[$i]]->K_Keyword == $usrans[$i])
                                <td>Accepted</td>
                            @else
                                <td>Wrong Answer</td>
                            @endif
                    </tr>
                </tbody>
            @endfor
        </table>
    @endif

@endsection
