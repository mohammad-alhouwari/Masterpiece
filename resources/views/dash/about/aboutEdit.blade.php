@extends('dash.layouts.masterForm')

@section('title', 'about')
@section('about', 'toggled')
@section('general')
    class="active"
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Categorye</h2>
            </div>




            {{-- 
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
                                                <input type="file" class="form-control" name="video"
                                                    placeholder="Video">
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
 --}}




















            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Product</h2>

                        </div>
                        <div class="body">
                            {{-- <form id="form_advanced_validation" method="POST" > --}}
                            <form action="{{ route('dashboard.product.update', $product->id) }}" id="form_advanced_validation"
                                method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" maxlength="10"
                                            minlength="3" required value="{{ $product->name }}">
                                        <label class="form-label">Product Name</label>
                                    </div>
                                    <div class="help-info">Min. 3, Max. 10 characters</div>
                                </div>



                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required>{{ $product->description }}</textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                    <div class="help-info">Description</div>

                                </div>



                                <div class="form-group form-float" style="display: inline-block; width:48%; margin:0 5px;">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="stock_quantity" min="1"
                                            required value="{{ $product->stock_quantity }}">
                                        <label class="form-label">Stock quantity</label>
                                    </div>
                                    <div class="help-info">Numbers only</div>
                                </div>





                                <div class="form-group form-float" style="display: inline-block; width:48%; margin:0 5px;">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="price" min="1" required
                                            value="{{ $product->price }}">
                                        <label class="form-label">Price</label>
                                    </div>
                                    <div class="help-info">Numbers only min 1</div>
                                </div>

                                <div class="form-group form-float" style="display: inline-block; width:48%; margin:0 5px;">
                                    <div class="form-line">
                                        <select class="form-select" id="category" name="category_id">
                                            <option value="{{ $product->category_id }}">{{ $product->category->name }}
                                            </option>
                                            @foreach ($categories as $category)
                                                @if ($product->category_id != $category->id)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="help-info">Numbers only min 1</div>
                                </div>




                                <div class="form-group form-float" style="display: inline-block; width:48%; margin:0 5px;">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="image" id="thumbnail"
                                            accept="image/*" required>
                                        <label for="thumbnail" class="form-label">Thumbnail image</label>
                                    </div>
                                    <div class="help-info">Thumbnail image required</div>
                                </div>


                                {{-- value="{{ url($product->image1) }}" --}}
                                <br>
                                <br>
                                <br>
                                <div style="display: flex;">


                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="image1" id="image1"
                                            accept="image/*">
                                        <label for="image1" class="form-label" style="top: -15px;">image1</label>
                                    </div>
                                    <div class="help-info" style="float: left;">image1</div>
                                </div>


                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="image2" id="image2"
                                            accept="image/*">
                                        <label for="image2" class="form-label" style="top: -15px;">image2</label>
                                    </div>
                                    <div class="help-info" style="float: left;">image2</div>
                                </div>


                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="image3" id="image3"
                                            accept="image/*">
                                        <label for="image3" class="form-label" style="top: -15px;">image3</label>
                                    </div>
                                    <div class="help-info" style="float: left;">image3</div>
                                </div>


                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="image4" id="image4"
                                            accept="image/*">
                                        <label for="image4" class="form-label" style="top: -15px;">image4</label>
                                    </div>
                                    <div class="help-info" style="float: left;">image4</div>
                                </div>


                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="image5" id="image5"
                                            accept="image/*">
                                        <label for="image5" class="form-label" style="top: -15px;">image5</label>
                                    </div>
                                    <div class="help-info" style="float: left;">image5</div>
                                </div>



                                </div>


                                <br>
                                <br>


                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
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
