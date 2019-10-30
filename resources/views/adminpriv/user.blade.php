@extends('layouts.app')

@section('content')
    <h1>User</h1>
    <br>

    @if(count($details) > 0)
    <h3>Available : {{count($details)}}</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="row">Email</th>
                <th scope="col">Authorized</th>
                <th scope="col">Quiz Attempt</th>
                <th scope="col">Resources Access</th>
                <th scope="col">Resources Review</th>
                <th scope="col">Last Login</th>
                <th scope="col">Privilege</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $detail)
                <tr>
                    <td>{{$detail->email}}</td>
                    <td>{{$detail->authorized}}</td>
                    <td>{{$detail->attemptquiz_counter}}</td>
                    <td>{{$detail->access_counter}}</td>
                    <td>{{$detail->review_counter}}</td>

                    @foreach($logs as $log)
                    <?php
                        $lastDate;
                        if($detail->email == $log->email){
                            $lastDate = $log->last_login_at;
                        }
                    ?>
                    @endforeach
                    <td>{{$lastDate}}</td>

                    <td>
                    @if($detail->authorized == 0)
                        <form action="/admin/promote/{{$detail->detail_id}}">
                        <input type="submit" value="Promote" class="btn" style="background-color: #4eff44">
                        </form>
                    @else
                        <form action="/admin/demote/{{$detail->detail_id}}">
                        <input type="submit" value="Demote" class="btn" style="background-color: #f74036">
                        </form>
                    @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h2>No User Found</h2>
    @endif
@endsection
