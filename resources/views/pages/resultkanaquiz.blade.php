@extends('layouts.app')

@section('content')
    <?php
        use App\ResourceReview;
        use App\Model\User;
        use App\Model\UserDetail;
        $correctanswer = 0;
        $realans = array();
        $usrans = array();

        $users = Auth::user();
        $details = UserDetail::where('email', $users->email)->get();
        for($i = 0; $i < 10; $i++){

            $firststring = 'correct';
            $secondstring = 'answer';
            $realans[$i] = $_GET[$firststring.$i];
            $usrans[$i] = $_GET[$secondstring.$i];
            if($kanas[$realans[$i]]->KN_Reading == $usrans[$i]){

                $correctanswer += 1;

                $review = new ResourceReview;
                $review->ID_User = $details[0]->detail_id;
                $review->email = $details[0]->email;
                $review->Review_Tipe = $kanas[0]->KN_Tipe;
                $review->ID_Contain = $kanas[$realans[$i]]->ID_Kana;
                $review->save();

            }
        }

        // $details[0]->review_counter += $correctanswer;
        // $details[0]->attemptquiz_counter += 1;
        // $details[0]->save();
    ?>

    @if(count($kanas) > 0)
        <form action="/quiz">
        <input type="submit" value="Go Back" class="btn btn-danger">
        </form>
        <div>Correct Answer {{$correctanswer}} out of 10</div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row">Kana</th>
                    <th scope="col">Correct Answer</th>
                    <th scope="col">Your Answer</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            @for($i = 0; $i < 10; $i++)
                <tbody>
                    @if($kanas[$realans[$i]]->KN_Reading == $usrans[$i])
                    <tr style="background-color:#79e582">
                    @else
                    <tr style="background-color:#ef5656">
                    @endif
                            <th class="text-center" scope="row" style="font-size: 72px">{{$kanas[$realans[$i]]->KN_Kana}}</th>
                            <td>{{$kanas[$realans[$i]]->KN_Reading}}</td>
                            <td>{{$usrans[$i]}}</td>
                            @if($kanas[$realans[$i]]->KN_Reading == $usrans[$i])
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
