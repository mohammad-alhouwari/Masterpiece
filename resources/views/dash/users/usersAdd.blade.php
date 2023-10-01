@extends('dash.layouts.masterForm')

@section('title', 'Dashboard')

@section('users')
    class="active"
@endsection
@section('usersAdd')
    class="active"
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add New User</h2>
            </div>
            <!-- Color Pickers -->























            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add User</h2>
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
                            <form action="{{ route('dashboard.user.store') }}" id="wizard_with_validation" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h3> Mandatory Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" required>
                                            <label class="form-label"><i class="fa-solid fa-user"></i> Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">

                                            <input type="email" name="email" class="form-control" required>
                                            <label class="form-label"><i class="fa-solid fa-envelope"></i>
                                                Email*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password" id="password"
                                                required>
                                            <label class="form-label"><i class="fa-solid fa-key"></i> Password*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="confirm" required>
                                            <label class="form-label"><i class="fa-solid fa-key"></i> Confirm
                                                Password*</label>
                                        </div>
                                        <div class="help-info">At least 8 characters contains uppercase, lowercase, digit,
                                            and special character</div>
                                    </div>
                                </fieldset>

                                <h3>Optional Information</h3>
                                <fieldset>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="phone" name="phone" class="form-control">
                                            <label class="form-label"><i class="fa-solid fa-phone"></i>
                                                phone</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="city" class="form-control">
                                            <label class="form-label"><i class="fa-solid fa-city"></i>
                                                City</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="street_address" class="form-control">
                                            <label class="form-label"><i class="fa-solid fa-road"></i> Street
                                                Address</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="post_code" class="form-control">
                                            <label class="form-label"><i class="fa-solid fa-envelopes-bulk"></i>
                                                Post Code</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Add Image</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="file" name="image" class="form-control">
                                            <label class="form-label"><i class="fa-solid fa-envelopes-bulk"></i>
                                                Image</label>
                                        </div>
                                        <div class="help-info">Add Optional Image</div>
                                    </div>
                                    <br>
                                    <input id="role" name="role" type="checkbox">
                                    <label for="role">Admin.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom Js -->
    <script src="../../js/pages/forms/form-wizard.js"></script>
@endsection
