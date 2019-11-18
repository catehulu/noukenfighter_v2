<div id="app">
	<!-- Header -->
        <div class="container">
            <nav style="font-family:Verdana, Geneva, Tahoma, sans-serif;" class="navbar navbar-expand-sm bg-white navbar-light">
                <a style="font-weight:bolder" class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'NoukenFighter') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            {{-- <div class="collapse navbar-collapse" id="navbarCollapse"> --}}
                            <ul class="navbar-nav mr-auto">
                                <li style="font-weight:400" class="nav-item">
                                    <a class="nav-link" href="/course">Course</a>
                                </li>
                                {{-- <li style="font-weight:400" class="nav-item">
                                    <a class="nav-link" href="/quiz">Quiz</a>
                                </li> --}}
                            </ul>
                            {{-- </div> --}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li style="font-weight:bolder" class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li style="font-weight:bolder" class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li style="font-weight: 400" class="nav-item">
                                <form action="#" class="nav-link">
                                    <input type="text" placeholder="Search.." name="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                            <li style="font-weight:bolder" class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div id="navbarDropdown" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->status == 2)
                                        <a href="/admin/makeKanji" class="dropdown-item">Insert New Kanji</a>
                                        <a href="/admin/makeKana" class="dropdown-item">Insert New Kana</a>
                                        <a href="/admin/makeGrammar" class="dropdown-item">Insert New Grammar</a>
                                        <a href="/admin/makeKosaKata" class="dropdown-item">Insert New Kosa Kata</a>
                                        <a href="/admin/user" class="dropdown-item">User Menu</a>
                                    @endif

                                    <a href="/report" class="dropdown-item bg-info">Progress Report</a>
                                    {{-- <li style="font-weight:bolder" class="nav-item dropdown"> --}}
                                    <a href="/subscribe" class="dropdown-item bg-info">Subscription</a>
                                    {{-- </li> --}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
        <script>
            $(document).ready(function(){
                $('a#navbarDropdown').on('click', function(){
                    $('div#navbarDropdown').slideToggle()
                })
            })
        </script>
</div>
