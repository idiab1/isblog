<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <!-- Container Fluid -->
    <div class="container py-1">
        <!-- End of Navbar -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                    href="{{route("admin.home")}}">{{App\Models\Setting::first()->name}}</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">@yield('page_name', "Unknown page")</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">@yield('page_name', "Unknown page")</h6>
        </nav>
        <!-- End of Navbar -->

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <!-- Search input -->
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <!-- Icon -->
                    <span class="input-group-text text-body">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>


        <ul class="navbar-nav justify-content-end">
            <!-- Profile -->
            <li class="nav-item dropdown d-flex align-items-center">
                <!-- Profile Link -->
                <a href="#" class="nav-link text-white font-weight-bold px-0 dropdown-toggle"
                    id="profileDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- Icon -->
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none">{{Auth::user()->name}}</span>
                </a>
                <!-- Profile Menu -->
                <ul class="dropdown-menu mt-3" aria-labelledby="profileDropdown">
                    <li>
                        <div class="profile py-2">
                            <!-- Image -->
                            <div class="image mb-2">
                                <img class="img-fluid" src="{{asset("uploads/users/" . Auth::user()->image)}}" alt="User Image"
                                    width="30px">
                            </div>
                            <!-- Info -->
                            <div class="info">
                                <span>{{Auth::user()->name}}</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
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

            <!-- Add Button -->
            <li class="nav-item dropdown d-flex align-items-center ps-3">
                <!-- Profile Link -->
                <a href="#" class="nav-link btn btn-add-plus text-white dropdown-toggle"
                    id="plusDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- Icon -->
                    <i class="fas fa-plus me-sm-1"></i>
                    {{-- <span class="d-sm-inline d-none">{{Auth::user()->name}}</span> --}}
                </a>
                <!-- Menu -->
                <ul class="dropdown-menu mt-3" aria-labelledby="plusDropdown">
                    <li>
                        <a class="dropdown-item" href="{{route("users.create")}}" data-bs-toggle="modal"
                            data-bs-target="#userCreate">
                        {{ __('Users') }}
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route("categories.create")}}" data-bs-toggle="modal"
                            data-bs-target="#categoryCreate">
                        {{ __('Categories') }}
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route("articles.create")}}" data-bs-toggle="modal"
                            data-bs-target="#articleCreate">
                        {{ __('Articles') }}
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{route("tags.create")}}" data-bs-toggle="modal"
                            data-bs-target="#tagsCreate">
                        {{ __('Tags') }}
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Burger Icon -->
            <li class="nav-item d-xl-none p-3 pe-0 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                </a>
            </li>

          <!-- Notification Icon -->
          {{-- <li class="nav-item dropdown pe-2 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-bell cursor-pointer"></i>
            </a>
            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
              <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="javascript:;">
                  <div class="d-flex py-1">
                    <div class="my-auto">
                      <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="text-sm font-weight-normal mb-1">
                        <span class="font-weight-bold">New message</span> from Laur
                      </h6>
                      <p class="text-xs text-secondary mb-0">
                        <i class="fa fa-clock me-1"></i>
                        13 minutes ago
                      </p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="javascript:;">
                  <div class="d-flex py-1">
                    <div class="my-auto">
                      <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="text-sm font-weight-normal mb-1">
                        <span class="font-weight-bold">New album</span> by Travis Scott
                      </h6>
                      <p class="text-xs text-secondary mb-0">
                        <i class="fa fa-clock me-1"></i>
                        1 day
                      </p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item border-radius-md" href="javascript:;">
                  <div class="d-flex py-1">
                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                      <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>credit-card</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(453.000000, 454.000000)">
                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="text-sm font-weight-normal mb-1">
                        Payment successfully completed
                      </h6>
                      <p class="text-xs text-secondary mb-0">
                        <i class="fa fa-clock me-1"></i>
                        2 days
                      </p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </li> --}}
        </ul>
      </div>
    </div>
    <!-- ./container-fluid -->
</nav>


<!-- End of Navbar -->
