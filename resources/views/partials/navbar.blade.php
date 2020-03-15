<nav class="navbar navbar-expand-md navbar-light bg-white">
  <div class="navbar-header">
    <button class="navbar-toggler toggler-example purple darken-3" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span>Menu</span>
    </button>
  </div>
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @guest
              <a class="navbar-brand navbar-nav mr-auto contactButton bg-animate hover-bg-white" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
            @else
              <a class="navbar-brand navbar-nav mr-auto contactButton bg-animate hover-bg-white" href="{{ url('/list') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
            @endguest
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="navbar-brand navbar-nav mr-auto contactButton bg-animate hover-bg-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="navbar-brand navbar-nav mr-auto contactButton bg-animate hover-bg-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle contactButton bg-animate hover-bg-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Account <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <p style='margin-left: 10px;'>{{ Auth::user()->name }},</p>
                            <a class="dropdown-item" href="{{ route('dash') }}">
                              Dashboard
                            </a>
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
