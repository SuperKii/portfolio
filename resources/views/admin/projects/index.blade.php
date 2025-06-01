@extends('admin.app.index')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Admin</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#" class="active">Projects</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <div class="row">

                <a href="{{ route('projectsCreate') }}" class="btn btn-outline-primary m-4">New Projects</a>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Projects</strong>
                        </div>
                        <div class="card-body">
                            <div class="col-sm-12">
                                <table id="table_user" class="table table-striped table-bordered dataTable no-footer"
                                    role="grid" aria-describedby="bootstrap-data-table_info">
                                    <thead>
                                        <tr role="row">
                                            <th>No
                                            </th>
                                            <th>Title
                                            </th>
                                            <th>Description
                                            </th>
                                            <th>Image
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                rowspan="1" colspan="1" style="width: 139px;"
                                                aria-label="Aksi: activate to sort column ascending">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $dp)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $dp->title }}</td>
                                                <td>
                                                    <textarea name="" id="" class="form-control" cols="30" rows="1" disabled>{{ $dp->description }}</textarea>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $dp->image) }}" width="150"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <div class="row p-2">
                                                        <a href="{{ route('projectsEdit', $dp->id) }}"
                                                            class="btn btn-outline-warning btn-sm mr-2"><i
                                                                class="bx bx-edit"></i></a>
                                                        <a href="{{ route('projectsShow', $dp->id) }}"
                                                            class="btn btn-outline-primary mr-2 btn-sm"><i
                                                                class="bx bxs-show"></i></a>
                                                        <a href="{{ route('projectsDelete', $dp->id) }}"
                                                            class="btn btn-outline-danger btn-sm"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ?')"><i
                                                                class="bx bx-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#table_user').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excelHtml5',
                    text: 'Export Excel',
                    title: 'laporan_user',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: [0, 1, 2, 3] // hanya export kolom ini
                    }
                }]
            })
        });
    </script>
@endsection
