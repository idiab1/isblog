@extends('layouts.dashboard.app')

{{-- Page Name --}}
@section('page_name')
    Articles
@endsection

{{-- Styles --}}
@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset("libs/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("libs/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("libs/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">

@endsection

{{-- Content --}}
@section('content')
<!-- Articles Page -->
<section class="articles-page section">
    <!-- Container Fluid -->
    <div class="container py-4">
        <!-- Form Section -->
        <div class="form-section">
            <div class="row">
                <div class="col-8 m-auto">
                    <!-- Card -->
                    <div class="card animate__animated animate__backInUp animate__delay-1s">
                        <!-- Card Header -->
                        <div class="card-header">
                            <h4 class="card-title m-0">{{$article->name . "'s"}}</h4>
                        </div>
                        <!-- ./card-header -->

                        <!-- Form -->
                        <form action="{{route("dashboard.articles.update", ["id" => $article->id])}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- image -->
                                <div class="form-group">
                                    <label class="form-label" for="image">Image</label>
                                    <input class="form-control" type="file" name="image" id="image"
                                        value="{{$article->image}}">
                                </div>

                                <!-- Name -->
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" type="text" name="name" id="name"
                                        value="{{$article->name}}">
                                </div>

                                <!-- full text -->
                                <div class="form-group">
                                    <label class="form-label" for="full_text">Full Text</label>
                                    <textarea class="form-control" name="full_text" id="full_text" required>
                                        {{$article->full_text}}
                                    </textarea>
                                </div>

                                <!-- Category -->
                                <div class="form-group">
                                    <label class="form-label" for="category">{{__('Category')}}</label>
                                    <select class="form-control select2bs4 select2" name="category_id" id="category" required>
                                        <option>{{__('All of categories')}}</option>
                                        @foreach (App\Models\Category::all() as $category)
                                            <option value="{{$category->id}}"
                                                {{$category->id == $article->category_id ? "selected" : ""}} >
                                                {{$category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- tags -->
                                <div class="form-group m-0">
                                    <label class="form-label" for="tags">{{__('Tags')}}</label>
                                    <select class="form-control select2bs4 select2 searchable" name="tags[]" id="tags" multiple required>
                                        @foreach (App\Models\Tag::all() as $tag)
                                            <option value="{{$tag->id}}"
                                                @foreach ($article->tags as $tag_id)
                                                    {{$tag->id == $tag_id->id ? "selected" : ""}}
                                                @endforeach
                                                >
                                                {{$tag->name}}
                                            </option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <!-- ./card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                            <!-- ./card-footer -->
                        </form>
                        <!-- ./form -->

                    </div>
                    <!-- ./card -->

                </div>
            </div>
        </div>
        <!-- ./form-section -->
    </div>
    <!-- /.container-fluid -->
    <!-- ./container-fluid -->
</section>
<!-- ./articles-page -->
@endsection

{{-- Scripts --}}
@section('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{asset("libs/jquery/js/jquery-3.5.1.js")}}"></script>
    <script src="{{asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset("libs/select2/js/select2.min.js")}}"></script>
    <script src="{{asset("libs/datatables/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("libs/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("libs/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("libs/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
                "ordering": true,
                "info": true,
                // "lengthChange": false,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            });

        });
    </script>

    <script>

        $(function () {
            // $(".select2").select2();
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endsection
