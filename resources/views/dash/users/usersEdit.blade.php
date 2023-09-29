@extends('dash.layouts.masterForm')

@section('title', 'Dashboard')

@section('user')
    class="active"
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add New User</h2>
            </div>
            <!-- Color Pickers -->



            {{-- <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                COLOR PICKERS
                                <small>Taken from <a href="https://github.com/mjolnic/bootstrap-colorpicker/" target="_blank">github.com/mjolnic/bootstrap-colorpicker</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <b>HEX CODE</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="#00AABB">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b>RGB(A) CODE</b>
                                    <div class="input-group colorpicker">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="rgba(0,0,0,0.7)">
                                        </div>
                                        <span class="input-group-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}




            <!-- #END# Color Pickers -->
            <!-- File Upload | Drag & Drop OR With Click & Choose -->




            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit User
                            </h2>
                        </div>
                        <div class="body">
                            <form id="" class="" action="/" method="post" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <p>
                                            <b>Name</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <b>Email</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <p>
                                            <b>Password</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">vpn_key</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <b>Repeat Password</b>
                                        </p>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="material-icons">vpn_key</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="password" class="form-control" placeholder="Repeat Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">
                                    Optional Inputs
                                    <small>Optional Inputs.</small>
                                </h2>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <p>
                                            <b>Phone</b>
                                        </p>
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <b>Country</b>
                                        </p>
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">
                                                <i class="material-icons">map</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <b>City</b>
                                        </p>
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">
                                                <i class="material-icons">location_city</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <p>
                                            <b>Street Address</b>
                                        </p>
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">
                                                <i class="material-icons">place</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Street Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <b>Postcode</b>
                                        </p>
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">
                                                <i class="material-icons">markunread_mailbox</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Postcode">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <b>Image</b>
                                        </p>
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon">
                                                <i class="material-icons">camera_alt</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="file" class="form-control" placeholder="Image">
                                            </div>
                                        </div>
                                    </div>
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






























            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add User</h2>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST">
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
                                            <input type="text" name="street" class="form-control">
                                            <label class="form-label"><i class="fa-solid fa-road"></i> Street
                                                Address</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="post" class="form-control">
                                            <label class="form-label"><i class="fa-solid fa-envelopes-bulk"></i>
                                                Post Code</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Add Image</h3>
                                <fieldset>
                                    <div class="d-flex flex-wrap ">
                                        <div class="w-50 p-1">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="file" name="Image" class="form-control">
                                                    <label class="form-label"><i class="fa-solid fa-envelopes-bulk"></i>
                                                        Image</label>
                                                </div>
                                                <div class="help-info">Add Optional Image</div>
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
        
        </div>
    </section>
    <!-- Initialize Dropzone -->
@endsection


@section('JS')
    <!-- Jquery Validation Plugin Js -->
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/pages/forms/form-wizard.js"></script>
@endsection
