@extends('dash.layouts.masterForm')

@section('title', 'about')

@section('about')
    class="active"
@endsection
@section('aboutAdd')
    class="active"
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add New Product</h2>
            </div>
            <!-- Color Pickers -->

            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Add New Product</h2>

                                </div>
                                <div class="body">
                                    {{-- <form id="form_advanced_validation" method="POST" > --}}
                                    <form action="{{ route('dashboard.about.store') }}" id="form_advanced_validation"
                                        method="POST" enctype="multipart/form-data">

                                        @csrf

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="title" minlength="3"
                                                    >
                                                <label class="form-label">Page Title</label>
                                            </div>
                                            <div class="help-info">add title <b>(optional)</b></div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea name="text" cols="30" rows="3" class="form-control no-resize" maxlength="400" minlength="20"></textarea>
                                                <label class="form-label">text</label>
                                            </div>
                                            <div class="help-info">write something here  <b>(optional)</b></div>

                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="media2" id="image2"
                                                    accept="image/*" >
                                                <label for="thumbnail" class="form-label">cover image</label>
                                            </div>
                                            <div class="help-info">add background cover image for the page <b>(optional)</b>
                                            </div>

                                        </div>
                                        <br>

                                        <div class="form-group form-float"
                                            style="display: inline-block; width:48%; margin:0 5px;">
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="media1" id="image1"
                                                    accept="video/*,image/*" >
                                                <label for="thumbnail" class="form-label">Add image or video</label>
                                            </div>
                                            <div class="help-info">add media for the page <b>(optional)</b></div>

                                        </div>
                                        <div class="form-group form-float"
                                            style="display: inline-block; width:48%; margin:0 5px;">
                                            <div class="form-line">
                                                <select class="form-select" id="mediaType1" name="mediaType1" >
                                                    <option value="image">image</option>
                                                    <option value="video">video</option>

                                                </select>
                                            </div>
                                            <div class="help-info">Choose Media type <b>(image by default)</b></div>
                                        </div>


                                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('JS')
    <!-- Jquery Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <script src="../../js/pages/forms/form-validation.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    {{-- <script src="../../plugins/sweetalert/sweetalert.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@endsection
