@extends('dash.layouts.master')

@section('title', 'أضف من نحن')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-md-0 mb-1">
                <div class="card">
                    <div class="container py-4">
                        <div class="row">
                            <div class="col-lg-8 mx-auto d-flex justify-content-center flex-column">
                                <h3 class="text-center text-primary text-shadow">إضافة صفحة (من محن) جديدة</h3>
                                <form role="form" action="{{ route('dashboard.general.about.store') }}" method="POST"
                                    id="" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <label class="h6">إسم الفئة(إختياري)</label>
                                            <div class="input-group">
                                                <input class="form-control px-5" placeholder="" id="name"
                                                    aria-label="العنوان..." type="text" name="name">
                                            </div>
                                            <sup><span class="text-danger">*</span>حقل إختياري أضف عوان الفئة <b>(أكثر من 3
                                                    حروف)</b></sup>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="h6">وصف الفئة(إختياري)</label>
                                            <textarea class="form-control" id="description" rows="2" name="description"></textarea>
                                            <sup><span class="text-danger">*</span>حقل إختياري أضف وصف قصير للفئة <b>(أكثر
                                                    من
                                                    20 حرف)</b></sup>
                                        </div>

                                        <div class="mb-4">
                                            <label class="h6">أرفق صورة خلفية(إختياري)</label>
                                            <div class="input-group">
                                                <input type="file" accept="image/*" id="coverImage" class="form-control"
                                                    placeholder="" name="coverImage" onchange="previewCover()">
                                            </div>
                                            <img id="coverImagePreview" class="ImagePreview" src="" alt="">
                                            <sup><span class="text-danger">*</span>حقل إختياري و يتوجب أن يكون نوع الملف
                                                <b>(صورة)</b></sup>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="h6">إختر نوع المحتوى الإضافي
                                                (إختياري)</label>
                                            <select class="form-control" id="mediaType1" name="mediaType1">
                                                <option value="0" selected="true" disabled="disabled">--إختر النوع--
                                                </option>
                                                <option value="image">صورة</option>
                                                <option value="video">فيديو</option>
                                            </select>
                                        </div>


                                        <div class="mb-4 d-none" id="mediaType1-image">
                                            <label class="h6">أرفق صورة (إختياري)</label>
                                            <div class="input-group">
                                                <input type="file" accept="image/*" id="mediaImage" class="form-control"
                                                    placeholder="" name="mediaImage" onchange="previewImage()">
                                            </div>
                                            <img id="mediaImagePreview" class="ImagePreview" src="" alt="">
                                            <sup><span class="text-danger">*</span>حقل إختياري و يتوجب أن يكون نوع الملف
                                                <b>(صورة)</b></sup>
                                        </div>


                                        <div class="mb-4 d-none" id="mediaType1-video">
                                            <label class="h6">أرفق فيديو(إختياري)</label>
                                            <div class="input-group">
                                                <input type="file" id="mediaVideo" class="form-control" placeholder=""
                                                    name="mediaVideo" onchange="previewVideo()" accept="video/*">
                                            </div>
                                            <video controls id="mediaVideoPreview" style="display: none;" width="100%"
                                                height="160" loop muted autoplay></video>
                                            <sup><span class="text-danger">*</span>حقل إختياري و يتوجب أن يكون نوع الملف
                                                <b>(فيديو)</b></sup>
                                        </div>


                                        <div class="col-md-12">
                                            <button type="submit" class="btn bg-gradient-primary w-100 h5">أضيف
                                                الصفحة</button>
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
            document.getElementById('mediaType1').addEventListener('change', function() {
                // Get the selected value
                var selectedValue = this.value;

                // Hide both sections initially
                document.getElementById('mediaType1-image').classList.add('d-none');
                document.getElementById('mediaType1-video').classList.add('d-none');

                // Show the corresponding section based on the selected value
                if (selectedValue === 'image') {
                    document.getElementById('mediaType1-image').classList.remove('d-none');
                } else if (selectedValue === 'video') {
                    document.getElementById('mediaType1-video').classList.remove('d-none');
                }
            });

            function previewVideo() {
                var videoInput = document.getElementById('mediaVideo');
                var videoPreview = document.getElementById('mediaVideoPreview');

                var file = videoInput.files[0];

                if (file) {
                    var objectURL = URL.createObjectURL(file);
                    videoPreview.src = objectURL;
                    videoPreview.style.display = 'block';
                } else {
                    videoPreview.src = '';
                    videoPreview.style.display = 'none';
                }
            }

            function previewCover() {
                var input = document.getElementById('coverImage');
                var preview = document.getElementById('coverImagePreview');

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function previewImage() {
                var input = document.getElementById('mediaImage');
                var preview = document.getElementById('mediaImagePreview');

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>


    @endsection
