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
    <div class="container-fluid py-4">
        @if ($categories->count() > 0)
            <div class="row">
                <div class="col-11 mx-auto">
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
                                <tbody>
                                    @php
                                        $id = 1
                                    @endphp
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{$id++}}</td>
                                            <td>
                                                {{$category->name}}
                                            </td>
                                            <td>
                                                <!-- Edit button -->
                                                <a class="btn btn-edit mr-3" href="{{route("categories.edit", ["id" => $category->id])}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <!-- Delete button -->
                                                <form class="d-inline-block" action="{{route('categories.destroy', ['id' => $category->id])}}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-delete" type="submit">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
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
