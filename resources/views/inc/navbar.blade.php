<div id="app">
	<!-- Header -->
	<header class="header">
            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container mr-auto">
                                    <a href="{{ url('/') }}">
                                        <div class="logo_text">{{ config('app.name', 'KanjiConquer') }}</div>
                                    </a>
                                </div>
                                <nav class="main_nav_container">
                                    <ul class="main_nav">
                                        {{-- <li class="active"><a href="index.html">Home</a></li> --}}
                                        <li><a href="/search">Search</a></li>
                                        <li><a href="/menu_course">Course</a></li>
                                        <li><a href="/quiz">Quiz</a></li>
                                        {{-- <li><a href="/blog">Blog</a></li> --}}
                                        {{-- <li><a href="/contact">Contact</a></li> --}}
                                    </ul>
                                    <ul class="main_nav">
                                        <!-- Authentication Links -->
                                        @guest
                                            <li class="">
                                                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="">
                                                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                                    @if(Auth::user()->status == 1)
                                                        <a href="/admin/makeKanji" class="dropdown-item">Insert New Kanji</a>
                                                        <a href="/admin/makeKana" class="dropdown-item">Insert New Kana</a>
                                                        <a href="/admin/user" class="dropdown-item">User Menu</a>
                                                    @endif

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
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'KanjiConquer') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                  <a class="nav-link" href="/search">Search</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/course">Course</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/quiz">Quiz</a>
                                </li>
                              </ul>
                            </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    @if(Auth::user()->status == 2)
                                        <a href="/admin/makeKanji" class="dropdown-item">Insert New Kanji</a>
                                        <a href="/admin/makeKana" class="dropdown-item">Insert New Kana</a>
                                        <a href="/admin/user" class="dropdown-item">User Menu</a>
                                    @endif

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
            </div>
        </nav>
</div>
