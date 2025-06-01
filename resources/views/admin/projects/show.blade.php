@extends('admin.app.index')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Show</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Show</a></li>
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
                                        <h3 class="text-center">Show Projects</h3>
                                    </div>
                                    <hr>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Title</label>
                                        <input id="cc-name" name="" type="text"
                                            class="form-control cc-name valid" value="{{ $dataProjects->title }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-number" class="control-label mb-1">Description</label>
                                        <textarea id="cc-number" name="" type="tel" class="form-control" disabled>{{ $$dataProjects->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Image</label>
                                        <div>
                                            <img src="{{ asset('storage/' . $dataProject->image) }}" alt=""
                                                width="250">
                                        </div>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Link Github</label>
                                        <input id="cc-name" name="" type="text"
                                            class="form-control cc-name valid" value="{{ $dataProjects->link_github }}" disabled>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Link Web</label>
                                        <input id="cc-name" name="" type="text"
                                            class="form-control cc-name valid" value="{{ $dataProjects->link_web }}" disabled>
                                    </div>

                                    <a href="{{ route('projectsIndex') }}" class="btn btn-outline-secondary">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
