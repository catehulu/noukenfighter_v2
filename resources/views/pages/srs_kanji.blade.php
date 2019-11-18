<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'NoukenFighter') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom/custom.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @yield('custom-css')
</head>
<body>
    <div class="container">

        <section id="titlePart">
            <div class="row m-2">
                <div id="bannerTitle" class="text-center col-12">
                    <h1 id="partText" class="font-weight-bolder">SRS</h1>
                </div>
            </div>
        </section>

        <a href="/course/kosakata/N5" class="btn">
            <div class="row align-items-center hoverEffect">
                <div class="col-3">
                    <img src="{{ asset('img/goback_button.png') }}" alt="" srcset="">
                </div>
            </div>
        </a>

        <section class="contentPart" style="margin-bottom: 100px;">
            <div class="mainPart" style="margin-bottom: 50px;">
                <div id="question" class="row justify-content-center align-items-center">
                    <div class="col-2 bg-red completeRoundedSquare m-3" style="height: 100%; width: 100%;">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <div class="text-white" style="font-size: 80px">
                                鬱
                            </div>
                        </div>
                    </div>
                </div>

                <div id="answer" class="row justify-content-center align-items-center">
                    <div class="col-2 bg-red completeRoundedSquare m-3" style="height: 100%; width: 100%;">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <div class="text-white" style="font-size: 40px">
                                Gloom
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 200px;">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <h1 id="questionButton" class="font-weight-bolder text-white text-center bg-gray">SHOW ANSWER</h1>
                    </div>
                    <div class="col-3"></div>
                </div>

                <div id="answerButton" class="row justify-content-center align-items-center" style="margin-top: 200px;">
                    <div class="btn-group btn-group-lg">
                        <button type="button" class="btn btn-danger" style="font-size: 40px;">Again</button>
                        <button type="button" class="btn btn-secondary" style="font-size: 40px;">Hard</button>
                        <button type="button" class="btn btn-success" style="font-size: 40px;">Good</button>
                        <button type="button" class="btn btn-primary" style="font-size: 40px;">Easy</button>
                    </div>
                </div>


                {{-- <div class="row" style="padding-left: 40px; padding-right: 40px;">
                    <h3 id="partText" class="font-weight-bold">[GRAMMAR_MEANING]</h3>
                </div> --}}
            </div>
        </section>

    </div>

    <script>
        $(document).ready(function(){
            $('#answer').hide()
            $('#answerButton').hide()
            $('#questionButton').on('click', function(){
                $('#question').hide()
                $('#questionButton').hide()
                $('#answer').show()
                $('#answerButton').show()
            })
            $('#answerButton').on('click', function(){
                $('#question').show()
                $('#questionButton').show()
                $('#answer').hide()
                $('#answerButton').hide()
            })
        })
    </script>
</body>
</html>
