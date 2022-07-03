@extends('layouts.app')

{{-- Title --}}
@section('page_name') Homepage @endsection

{{-- Header Info --}}
@section('header-info')
    <h1>{{App\Models\Setting::first()->name}}</h1>
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
@endsection

{{-- Content --}}
@section('content')
<!-- Homepage -->
<section class="homepage section">
    <!-- Container -->
    <div class="container">
        <!-- Some Tags -->
        <div class="some-tags">
            <ul class="list-unstyled">
                <li>
                    <a href="#">#tag</a>
                </li>
                <li>
                    <a href="#">#tag</a>
                </li>
                <li>
                    <a href="#">#tag</a>
                </li>
                <li>
                    <a href="#">#tag</a>
                </li>
                <li>
                    <a href="#">#tag</a>
                </li>
                <li>
                    <a href="#">#tag</a>
                </li>
            </ul>
        </div>
        <!-- ./some-tags -->

        <!-- Articles Content -->
        <div class="articles-content">
            <div class="row">
                <div class="col-12 col-md-4">
                    <!-- card -->
                    <div class="card card-article">
                        <!-- Card Header -->
                        <div class="card-header"></div>
                        <!-- ./card-header -->

                        <!-- Card body -->
                        <div class="card-body">
                            <!-- Tags -->
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">#tag</a>
                                </li>
                                <li>
                                    <a href="#">#tag</a>
                                </li>
                                <li>
                                    <a href="#">#tag</a>
                                </li>
                                <li>
                                    <a href="#">#tag</a>
                                </li>
                            </ul>
                            <!-- ./tags -->
                            <h2>Article Title</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, atque.</p>
                        </div>
                        <!-- ./card-body -->
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <!-- Image -->
                            <div class="image">
                                <img class="img-fluid" src="{{asset("uploads/default.png")}}" alt="User avatar">
                            </div>
                            <!-- Card Footer -->
                            <div class="user-info">
                                <a href="#">User name</a>
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
