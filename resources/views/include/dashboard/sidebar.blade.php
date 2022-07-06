<!-- Sidebar -->
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs
    border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">

    <!-- Sidebar header -->
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute
            end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            <span class="ms-1 font-weight-bold">{{App\Models\Setting::first()->name}}</span>
        </a>
    </div>
    <!-- ./sidebar-header -->
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <!-- Links -->
        <ul class="navbar-nav">
            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <!-- Icon -->
                    <div class="icon icon-shape icon-sm border-radius-md text-center
                        me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <!-- users -->
            <li class="nav-item">
                <a class="nav-link " href="{{route("users.index")}}">
                    <!-- Icon -->
                    <div class="icon icon-shape icon-sm border-radius-md text-center
                        me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-layer-group text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">users</span>
                </a>
            </li>

            <!-- Categories -->
            <li class="nav-item">
                <a class="nav-link " href="{{route("categories.index")}}">
                    <!-- Icon -->
                    <div class="icon icon-shape icon-sm border-radius-md text-center
                        me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-layer-group text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Categories</span>
                </a>
            </li>

            <!-- Articles -->
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <!-- Icon -->
                    <div class="icon icon-shape icon-sm border-radius-md text-center
                        me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-file text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Articles</span>
                </a>
            </li>

            <!-- Tags -->
            <li class="nav-item">
                <a class="nav-link " href="{{route("tags.index")}}">
                    <!-- Icon -->
                    <div class="icon icon-shape icon-sm border-radius-md text-center
                        me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-tags text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tags</span>
                </a>
            </li>

            <!-- Settings -->
            <li class="nav-item">
                <a class="nav-link" href="{{route("settings.edit", ["id" => App\Models\Setting::first()->id])}}"
                    data-bs-toggle="modal" data-bs-target="#setting-{{App\Models\Setting::first()->id}}">
                    <!-- Icon -->
                    <div class="icon icon-shape icon-sm border-radius-md text-center
                        me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-cogs text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Setting</span>
                </a>
            </li>

            <!-- Profile -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs
                    font-weight-bolder opacity-6">
                    Profile
                </h6>
            </li>
            <!-- Logout -->
            <li class="nav-item">
                <a class="nav-link " href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">


                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-arrow-right-from-bracket text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <!-- Sidebar Footer -->
    {{-- <div class="sidenav-footer">
        <ul class="navbar-nav">

            <!-- Profile -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs
                    font-weight-bolder opacity-6">
                    Profile
                </h6>
            </li>
            <!-- Logout -->
            <li class="nav-item">
                <a class="nav-link " href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">


                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-arrow-right-from-bracket text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div> --}}
    <!-- ./sidebar-footer -->
</aside>
<!-- ./sidebar -->
