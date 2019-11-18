@extends('layouts.app')

@section('content')
<div class="container">
    <section class="bannerPart">
        <img src="{{ asset('img/banner_logo.png') }}">
        <img id="logo" src="{{ asset('img/noukenfighter_logo.png') }}" alt="" srcset="">
        <img id="cloudTop" src="{{ asset('img/cloud_position_up.png') }}" alt="" srcset="">
        {{-- <img id="cloudBottom" src="{{ asset('img/cloud_position_down.png') }}" alt="" srcset=""> --}}
        <div class="row">
            <div id="bannerTitle" class="text-center col-12">
                <h1 class="font-weight-bolder">SUBSCRIPTION</h1>
            </div>
        </div>
    </section>

    <section class="contentPart" style="margin-top: 200px; margin-bottom: 100px;">
        <div class="formPart" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-12">
                    <h1 id="partText" class="font-weight-bolder text-white text-center">SUBSCRIPTION TYPE</h1>
                </div>
            </div>
            <div id="partContent" style="padding: 60px;">
                <div class="card bg-dark">
                    <img class="card-img-top" src="{{ asset('img/monthly.png') }}" alt="Card image cap">

                    <div class="card-body">
                        <h1 class="card-text text-white font-weight-bolder text-center">MONTHLY</h1>
                        <p class="card-text text-white font-weight-bold text-center">10.00 USD/month</p>
                        <hr>
                        <p class="card-text text-white text-center">Access to all level of JLPT N5, N4, N3, N2, N1 monthly</p>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success text-white rounded-2 font-weight-bolder">SELECT</a>
                        </div>
                    </div>
                </div>

                <div class="card bg-dark">
                    <img class="card-img-top" src="{{ asset('img/annual.png') }}" alt="Card image cap">

                    <div class="card-body">
                        <h1 class="card-text text-white font-weight-bolder text-center">ANNUAL</h1>
                        <p class="card-text text-white font-weight-bold text-center">100.00 USD/year</p>
                        <hr>
                        <p class="card-text text-white text-center">Access to all level of JLPT N5, N4, N3, N2, N1 for the whole year</p>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success text-white rounded-2 font-weight-bolder">SELECT</a>
                        </div>
                    </div>
                </div>

                <div class="card bg-dark">
                    <img class="card-img-top" src="{{ asset('img/lifetime.png') }}" alt="Card image cap">

                    <div class="card-body">
                        <h1 class="card-text text-white font-weight-bolder text-center">LIFETIME</h1>
                        <p class="card-text text-white font-weight-bold text-center">300.00 USD</p>
                        <hr>
                        <p class="card-text text-white text-center">Access to all level of JLPT N5, N4, N3, N2, N1 forever</p>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-success text-white rounded-2 font-weight-bolder">SELECT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="detailPart" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-12">
                    <h1 id="partText" class="font-weight-bolder text-white text-center">PAYMENT INFORMATION</h1>
                </div>
            </div>
            <div class="container" style="padding: 40px;">
                <form action="#">
                    <div class="form-group">
                        <label for="nameOnCard">Name On Card:</label>
                        <input type="text" class="form-control" id="name_on_card">
                    </div>
                    <div class="form-group">
                        <label for="cardNumber">Card Number:</label>
                        <input type="text" class="form-control" id="card_number">
                    </div>
                    <button type="submit" class="btn btn-primary font-weight-bolder">SUBMIT</button>
                </form>
            </div>
        </div>
    </section>


</div>
@endsection
