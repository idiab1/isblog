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
        <div class="modal setting-profile fade" id="profile-{{Auth::user()->id}}" data-bs-backdrop="static"
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
                        method="POST" enctype="multipart/form-data">

                        <!-- model body -->
                        <div class="modal-body">
                            @csrf
                            @method("PUT")

                            <!-- image -->
                            <div class="form-group mb-3">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload">
                                            <i class="fas fa-pen"></i>
                                        </label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview" style="background-image: url({{asset('uploads/users/' . Auth::user()->image)}});">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <!-- Name -->
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="name">Name</label>
                                        <input class="form-control" type="text" name="name" id="name"
                                            value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Email -->
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control" type="email" name="email" id="email"
                                            value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <!-- password -->
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input class="form-control" type="password" name="password" id="password"
                                            required>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- confirm password -->
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="password_confirm">Confirm Password</label>
                                        <input class="form-control" type="password" name="password_confirmation"
                                            id="password_confirm" required>
                                    </div>
                                </div>
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
                            <div class="input-group mb-3">
                                <!-- Icon -->
                                <span class="input-group-text" id="github_url">
                                    <i class="fab fa-github-square"></i>
                                </span>
                                <!-- Input -->
                                <input class="form-control" type="text" aria-label="github_url"
                                    aria-describedby="github_url" name="github_url"
                                    value="{{Auth::user()->github_url}}">
                            </div>

                            <!-- facebook -->
                            <div class="input-group mb-3">
                                <!-- Icon -->
                                <span class="input-group-text" id="facebook_url">
                                    <i class="fab fa-facebook-square"></i>
                                </span>
                                <!-- Input -->
                                <input class="form-control" type="text" aria-label="facebook_url"
                                    aria-describedby="facebook_url" name="facebook_url"
                                    value="{{Auth::user()->facebook_url}}">
                            </div>

                            <!-- twitter -->
                            <div class="input-group">
                                <!-- Icon -->
                                <span class="input-group-text" id="twitter_url">
                                    <i class="fab fa-twitter-square"></i>
                                </span>
                                <!-- Input -->
                                <input class="form-control" type="text" aria-label="twitter_url"
                                    aria-describedby="twitter_url" name="twitter_url"
                                    value="{{Auth::user()->twitter_url}}">
                            </div>

                        </div>
                        <!-- ./model-body -->

                        <!-- model footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn crayons-btn">Send</button>
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
        <script src="{{asset("libs/jquery/js/jquery-3.5.1.js")}}"></script>
        <script>
            $(document).ready(function(){
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                            $('#imagePreview').hide();
                            $('#imagePreview').fadeIn(650);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#imageUpload").change(function() {
                    readURL(this);
                });
            });
        </script>
        {{-- Other scripts --}}
        @yield('scripts')

    </body>
</html>
