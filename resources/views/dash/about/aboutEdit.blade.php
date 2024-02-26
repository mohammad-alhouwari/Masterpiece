@extends('dash.layouts.master')

@section('title', 'عدل من نحن')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-md-0 mb-1">
                <div class="card">
                    <div class="container py-4">
                        <div class="row">
                            <div class="col-lg-8 mx-auto d-flex justify-content-center flex-column">
                                <h3 class="text-center text-primary text-shadow">عدل صفحة (من محن) السابقة</h3>
                                <form role="form" action="{{ route('dashboard.general.about.update', $about->id) }}"
                                    method="POST" id="" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <label class="h6">أضف أو عدل عنوان للصفحة  (إختياري)</label>
                                            <div class="input-group">
                                                <input class="form-control px-5" placeholder="" id="name"
                                                    aria-label="العنوان..." type="text" name="name"
                                                    value="{{ $about->title }}">
                                            </div>
                                            <sup><span class="text-danger">*</span>
                                                حقل إختياري - أضف أو عدل عنوان للصفحة <b>(أكثر من 3
                                                    حروف)</b></sup>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="h6">أضف أو عدل النص (إختياري)</label>
                                            <textarea class="form-control px-5" id="description" rows="2" name="description">{{ $about->text }}</textarea>
                                            <sup><span class="text-danger">*</span>حقل إختياري - أضف أو عدل نص قصير للصفحة
                                                <b>(أكثر من 20 حرف)</b></sup>
                                        </div>

                                        <div class="mb-4">
                                            <label class="h6">أرفق أو عدل صورة خلفية(إختياري)</label>
                                            @if ($about->media2)
                                                <div class="form-check form-switch ps-0 d-flex d-flex">
                                                    <label class=" mb-0">أزيل صورة الخلفية</label>
                                                    <div class="form-check form-switch ps-0 mb-3">
                                                        <input class="form-check-input mt-1 float-end me-auto"
                                                            type="checkbox" name="coverImageRemove" id="flexSwitchCheckDefault">
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="input-group">
                                                <input type="file" accept="image/*" id="coverImage" class="form-control"
                                                    placeholder="" name="coverImage" onchange="previewCover()">
                                            </div>
                                            <img id="coverImagePreview" class="ImagePreview"
                                                src="{{ asset($about->media2) }}" alt="">

                                            <sup><span class="text-danger">*</span>حقل إختياري و يتوجب أن يكون نوع الملف
                                                <b>(صورة)</b></sup>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="h6">إختر نوع المحتوى الإضافي
                                                (إختياري)</label>
                                            <select class="form-control" id="mediaType1" name="mediaType1">
                                                <option value="image"
                                                    {{ $about->mediaType1 === 'image' ? 'selected' : '' }}>صورة</option>
                                                <option value="video"
                                                    {{ $about->mediaType1 === 'video' ? 'selected' : '' }}>فيديو</option>
                                                <option value="emptyMedia">أزيل المحتوى</option>
                                            </select>
                                        </div>

                                        <div class="mb-4 {{ $about->mediaType1 === 'image' ? '' : 'd-none' }}"
                                            id="mediaType1-image">
                                            <label class="h6">أرفق صورة (إختياري)</label>
                                            <div class="input-group">
                                                <input type="file" accept="image/*" id="mediaImage" class="form-control"
                                                    placeholder="" name="mediaImage" onchange="previewImage()">
                                            </div>
                                            <img id="mediaImagePreview" class="ImagePreview"
                                                src="{{ asset($about->media1) }}" alt="">
                                            <sup><span class="text-danger">*</span>حقل إختياري و يتوجب أن يكون نوع الملف
                                                <b>(صورة)</b></sup>
                                        </div>

                                        <div class="mb-4 {{ $about->mediaType1 === 'video' ? '' : 'd-none' }}"
                                            id="mediaType1-video">
                                            <label class="h6">أرفق فيديو(إختياري)</label>
                                            <div class="input-group">
                                                <input type="file" id="mediaVideo" class="form-control" placeholder=""
                                                    name="mediaVideo" onchange="previewVideo()" accept="video/*">
                                            </div>
                                            <video controls id="mediaVideoPreview" width="100%"
                                                src="{{ asset($about->media1) }}" height="160" loop muted
                                                autoplay></video>
                                            <sup><span class="text-danger">*</span>حقل إختياري و يتوجب أن يكون نوع الملف
                                                <b>(فيديو)</b></sup>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn bg-gradient-primary w-100 h5">حفظ
                                                التعديلات</button>
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
                    videoPreview.src = `{{ asset($about->media1) }}`;
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
