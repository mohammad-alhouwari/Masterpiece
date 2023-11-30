@extends('dash.layouts.master')

@section('title', 'فئات المنتجات')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-md-0 mb-1">
                <div class="card">
                    <div class="container py-4">
                        <div class="row">
                            <div class="col-lg-8 mx-auto d-flex justify-content-center flex-column">
                                <h3 class="text-center text-primary text-shadow">إضافة صورة جديدة للمنج</h3>


                                <form role="form" action="{{ route('imageStore',$id) }}" method="POST"
                                    class="formStore" id="addProduct" enctype="multipart/form-data" autocomplete="off">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <label class="h6">أرفق صورة</label>
                                            <div class="input-group">
                                            </div>
                                            <main class="page">
                                                <!-- input file -->
                                                <div class="box">
                                                    <input type="file" id="file-input" class="form-control"
                                                        accept="image/*">
                                                </div>
                                                
                                                <!-- leftbox -->
                                                <div class="row">
                                                    <div class="box-2 col-lg-6 mb-2">
                                                        <div class="result hide img-container"></div>
                                                    </div>
                                                    <!--rightbox-->
                                                    <div
                                                        class="box-2 img-result hide col-lg-6 text-center img-container cropper-container">
                                                        <img id="myImage" class="cropped" src="" alt="">
                                                    </div>
                                                </div>
                                                <!-- input file -->
                                                <div class="box text-center">
                                                    <div class="options hide">
                                                        <input type="number" class="img-w" value="300" min="100"
                                                            max="1200" />
                                                    </div>
                                                    <!-- save btn -->
                                                    <div id="oldImage" style="display: none;"></div>
                                                    <button id="" class="btn btn-outline-primary save hide ">تأكيد
                                                        الصورة</button>
                                                    <input type="hidden" name="image_data" id="image_data" />
                                                </div>
                                            </main>

                                            <sup><span class="text-danger">*</span>حقل إجباري و يتوجب أن يكون نوع الملف
                                                <b>(صورة)</b></sup>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" id="ButtonStore"
                                                class="btn bg-gradient-primary w-100 h5">أضيف
                                                الفئة</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // function previewVideo() {
            //     var videoInput = document.getElementById('video');
            //     var videoPreview = document.getElementById('videoPreview');

            //     var file = videoInput.files[0];

            //     if (file) {
            //         var objectURL = URL.createObjectURL(file);
            //         videoPreview.src = objectURL;
            //         videoPreview.style.display = 'block';
            //     } else {
            //         videoPreview.src = '';
            //         videoPreview.style.display = 'none';
            //     }
            // }
        </script>

    @endsection
