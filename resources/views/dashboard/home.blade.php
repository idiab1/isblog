@extends('layouts.dashboard.app')

{{-- Page Name --}}
@section('page_name')
    Dashboard
@endsection

@section('content')
<!-- Homepage -->
<section class="homepage section">
    <!-- Container -->
    <div class="container py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card animate__animated animate__backInLeft animate__delay-1s">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                        Tags
                                    </p>
                                    <h5 class="font-weight-bolder">{{$tagsCount}}</h5>
                                    <a class="text-primary text-sm font-weight-bolder"
                                        href="{{route("tags.index")}}">Show More</a>
                                </div>
                            </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow-primary
                                text-center rounded-circle">
                                <i class="fas fa-tags text-lg opacity-10"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <!-- Card -->
                <div class="card animate__animated animate__backInRight animate__delay-1s">
                    <!-- card body -->
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <!-- Numbers -->
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                        Users
                                    </p>
                                    <h5 class="font-weight-bolder">
                                        {{$usersCount}}
                                    </h5>
                                    <a class="text-danger text-sm font-weight-bolder"
                                        href="{{route("users.index")}}">Show More</a>
                                </div>
                                <!-- ./Numbers -->
                            </div>
                            <div class="col-4 text-end">
                                <!-- Icon -->
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <!-- ./icon -->
                            </div>
                        </div>
                    </div>
                    <!-- ./card-body -->
                </div>
                <!-- ./card -->
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <!-- Card -->
                <div class="card animate__animated animate__backInLeft animate__delay-1s">
                    <!-- Card body -->
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <!-- Numbers -->
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Articles</p>
                                    <h5 class="font-weight-bolder">
                                        {{$articlesCount}}
                                    </h5>
                                    <a class="text-success text-sm font-weight-bolder"
                                        href="{{route("articles.index")}}">Show More</a>
                                </div>
                                <!-- ./numbers -->
                            </div>
                            <div class="col-4 text-end">
                                <!-- Icon -->
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="fas fa-newspaper text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <!-- ./icon -->
                            </div>
                        </div>
                    </div>
                    <!-- ./card-body -->
                </div>
                <!-- ./card -->
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card animate__animated animate__backInRight animate__delay-1s">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <!-- Numbers -->
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Administrators</p>
                                    <h5 class="font-weight-bolder">
                                        {{$adminsCount}}
                                    </h5>
                                    <a class="text-warning text-sm font-weight-bolder"
                                        href="{{route("users.index")}}">Show More</a>
                                </div>
                                <!-- ./numbers -->
                            </div>
                            <div class="col-4 text-end">
                                <!-- Icon -->
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="fas fa-users-gear text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <!-- ./icon -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-8 mb-lg-0 mb-4">
                @if ($articles->count() > 0)
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-12 col-md-6 mb-4">
                                <!-- card -->
                                <div class="card card-article animate__animated animate__backInDown animate__delay-1s">
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
                                                        <a href="{{route("tags.show", ["id" => $tag->id])}}">
                                                            {{"#".$tag->name}}
                                                        </a>
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
                                                            <a class="btn btn-sm tag-btn" href="{{route("tags.show", ["id" => $tag->id])}}">
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
                    @if ($articles->count() <= 6)
                        <div class="row">
                            <div class="col-12 text-center">
                                <a class="btn btn-primary btn-sm" href="{{route("articles.index")}}">
                                    All Articles
                                </a>
                            </div>
                        </div>
                    @endif
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

            <div class="col-lg-4">
                <!-- Card -->
                <div class="card mb-4 animate__animated animate__backInUp animate__delay-1s">
                    <!-- Card Header -->
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Categories</h6>
                    </div>
                    <!-- ./card-header -->
                    <!-- Card Body -->
                    <div class="card-body pb-0 p-3">
                        <ul class="list-group">

                            @foreach ($categories as $category)
                                <li class="list-group-item border-0 d-flex justify-content-between
                                    ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark
                                            shadow text-center">
                                            <i class="fas fa-circle-dot text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-1 text-dark text-sm">
                                                {{$category->name}}
                                            </h6>
                                        </div>
                                    </div>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                    <!-- ./card-body -->
                    <!-- Card Footer -->
                    <div class="card-footer p-1 text-center animate__animated animate__bounceIn animate__delay-2s">
                        <a class="text-secondary text-sm font-weight-bolder"
                            href="{{route("categories.index")}}">All Categories</a>
                    </div>
                    <!-- ./card-footer -->
                </div>
                <!-- ./card -->
                <!-- Card -->
                <div class="card animate__animated animate__backInUp animate__delay-1s">
                    <!-- Card Header -->
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Tags</h6>
                    </div>
                    <!-- ./card-header -->
                    <!-- Card Body -->
                    <div class="card-body pb-0 p-3">
                        <ul class="list-group">

                            @foreach ($tags as $tag)
                                <li class="list-group-item border-0 d-flex justify-content-between
                                    ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="icon icon-shape icon-sm me-3 bg-gradient-dark
                                            shadow text-center">
                                            <i class="fas fa-hashtag text-white opacity-10"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="{{route("tags.show", ["id" => $tag->id])}}">
                                                <h6 class="mb-1 text-dark text-sm">{{$tag->name}}</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a class="btn btn-link btn-icon-only btn-rounded btn-sm
                                            text-dark icon-move-right my-auto"
                                            href="{{route("tags.show", ["id" => $tag->id])}}">
                                            {{-- <i class="ni ni-bold-right" aria-hidden="true"></i> --}}
                                            <span class="text-xs">
                                                <span class="font-weight-bold badge bg-primary">
                                                    {{$tag->articles()->count()}}
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                    <!-- ./card-body -->
                    <!-- Card Footer -->
                    <div class="card-footer p-1 text-center animate__animated animate__bounceIn animate__delay-2s">
                        <a class="text-secondary text-sm font-weight-bolder"
                            href="{{route("tags.index")}}">All Tags</a>
                    </div>
                    <!-- ./card-footer -->
                </div>
                <!-- ./card -->
            </div>
        </div>


    </div>
    <!-- ./container -->
</section>
<!-- ./homepage -->
@endsection

