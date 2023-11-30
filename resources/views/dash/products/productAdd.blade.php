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
                                <h3 class="text-center text-primary text-shadow">إضافة منتج جديدة</h3>


                                <form role="form" action="{{ route('dashboard.product.store') }}" method="POST"
                                    class="formStore" id="addProduct" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <label class="h6">إسم المنتج</label>
                                            <div class="input-group">
                                                <input class="form-control px-5" placeholder="" id="name"
                                                    value="{{ old('name') }}" aria-label="" type="text"
                                                    name="name">
                                            </div>
                                            <sup><span class="text-danger">*</span>حقل إجباري أضف إسم المنتج <b>(أكثر من 3
                                                    حروف)</b></sup>
                                        </div>

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


                                        <div class="row">

                                            <div class="form-group form-float col-md-4">
                                                <div class="form-line">
                                                    <label class="h6">الكمية المتوفرة</label>
                                                    <input id="stock_quantity" type="number" class="form-control"
                                                        name="stock_quantity" value="{{ old('stock_quantity') }}"
                                                        min="1" required>
                                                </div>
                                                <sup><span class="text-danger">*</span>حقل إجباري <b>(
                                                        أرقام موجبة فقط)</b></sup>
                                            </div>


                                            <div class="form-group form-float col-md-4">
                                                <div class="form-line">
                                                    <label class="h6">السعر</label>
                                                    <input id="price" type="number" class="form-control" name="price"
                                                        min="1" value="{{ old('price') }}" required required>
                                                </div>
                                                <sup><span class="text-danger">*</span>حقل إجباري أقل سعر <b>(
                                                        1)</b></sup>
                                            </div>

                                            <div class="form-group form-float col-md-4">
                                                <div class="form-line">
                                                    <label class="h6">إختر الفئة</label>
                                                    <select class="form-control px-3" id="category_id" name="category_id"
                                                        required>
                                                        <option selected="true" disabled="disabled">--إختر الفئة--
                                                        </option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    {{-- <label class="form-label">Price</label> --}}
                                                </div>
                                                <sup><span class="text-danger">*</span>حقل إجباري و يتوجب أن تختار <b>(
                                                        فيئة)</b></sup>
                                            </div>
                                        </div>



                                        <div class="form-group mb-4">
                                            <label class="h6">وصف قصير</label>
                                            <textarea class="form-control" id="description" rows="2" name="description" value="{{ old('description') }}">{{ old('description') }}</textarea>
                                            <sup><span class="text-danger">*</span>حقل إجباري أضف وصف قصير للمنتج <b>(أكثر
                                                    من
                                                    20 حرف)</b></sup>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="h6">وصف طويل</label>
                                            <textarea class="form-control" id="longDescription" rows="4" name="longDescription"
                                                value="{{ old('longDescription') }}">{{ old('longDescription') }}</textarea>
                                            <sup><span class="text-danger">*</span>حقل إجباري أضف وصف طويل للمنتج <b>(أكثر
                                                    من
                                                    30 حرف)</b></sup>
                                        </div>



                                        <div class="form-check form-switch ps-0">
                                            <label class="h6 mb-0">حدد حالة المنتج</label>
                                            <div class="form-check form-switch ps-0 mb-3">
                                                <input class="form-check-input mt-1 float-end me-auto" type="checkbox"
                                                    name="status" id="flexSwitchCheckDefault" checked="true">
                                            </div>
                                        </div>




                                        <div class="col-md-12">
                                            <button type="submit" id="ButtonStore"
                                                class="btn bg-gradient-primary w-100 h5">أضيف
                                                المنتج</button>
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
