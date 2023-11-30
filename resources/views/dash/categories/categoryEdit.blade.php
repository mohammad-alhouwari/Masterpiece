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
                                <h3 class="text-center text-primary text-shadow">تعديل الفئة</h3>
                                <form id="category-edit-form" class=""
                                    action="{{ route('dashboard.category.update', $category->id) }}" id="addCategory"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <label class="h6">إسم الفئة</label>
                                            <div class="input-group">
                                                <input class="form-control px-5" placeholder="{{ $category->name }}"
                                                    id="name" value="{{ $category->name }}" aria-label="العنوان..."
                                                    type="text" name="name">
                                            </div>
                                            <sup><span class="text-danger">*</span>حقل إجباري أضف عوان الفئة <b>(أكثر من 3
                                                    حروف)</b></sup>
                                        </div>
                                        <div class="mb-4">
                                            <label class="h6">أرفق فيديو</label>
                                            <div class="input-group">
                                                <input type="file" id="video" class="form-control" placeholder=""
                                                    name="video" onchange="previewVideo()">
                                            </div>
                                            <video controls id="videoPreview" width="100%" height="160" loop muted
                                                autoplay src="{{ url('videos/' . $category->video) }}"></video>
                                            <sup><span class="text-danger">*</span>حقل إجباري و يتوجب أن يكون نوع الملف
                                                <b>(فيديو)</b></sup>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label>وصف الفئة</label>
                                            <textarea class="form-control" id="description" rows="4" name="description"
                                                placeholder="{{ $category->description }}">{{ $category->description }}</textarea>
                                            <sup><span class="text-danger">*</span>حقل إجباري أضف وصف قصير للفئة <b>(أكثر من
                                                    20 حرف)</b></sup>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn bg-gradient-primary w-100 h5">عدل
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
            function previewVideo() {
                var videoInput = document.getElementById('video');
                var videoPreview = document.getElementById('videoPreview');

                var file = videoInput.files[0];

                if (file) {
                    var objectURL = URL.createObjectURL(file);
                    videoPreview.src = objectURL;
                } else {
                    videoPreview.src = `{{ url('videos/' . $category->video) }}`;
                }
            }
        </script>


    @endsection
