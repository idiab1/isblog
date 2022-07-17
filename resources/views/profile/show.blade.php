@extends('layouts.app')

{{-- Title --}}
@section('page_name') {{$user->name . "'s"}} @endsection

{{-- Styles --}}
@section('styles')
    <style>
        .header{
            height: 15vh;
            display: flex;
            align-items: center;
            background-color: #fff;
            border-bottom: none;
        }
        h1{
            font-size: 1.7rem;
            font-weight: bold;
            margin-bottom: 0;
            text-transform: uppercase;
        }
    </style>
@endsection

{{-- Header Info --}}
@section('header-info')
    <h1 class="animate__animated animate__lightSpeedInRight animate__delay-1s">
        {{$user->name . "'s"}}
    </h1>

    <!-- Social Links -->
    <ul class="list-unstyled">
        <li>
            <!-- Github -->
            <a href="{{$user->github_url}}" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </li>
        <li>
            <!-- Linkin -->
            <a href="{{$user->linkedin_url}}" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
        </li>
        <li>
            <!-- facebook -->
            <a href="{{$user->facebook_url}}" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
        </li>
        <li>
            <!-- twitter -->
            <a href="{{$user->twitter_url}}" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
    </ul>

@endsection

{{-- Content --}}
@section('content')
<!-- Tags -->
<section class="tags-page section">
    <!-- Container -->
    <div class="container">

        <!-- tags Content -->
        <div class="articles-content">
            @if ($user->articles->count() > 0)
                <div class="row">
                    @foreach ($user->articles as $article)
                        <div class="col-12 col-md-4 mb-4">
                            <!-- card -->
                            <div class="card card-article animate__animated animate__backInUp animate__delay-1s">
                                @if ($article->image)
                                    <!-- Card Header -->
                                    <div class="card-header p-0">
                                        <img src="{{asset("uploads/articles/" . $article->image)}}"
                                            alt="Image article">
                                    </div>
                                    <!-- ./card-header -->
                                @endif

                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- Tags -->
                                    <ul class="list-unstyled">
                                        @if ($article->tags()->count() > 0)
                                            @foreach ($article->tags as $index => $tag)
                                                <li>
                                                    <a href="{{route("front.tags.show", ["id" => $tag->id])}}">{{"#".$tag->name}}</a>
                                                </li>
                                                @if ($index == 2)
                                                    @php
                                                        break;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        @endif
                                    </ul>
                                    <!-- ./tags -->
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#articleShow{{$article->id}}">
                                        <h2>{{$article->name}}</h2>
                                    </a>
                                    <div class="info">
                                        <p class="m-0">{{$article->full_text}}</p>
                                        @if (strlen($article->full_text)> 13)
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#articleShow{{$article->id}}">
                                                Show More
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <!-- ./card-body -->
                                <!-- Card Footer -->
                                <div class="card-footer d-flex align-items-center">
                                    <!-- Image -->
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset("uploads/users/". $article->user->image)}}"
                                            alt="User avatar" width="30px">
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="user-info">
                                        <a href="#">{{$article->user->name}}</a>
                                    </div>
                                </div>
                                <!-- ./card-footer -->
                            </div>
                            <!-- ./card -->
                            <!-- Show article Modal -->
                            <div class="modal modal-article fade text-left" id="articleShow{{$article->id}}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <!-- model dialog -->
                                <div class="modal-dialog">
                                    <!-- model dialog -->
                                    <div class="modal-content">
                                        <!-- model header -->
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">{{$article->name . "'s"}}</h5>
                                            <button type="button" class="btn-close"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- ./model-header -->

                                        <!-- model body -->
                                        <div class="modal-body">
                                            @if ($article->image)
                                                <!-- Article Image -->
                                                <div class="article-image">
                                                    <img class="img-fluid" src="{{asset("uploads/articles/" . $article->image)}}" alt="Article Image">
                                                </div>
                                            @endif

                                            <!-- Article Description -->
                                            <div class="description">
                                                <p class="m-0">{{$article->full_text}}</p>
                                            </div>
                                            <!-- Tags -->
                                            <div class="tags-content">
                                                @if ($article->tags()->count() > 0)
                                                    @foreach ($article->tags as $tag)
                                                        <a class="btn btn-sm tag-btn" href="{{route("front.tags.show", ["id" => $tag->id])}}">
                                                            {{"#".$tag->name}}
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </div>

                                        </div>
                                        <!-- ./model-body -->
                                        <!-- model footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                        <!-- ./model-footer -->

                                    </div>
                                        <!-- ./model-content -->
                                </div>
                                <!-- ./model-dialog -->
                            </div>
                        </div>
                    @endforeach
                <!-- /.col -->
                </div>
                <!-- /.row -->
            @else
                <div class="row">
                    <div class="col-12 m-auto">
                        <!-- Empty -->
                        <div class="empty">
                            <!-- Image -->
                            <div class="image">
                                <img src="{{asset("images/empty.svg")}}" alt="">
                            </div>
                            <!-- End of Image -->
                            <!-- Info -->
                            <div class="info ">
                                <p>No Record Found</p>
                            </div>
                        </div>
                        <!-- End of Empty -->
                    </div>
                </div>
            @endif


        </div>
        <!-- ./articles-content -->
    </div>
    <!-- ./container -->
</section>
<!-- ./articles -->
@endsection
