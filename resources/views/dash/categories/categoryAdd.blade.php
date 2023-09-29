@extends('dash.layouts.masterForm')

@section('title', 'categories')

@section('categories')
    class="active"
@endsection
@section('categoryAdd')
    class="active"
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add New Category</h2>
            </div>
            <!-- Color Pickers -->

            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add Category</h2>
                            {{-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="body">
                            <form action="{{ route('dashboard.category.store') }}" id="wizard_with_validation" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <h3>Category Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" required>
                                            <label class="form-label"><i class="fa-solid fa-pencil"></i> Title*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="description" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                            <label class="form-label"><i class="fa-solid fa-pen-to-square"></i>
                                                Description*</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Add Video*</h3>
                                <fieldset>
                                    <div class="d-flex flex-wrap ">
                                        <div class="w-50 p-1">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="file" name="video" class="form-control" required>
                                                    <label class="form-label"><i class="fa-solid fa-envelopes-bulk"></i>
                                                        Video</label>
                                                </div>
                                                <div class="help-info">Add Video</div>
                                            </div>
                                        </div>
                                        <div class="w-50 p-1">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->

        </div>
    </section>
    <!-- Initialize Dropzone -->
@endsection


@section('JS')
    <!-- Jquery Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    {{-- <script src="../../plugins/sweetalert/sweetalert.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom Js -->
    <script src="../../js/pages/forms/form-wizard.js"></script>
@endsection
