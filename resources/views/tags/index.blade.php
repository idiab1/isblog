@extends('layouts.app')

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
    <h1>Tags</h1>
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
                            <a href="#" class="btn btn-secondary">{{$tag->name}}</a>
                        @endforeach
                    @endif
                    {{-- <a href="#" class="btn btn-secondary">tag</a>
                    <a href="#" class="btn btn-secondary">tag</a>
                    <a href="#" class="btn btn-secondary">tagtag</a>
                    <a href="#" class="btn btn-secondary">tag</a>
                    <a href="#" class="btn btn-secondary">tagtagtagtag</a>
                    <a href="#" class="btn btn-secondary">tag</a>
                    <a href="#" class="btn btn-secondary">tag</a>
                    <a href="#" class="btn btn-secondary">tagtag</a>
                    <a href="#" class="btn btn-secondary">tag</a>
                    <a href="#" class="btn btn-secondary">tagss</a>
                    <a href="#" class="btn btn-secondary">tag</a>
                    <a href="#" class="btn btn-secondary">tag</a>
                    <a href="#" class="btn btn-secondary">tagtag</a>
                    <a href="#" class="btn btn-secondary">tag</a>
                    <a href="#" class="btn btn-secondary">tagtagtagtag</a>
                    <a href="#" class="btn btn-secondary">tag</a>
                    <a href="#" class="btn btn-secondary">tag</a>
                    <a href="#" class="btn btn-secondary">tagtag</a>
                    <a href="#" class="btn btn-secondary">tag</a> --}}

                </div>
                <!-- ./tags-content -->
            </div>
        </div>


    </div>
    <!-- ./container -->
</section>
<!-- ./tagspage -->
@endsection
