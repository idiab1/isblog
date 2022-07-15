<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{App\Models\Setting::first()->name}} - @yield('page_name')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{asset("libs/fontawesome-free/css/all.min.css")}}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{-- Other Styles --}}
        @yield('styles')
    </head>
    <body>
        <div id="app">

            @section('navbar')
                {{-- Navbar --}}
                @include('include.navbar')
            @show

            @section('header')
                {{-- header --}}
                @include('include.header')
            @show

            {{-- Main --}}
            <main>
                @yield('content')
            </main>
        </div>

        <!-- Setting Profile Modal -->
        @auth
        <div class="modal fade" id="profile-{{Auth::user()->id}}" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
            aria-hidden="true">
            <!-- model dialog -->
            <div class="modal-dialog">
                <!-- model dialog -->
                <div class="modal-content">
                    <!-- model header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">{{Auth::user()->name . "'s"}}</h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- ./model-header -->

                    <!-- form -->
                    <form action="{{route("front.profile.update", ["id" => Auth::user()->id])}}"
                        method="POST">

                        <!-- model body -->
                        <div class="modal-body">
                            @csrf
                            @method("PUT")
                            <!-- Name -->
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name"
                                    value="{{Auth::user()->name}}">
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email"
                                    value="{{Auth::user()->email}}">
                            </div>

                            <!-- Linkedin -->
                            <div class="input-group mb-3">
                                <!-- Icon -->
                                <span class="input-group-text" id="linkedin_url">
                                    <i class="fab fa-linkedin"></i>
                                </span>
                                <!-- Input -->
                                <input class="form-control" type="text" aria-label="linkedin_url"
                                    aria-describedby="linkedin_url" name="linkedin_url"
                                    value="{{Auth::user()->linkedin_url}}">
                            </div>

                            <!-- Github -->
                            <div class="input-group">
                                <!-- Icon -->
                                <span class="input-group-text" id="github_url">
                                    <i class="fab fa-github-square"></i>
                                </span>
                                <!-- Input -->
                                <input class="form-control" type="text" aria-label="github_url"
                                    aria-describedby="github_url" name="github_url"
                                    value="{{Auth::user()->github_url}}">
                            </div>

                            <!-- Github -->
                            <div class="input-group">
                                <!-- Icon -->
                                <span class="input-group-text" id="github_url">
                                    <i class="fab fa-github-square"></i>
                                </span>
                                <!-- Input -->
                                <input class="form-control" type="text" aria-label="github_url"
                                    aria-describedby="github_url" name="github_url"
                                    value="{{Auth::user()->github_url}}">
                            </div>

                            <!-- Github -->
                            <div class="input-group">
                                <!-- Icon -->
                                <span class="input-group-text" id="github_url">
                                    <i class="fab fa-github-square"></i>
                                </span>
                                <!-- Input -->
                                <input class="form-control" type="text" aria-label="github_url"
                                    aria-describedby="github_url" name="github_url"
                                    value="{{Auth::user()->github_url}}">
                            </div>

                        </div>
                        <!-- ./model-body -->

                        <!-- model footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                        <!-- ./model-footer -->

                    </form>
                    <!-- ./form -->

                </div>
                    <!-- ./model-content -->
            </div>
            <!-- ./model-dialog -->
        </div>
        @endauth

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- Other scripts --}}
        @yield('scripts')

    </body>
</html>
