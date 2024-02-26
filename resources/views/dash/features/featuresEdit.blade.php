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
                                <h3 class="text-center text-primary text-shadow">عدل على ميّزة الموقع</h3>
                                <form role="form" action="{{ route('dashboard.general.features.featureUpdate',$feature->id) }}" method="POST"
                                    id="" enctype="multipart/form-data" autocomplete="off">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <label class="h6">عنوان الميزة</label>
                                            <div class="input-group">
                                                <input class="form-control px-5" placeholder="" id="name"
                                                    aria-label="العنوان..." type="text" name="name" value="{{$feature->title}}" required >
                                            </div>
                                            <sup><span class="text-danger">*</span>أضف عنوان للميزة <b>(أكثر من 3
                                                    حروف)</b></sup>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="h6">نص قصير</label>
                                            <textarea class="form-control px-5" id="description" rows="2" name="description" required>{{$feature->text}}</textarea>
                                            <sup><span class="text-danger">*</span>أضف نص قصير للميزة <b>(أكثر
                                                    من
                                                    20 حرف)</b></sup>
                                        </div>

                                        <div class="mb-4">
                                            <label class="h6">أرفق صورة للميزة</label>
                                            <div class="input-group">
                                                <input type="file" accept="image/*" id="coverImage" class="form-control"
                                                    placeholder="" name="featureImage" onchange="previewCover()" required>
                                            </div>
                                            <img id="coverImagePreview" class="ImagePreview" src="{{ url($feature->media1) }}" alt="">
                                            <sup><span class="text-danger">*</span>حقل إختياري - يتوجب أن يكون نوع الملف
                                                <b>(صورة)</b></sup>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn bg-gradient-primary w-100 h5">أضيف
                                                الميزة</button>
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
        </script>


    @endsection
