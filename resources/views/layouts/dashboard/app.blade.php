<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("dashboard/img/apple-icon.png")}}">
    <link rel="icon" type="image/png" href="{{asset("dashboard/img/favicon.png")}}">
    <title> Dashboard - @yield('page_name', "Unknown page") </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
    <!-- Nucleo Icons -->
    <link rel="stylesheet"  href="{{asset("dashboard/css/nucleo-icons.css")}}"/>
    <link rel="stylesheet"  href="{{asset("dashboard/css/nucleo-svg.css")}}" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset("dashboard/css/nucleo-svg.css")}}" />
    <link rel="stylesheet" href="{{asset("libs/fontawesome-free/css/all.min.css")}}">

    <!-- CSS Files -->
    <link rel="stylesheet" id="pagestyle" href="{{asset("dashboard/css/argon-dashboard.css?v=2.0.4")}}" />

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset("libs/select2/css/select2.min.css")}}" />

    <!-- Animate library -->
    <link rel="stylesheet" href="{{asset("libs/animate/css/animate.min.css")}}"/>

    <!-- CSS custom -->
    <link rel="stylesheet" href="{{asset("dashboard/css/custom.css")}}" />

    {{-- Other Styles --}}
    @yield('styles')
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>

        {{--Sidebar --}}
        @include('include.dashboard.sidebar')

    <main class="main-content position-relative border-radius-lg ">

        {{-- Navbar --}}
        @include('include.dashboard.navbar')

        <div class="content">
            @yield('content')
        </div>

        {{-- Footer --}}
        @include('include.dashboard.footer')

        @include('sweetalert::alert')
    </main>

    <!-- Setting Modal -->
    <div class="modal fade" id="setting-{{$settings->id}}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <!-- model dialog -->
        <div class="modal-dialog">
            <!-- model dialog -->
            <div class="modal-content">
                <!-- model header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Settings</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- ./model-header -->

                <!-- form -->
                <form action="{{route("dashboard.settings.update", ["id" => $settings->id])}}"
                    method="POST">

                    <!-- model body -->
                    <div class="modal-body">
                        @csrf
                        @method("PUT")
                        <!-- Name -->
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" name="name" id="name"
                                value="{{$settings->name}}">
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
                                value="{{$settings->linkedin_url}}">
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
                                value="{{$settings->github_url}}">
                        </div>

                    </div>
                    <!-- ./model-body -->

                    <!-- model footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Close</button>
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

    <!-- Create Tags Modal -->
    <div class="modal fade" id="tagsCreate" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <!-- model dialog -->
        <div class="modal-dialog">
            <!-- model dialog -->
            <div class="modal-content">
                <!-- model header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create Tags</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- ./model-header -->

                <!-- form -->
                <form action="{{route("dashboard.tags.store")}}" method="POST">

                    <!-- model body -->
                    <div class="modal-body">
                        @csrf
                        @method("POST")
                        <!-- Name -->
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" name="name" id="name">
                        </div>

                    </div>
                    <!-- ./model-body -->

                    <!-- model footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Close</button>
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

    <!-- Create admin Modal -->
    <div class="modal fade" id="userCreate" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <!-- model dialog -->
        <div class="modal-dialog">
            <!-- model dialog -->
            <div class="modal-content">
                <!-- model header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add New Admin</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- ./model-header -->

                <!-- form -->
                <form action="{{route("dashboard.users.store")}}" method="POST">

                    <!-- model body -->
                    <div class="modal-body">
                        @csrf
                        @method("POST")
                        <!-- Name -->
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" name="name" id="name" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label class="form-label" for="name">Email</label>
                            <input class="form-control" type="text" name="email" id="email" required>
                        </div>

                        <!-- password -->
                        <div class="form-group">
                            <label class="form-label" for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password"
                                required>
                        </div>

                        <!-- confirm password -->
                        <div class="form-group">
                            <label class="form-label" for="password_confirm">Confirm Password</label>
                            <input class="form-control" type="password" name="password_confirmation"
                                id="password_confirm" required>
                        </div>

                    </div>
                    <!-- ./model-body -->

                    <!-- model footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Close</button>
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

    <!-- Create articles Modal -->
    <div class="modal fade" id="articleCreate" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <!-- model dialog -->
        <div class="modal-dialog">
            <!-- model dialog -->
            <div class="modal-content">
                <!-- model header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create a new article</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- ./model-header -->

                <!-- form -->
                <form action="{{route("dashboard.articles.store")}}" method="POST" enctype="multipart/form-data">

                    <!-- model body -->
                    <div class="modal-body">
                        @csrf
                        @method("POST")
                        <input class="form-control" type="text" name="user_id"  hidden>

                        <!-- image -->
                        <div class="form-group">
                            <label class="form-label" for="image">Image</label>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>

                        <!-- Name -->
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" name="name" id="name" required>
                        </div>

                        <!-- full text -->
                        <div class="form-group">
                            <label class="form-label" for="full_text">Full Text</label>
                            <textarea class="form-control" name="full_text" id="full_text" required></textarea>
                        </div>

                        <!-- Category -->
                        <div class="form-group">
                            <label class="form-label" for="category">{{__('Category')}}</label>
                            <select class="form-control select2" name="category_id" id="category" required>
                                @foreach (App\Models\Category::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- tags -->
                        <div class="form-group">
                            <label class="form-label" for="tags">{{__('Tags')}}</label>
                            <select class="form-control select2 searchable" name="tags[]" id="tags" multiple required>
                                @foreach (App\Models\Tag::all() as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <!-- ./model-body -->

                    <!-- model footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Close</button>
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

    <!-- Create category Modal -->
    <div class="modal fade" id="categoryCreate" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <!-- model dialog -->
        <div class="modal-dialog">
            <!-- model dialog -->
            <div class="modal-content">
                <!-- model header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create category</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- ./model-header -->

                <!-- form -->
                <form action="{{route("dashboard.categories.store")}}" method="POST">

                    <!-- model body -->
                    <div class="modal-body">
                        @csrf
                        @method("POST")
                        <!-- Name -->
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" name="name" id="name">
                        </div>

                    </div>
                    <!-- ./model-body -->

                    <!-- model footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Close</button>
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
                        <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Close</button>
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

    <!--   Core JS Files   -->
    <script src="{{asset("libs/jquery/js/jquery-3.5.1.js")}}"></script>
    <script src="{{asset("libs/select2/js/select2.min.js")}}"></script>
    <script src="{{asset("dashboard/js/core/popper.min.js")}}"></script>
    <script src="{{asset("dashboard/js/core/bootstrap.min.js")}}"></script>
    <script src="{{asset("dashboard/js/plugins/perfect-scrollbar.min.js")}}"></script>
    <script src="{{asset("dashboard/js/plugins/smooth-scrollbar.min.js")}}"></script>
    <script src="{{asset("dashboard/js/plugins/chartjs.min.js")}}"></script>
    {{-- <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#5e72e4",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                padding: 10,
                color: '#fbfbfb',
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            x: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                color: '#ccc',
                padding: 20,
                font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script> --}}
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset("dashboard/js/argon-dashboard.min.js?v=2.0.4")}}"></script>

    <script>

        $('.select2').select2();

    </script>

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
