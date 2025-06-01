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
                                <li><a href="#" class="active">Message</a></li>
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

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Message</strong>
                        </div>
                        <div class="card-body">
                            <div class="col-sm-12">
                                <table id="table_contact" class="table table-striped table-bordered dataTable no-footer"
                                    role="grid" aria-describedby="bootstrap-data-table_info">
                                    <thead>
                                        <tr role="row">
                                            <th>No
                                            </th>
                                            <th>Name
                                            </th>
                                            <th>Subject
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>Message
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                                rowspan="1" colspan="1" style="width: 139px;"
                                                aria-label="Aksi: activate to sort column ascending">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $ms)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ms->name }}</td>
                                                <td>{{ $ms->subject }}</td>
                                                <td>{{ $ms->email }}</td>
                                                <td>
                                                    <textarea name="" id="" class="form-control" cols="10" rows="1" disabled>{{ $ms->message }}</textarea>
                                                </td>
                                                <td>
                                                    <div class="row p-2">
                                                        <a href="{{ route('showMessage', $ms->id) }}"
                                                            class="btn btn-outline-primary mr-2 btn-sm"><i
                                                                class="bx bxs-show"></i></a>
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
            $('#table_contact').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excelHtml5',
                    text: 'Export Excel',
                    title: 'laporan_message',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: [0, 1, 2, 3] // hanya export kolom ini
                    }
                }]
            })
        });
    </script>
@endsection
