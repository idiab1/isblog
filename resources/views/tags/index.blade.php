@extends('layouts.app')

{{-- Title --}}
@section('page_name') Tags @endsection

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
        Tags
    </h1>
@endsection

{{-- Content --}}
@section('content')
<!-- tagspage -->
<section class="tagspage section">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Tags Content -->
                <div class="tags-content">
                    @if ($tags->count() > 0)
                        @foreach ($tags as $tag)
                            <a class="btn btn-sm crayons-btn animate__animated animate__backInUp animate__delay-1s"
                            href="{{route("front.tags.show", ["id" => $tag->id])}}">
                                {{$tag->name}}
                            </a>
                        @endforeach
                    @endif
                </div>
                <!-- ./tags-content -->
            </div>
        </div>

    </div>
    <!-- ./container -->
</section>
<!-- ./tagspage -->
@endsection
