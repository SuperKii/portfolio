@extends('admin.app.index')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Create</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Create</a></li>
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
                                    <form action="{{ route('projectsStore') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">Title</label>
                                            <input id="cc-name" name="title" type="text"
                                                class="form-control cc-name valid" "
                                                >
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Description</label>
                                            <textarea id="cc-number" name="description" type="tel" class="form-control" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Image</label>
                                            <div>
                                                <input id="cc-name" name="image" type="file"
                                                class="form-control cc-name valid"
                                                >
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">Link Github</label>
                                            <input id="cc-name" name="link_github" type="text"
                                                class="form-control cc-name valid" value=""
                                                >
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">Link Web</label>
                                            <input id="cc-name" name="link_web" type="text"
                                                class="form-control cc-name valid" value=""
                                                >
                                        </div>
                                        <button type="submit" class="btn btn-outline-success">Create</button>
                                        <a href="{{ route('projectsIndex') }}" class="btn btn-outline-secondary">Back</a>
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
