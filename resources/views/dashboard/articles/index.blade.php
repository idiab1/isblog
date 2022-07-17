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
        @if ($articles->count() > 0)
            <div class="row">
                <div class="col-12 mx-auto">
                    <!-- Card -->
                    <div class="card animate__animated animate__backInUp animate__delay-1s">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Table -->
                            <table class="table text-center" id="example1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Active</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php
                                        $id = 1
                                    @endphp --}}
                                    @foreach ($articles as $index => $article)
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            <td>{{$article->name}}</td>
                                            <td>
                                                <!-- show button -->
                                                <a class="btn btn-show me-3 btn-sm" href="{{route("articles.show", ["id" => $article->id])}}" data-bs-toggle="modal"
                                                    data-bs-target="#articleShow{{$article->id}}">
                                                    <i class="fas fa-list"></i>
                                                </a>

                                                <!-- Edit button -->
                                                <a class="btn btn-edit me-3 btn-sm" href="{{route("articles.edit", ["id" => $article->id])}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <!-- Delete button -->
                                                <form class="d-inline-block" action="{{route('articles.destroy', ['id' => $article->id])}}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-delete btn-sm" type="submit">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

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
                                                                        <a href="#">{{"#".$tag->name}}</a>
                                                                    </li>
                                                                @endforeach
                                                            @endif
                                                        </ul>

                                                    </div>
                                                    <!-- ./model-body -->
                                                    <!-- model footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Send</button>
                                                    </div>
                                                    <!-- ./model-footer -->

                                                </div>
                                                    <!-- ./model-content -->
                                            </div>
                                            <!-- ./model-dialog -->
                                        </div>

                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Active</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- ./table -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
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
