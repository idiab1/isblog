<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{App\Models\Setting::first()->name}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Center Side Of Navbar -->
            <ul class="navbar-nav mx-auto">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
                <!-- Article -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route("front.articles.index")}}">{{ __('Article') }}</a>
                </li>
                <!-- Tags -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tags') }}">{{ __('Tags') }}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <!-- Search -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fab fa-searchengin"></i>
                    </a>
                </li>
                <!-- Authentication Links -->
                @guest
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li> --}}
                    {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @else
                    {{-- Logout --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#"
                                    data-bs-toggle="modal" data-bs-target="#profile-{{Auth::user()->id}}">
                                    {{ __('Setting') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                      </li>


                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- End of Navbar -->
