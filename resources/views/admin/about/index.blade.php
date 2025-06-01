@extends('admin.app.index')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>About</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">About</a></li>
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
                                        <h3 class="text-center">Component About</h3>
                                    </div>
                                    <hr>
                                    <form action="{{ route('updateAbout' , $dataAbout->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">About Skill</label>
                                            <input id="cc-name" name="about_skill" type="text"
                                                class="form-control cc-name valid" value="{{ $dataAbout->about_skill }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">About Description</label>
                                            <input id="cc-number" name="about_description" type="tel"
                                                class="form-control" value="{{ $dataAbout->about_description }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">About Image</label>
                                            <div>
                                                <img src="{{ asset('storage/' . $dataAbout->about_image) }}" alt=""
                                                    width="250">
                                            </div>
                                            <input id="cc-payment" name="about_image" type="file" class="form-control"
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
