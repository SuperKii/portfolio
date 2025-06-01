@extends('admin.app.index')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Message</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Message</a></li>
                                <li><a href="#" class="active">Show</a></li>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">

                            <!-- Credit Card -->
                            <div id="pay-invoice">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center">Show Message</h3>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Name</label>
                                        <input id="cc-payment"type="text" class="form-control" value="{{ $data->name }}" disabled>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Subject</label>
                                        <input id="cc-name"type="text" class="form-control" value="{{ $data->subject }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-number" class="control-label mb-1">Email</label>
                                        <input id="cc-number" type="tel" class="form-control" disabled
                                            value="{{ $data->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-number" class="control-label mb-1">Message</label>

                                        <textarea name="" id="" cols="30" rows="10" class="form-control" disabled>{{ $data->message }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
