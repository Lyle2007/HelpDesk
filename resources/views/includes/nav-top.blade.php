<nav class="navbar navbar-light navbar-expand-md  bg-school-primary">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{asset('img/school_district.jpeg')}}" width="130" height="65"
             class="d-inline-block align-top p-0 m-0 ml-2" alt="">
    </a>
    {{--    <a class="navbar-brand" style="color:#fcb900 " href="{{ url('/') }}">{{ config('app.name') }}</a>--}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
            aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">

        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-2">
            @if (Route::current()->getName() == 'dashboard')
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            @else
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            @endif
        <!-- Authentication Links -->
            @guest
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
