@extends('layouts.app')

{{-- Title --}}
@section('page_name') Articles @endsection

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
    </style>
@endsection

{{-- Header Info --}}
@section('header-info')
    <h1>Articles</h1>
@endsection

{{-- Content --}}
@section('content')
<!-- articles -->
<section class="articles-page section">
    <!-- Container -->
    <div class="container">
        <!-- Articles Content -->
        <div class="articles-content">
            @if ($articles->count() > 0)
                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-12 col-md-4 mb-4">
                            <!-- card -->
                            <div class="card card-article">
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
                                            @foreach ($article->tags as $tag)
                                                <li>
                                                    <a href="{{route("front.tags.show", ["id" => $tag->id])}}">
                                                        {{"#".$tag->name}}
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    <!-- ./tags -->
                                    <h2>{{$article->name}}</h2>
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
                                        <img class="img-fluid" src="{{asset("uploads/default.png")}}"
                                            alt="User avatar" width="30px">
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="user-info">
                                        <a href="#">User name</a>
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
                                            <ul class="list-unstyled m-0">
                                                {{-- {{$article->tags}} --}}
                                                @if ($article->tags()->count() > 0)
                                                    @foreach ($article->tags as $tag)
                                                        <li>
                                                            <a href="{{route("front.tags.show", ["id" => $tag->id])}}">
                                                                {{"#".$tag->name}}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>

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
                            <a class="btn crayons-btn btn-sm" href="{{route("front.articles.index")}}">
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
        <!-- ./articles-content -->
    </div>
    <!-- ./container -->
</section>
<!-- ./articles -->
@endsection
