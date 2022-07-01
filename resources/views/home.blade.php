@extends('layouts.app')

{{-- Content --}}
@section('content')
<!-- Homepage -->
<section class="homepage section">
    <!-- Container -->
    <div class="container">
        <!-- Header -->
        <header class="header">
            <div class="row">
                <div class="col-6 mx-auto">
                    <!-- Header Info -->
                    <div class="header-info">
                        <!-- User Image -->
                        <div class="user-image">
                            <img class="img-fluid" src="" alt="">
                        </div>
                        <!-- User Info -->
                        <div class="user-info">
                            <h1>User name</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Iusto ex enim voluptas, cupiditate animi corporis!</p>
                            <!-- Social Links -->
                            <ul class="list-unstyled">
                                <li>
                                    <!-- Facebook -->
                                    <a class="" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <!-- Github -->
                                    <a class="" href="#">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <!-- Linkin -->
                                    <a class="" href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <!-- twitter -->
                                    <a class="" href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- ./header-info -->
                </div>
            </div>
        </header>
        <!-- ./header -->

        <!-- Articles Content -->
        <div class="articles-content">
            <div class="row">
                <div class="col-md-4">
                    <!-- card -->
                    <div class="card card-article">
                        <!-- Card Header -->
                        <div class="card-header"></div>
                        <!-- ./card-header -->

                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Tags -->
                            <ul class="list-unstyled">
                                <li>Tag</li>
                                <li>Tag</li>
                                <li>Tag</li>
                                <li>Tag</li>
                            </ul>
                            <!-- ./tags -->
                            <h2>Article Title</h2>

                        </div>
                        <!-- ./card-body -->
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <!-- Image -->
                            <div class="image">
                                <img src="{{asset("uploads/default.png")}}" alt="User avatar" width="30px">
                            </div>
                            <!-- Card Footer -->
                            <div class="user-info">
                                <h3>User name</h3>
                            </div>
                        </div>
                        <!-- ./card-footer -->
                    </div>
                    <!-- ./card -->
                </div>
            </div>
        </div>
        <!-- ./articles-content -->
    </div>
    <!-- ./container -->
</section>
<!-- ./homepage -->
@endsection
