@extends('dash.layouts.masterForm')

@section('title', 'categories')

@section('categories')
    class="active"
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Categorye</h2>
            </div>





            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Categorye
                            </h2>
                        </div>
                        <div class="body">
                            <form id="category-edit-form" class=""
                                action="{{ route('dashboard.category.update', $category->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row clearfix col-md-6">
                                    <div class="col-md-12">
                                        <p>
                                            <b>Name</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="fa-solid fa-pencil"></i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Name" name="name"
                                                    value="{{ $category->name }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <p>
                                            <b>Description</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </span>
                                            <div class="form-line">
                                                <textarea class="form-control" name="description" required>{{ $category->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p>
                                            <b>Video</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="fa-solid fa-video"></i>
                                            </span>
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="video" placeholder="Video">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix col-md-6 text-center">
                                    @if ($category->video)
                                        <video width="420" height="360" loop muted autoplay>
                                            <source src="{{ url('videos/' . $category->video) }}" type="video/mp4">
                                            this is a video
                                        </video>
                                    @else
                                        No video available
                                    @endif
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary  waves-effect">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>






















            >

        </div>
    </section>
    <!-- Initialize Dropzone -->
@endsection


@section('JS')
    <!-- Jquery Validation Plugin Js -->
    <script src={{ asset('plugins/jquery-validation/jquery.validate.js') }}></script>

    <!-- JQuery Steps Plugin Js -->
    <script src={{ asset('plugins/jquery-steps/jquery.steps.js') }}></script>

    <!-- Sweet Alert Plugin Js -->
    <script src={{ asset('plugins/sweetalert/sweetalert.min.js') }}></script>

    <!-- Custom Js -->
    <script src={{ asset('js/pages/forms/form-wizard.js') }}></script>
@endsection
