@extends('layouts.dashboard.app')

{{-- Page Name --}}
@section('page_name')
    Categories
@endsection

{{-- Styles --}}
@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset("libs/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("libs/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("libs/datatables-buttons/css/buttons.bootstrap4.min.css")}}">

@endsection

{{-- Content --}}
@section('content')
<!-- Categories Page -->
<section class="categories-page section">
    <!-- Container Fluid -->
    <div class="container py-4">
        @if ($categories->count() > 0)
            <div class="row">
                <div class="col-12 mx-auto">
                    <!-- Card -->
                    <div class="card">
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
                                <tbody class="text-center">
                                    @foreach ($categories as $index => $category)
                                        <tr class="animate__animated animate__backInUp animate__delay-1s">
                                            <td>{{$index + 1}}</td>
                                            <td>
                                                {{$category->name}}
                                            </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a class="btn btn-edit me-3 btn-sm" href="{{route("categories.edit", ["id" => $category->id])}}" data-bs-toggle="modal"
                                                    data-bs-target="#categoryUpdate{{$category->id}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <!-- Delete button -->
                                                <form class="d-inline-block" action="{{route('categories.destroy', ['id' => $category->id])}}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-delete btn-sm" type="submit">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Create category Modal -->
                                        <div class="modal fade text-left" id="categoryUpdate{{$category->id}}" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <!-- model dialog -->
                                            <div class="modal-dialog">
                                                <!-- model dialog -->
                                                <div class="modal-content">
                                                    <!-- model header -->
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">{{$category->name . "'s"}}</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close">X</button>
                                                    </div>
                                                    <!-- ./model-header -->

                                                    <!-- form -->
                                                    <form action="{{route("categories.update", ["id" => $category->id])}}" method="POST">

                                                        <!-- model body -->
                                                        <div class="modal-body">
                                                            @csrf
                                                            @method("PUT")
                                                            <!-- Name -->
                                                            <div class="form-group">
                                                                <label class="form-label" for="name">Name</label>
                                                                <input class="form-control" type="text" name="name" id="name"
                                                                    value="{{$category->name}}">
                                                            </div>

                                                        </div>
                                                        <!-- ./model-body -->

                                                        <!-- model footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                        </div>
                                                        <!-- ./model-footer -->
                                                    </form>
                                                    <!-- ./form -->

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
</section>
<!-- ./categories-page -->
@endsection

{{-- Scripts --}}
@section('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{asset("libs/jquery/js/jquery-3.5.1.js")}}"></script>
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
@endsection
