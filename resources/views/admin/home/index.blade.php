@extends('admin.app.index')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Home</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Home</a></li>
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
                                        <h3 class="text-center">Component Home</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('updateHome', $dataHome->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Logo</label>
                                            <input id="cc-payment" name="logo" type="text" class="form-control"
                                                 value="{{ $dataHome->logo }}">
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">Home Name</label>
                                            <input id="cc-name" name="home_name" type="text"
                                                class="form-control cc-name valid" value="{{ $dataHome->home_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Home Description</label>
                                            <input id="cc-number" name="home_description" type="tel"
                                                class="form-control" value="{{ $dataHome->home_description }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Home Image</label>
                                            <div>
                                                <img src="{{ asset('storage/'.$dataHome->home_image) }}" alt=""
                                                    width="250">
                                            </div>
                                            <input id="cc-payment" name="home_image" type="file" class="form-control"
                                                aria-required="true" aria-invalid="false">
                                        </div>
                                        <button type="submit" class="btn btn-outline-warning">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
