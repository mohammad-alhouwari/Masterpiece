@extends('dash.layouts.master')

@section('title', 'فئات المنتجات')

@section('content')
    <div class="container-fluid py-4">

        <div class="col-12 mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">الفئات</h6>
                    <p class="text-sm">جميع فئات المنتجات</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">

                        @foreach ($categories as $category)
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    {{-- <img class="card-img-top" src="./assets/img/kit/pro/anastasia.jpg"> --}}
                                    {{-- <div class="position-relative"> --}}
                                        @if ($category->video)
                                            <video width="100%" height="200" loop muted autoplay
                                                class=" card-img-top" style="object-fit: cover;">
                                                <source src="{{ url('videos/' . $category->video) }}" type="video/mp4">
                                                this is a video
                                            </video>
                                        @else
                                            No video available
                                        @endif
                                    {{-- </div> --}}
                                    <div class="position-relative"
                                        style="height: 50px;overflow: hidden;margin-top: -50px;z-index:2;position: relative;">
                                        <div class="position-absolute w-100 top-0" style="z-index: 1;">
                                            <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40"
                                                preserveAspectRatio="none" shape-rendering="auto">
                                                <defs>
                                                    <path id="card-wave"
                                                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                                                    </path>
                                                </defs>
                                                <g class="moving-waves">
                                                    <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30">
                                                    </use>
                                                    <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)">
                                                    </use>
                                                    <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)">
                                                    </use>
                                                    <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)">
                                                    </use>
                                                    <use xlink:href="#card-wave" x="48" y="13"
                                                        fill="rgba(255,255,255,0.15)"></use>
                                                    <use xlink:href="#card-wave" x="48" y="16"
                                                        fill="rgba(255,255,255,0.99)"></use>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    {{-- <div class="card-body">

                                        <h4>
                                            Soft UI Design System
                                        </h4>
                                        <p>
                                            One of the most beautiful and complex UI Kits built by the team behind Creative
                                            Tim. That's pretty impressive.
                                        </p>
                                        <a href="javascript:;" class="text-primary icon-move-right">More about us
                                            <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        </a>
                                    </div> --}}
                                    <div class="card-body px-2 pb-0">
                                        <p class="text-gradient text-dark mb-2 text-sm">الفئة #{{ $category->id }}</p>
                                        <a href="javascript:;">
                                            <h5 class="text-primary">
                                                {{ $category->name }}
                                            </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                            {{ $category->description }}
                                        </p>
                                        <div class="d-flex align-items-center justify-content-around">
                                            <a href="{{ route('dashboard.category.edit', $category->id) }}"
                                                class="btn btn-outline-primary"><b>تعديل</b></a>
                                            <form id="deleteForm{{ $category->id }}"
                                                action="{{ route('dashboard.category.destroy', $category->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <a class="btn btn-outline-danger" href="#"
                                                onclick="confirmAndSubmit({{ $category->id }})">حذف</a>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            {{-- <div class="col-xl-3 col-md-6 mb-xl-0 mb-4 ">
                                <div class="card card-blog card-plain shadow border-radius-xl p-3 h-100">
                                    <div class="position-relative">
                                        @if ($category->video)
                                            <video width="100%" height="160" loop muted autoplay
                                                class="shadow-xl border-radius-xl" style="object-fit: cover;">
                                                <source src="{{ url('videos/' . $category->video) }}" type="video/mp4">
                                                this is a video
                                            </video>
                                        @else
                                            No video available
                                        @endif
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <p class="text-gradient text-dark mb-2 text-sm">الفئة #{{ $category->id }}</p>
                                        <a href="javascript:;">
                                            <h5 class="text-primary">
                                                {{ $category->name }}
                                            </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                            {{ $category->description }}
                                        </p>
                                        <div class="d-flex align-items-center justify-content-around">
                                            <a href="{{ route('dashboard.category.edit', $category->id) }}"
                                                class="btn btn-outline-primary"><b>تعديل</b></a>
                                            <form id="deleteForm{{ $category->id }}"
                                                action="{{ route('dashboard.category.destroy', $category->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <a class="btn btn-outline-danger" href="#"
                                                onclick="confirmAndSubmit({{ $category->id }})">حذف</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        @endforeach
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <a href="{{ route('dashboard.category.create') }}"
                                class="card h-100 card-plain border add-category card-body d-flex flex-column justify-content-center text-center text-secondary h4">
                                {{-- <div class="card h-100 card-plain border add-category"> --}}
                                {{-- <div class="card-body d-flex flex-column justify-content-center text-center"> --}}
                                <i class="fa fa-plus mb-3"></i><br>
                                أضف فئة
                                {{-- </div> --}}
                                {{-- </div> --}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row my-4">
            <div class="col-lg-12 col-md-12 mb-md-0 mb-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>فئات المنتجات</h6>
                                <p class="text-sm">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">30 انتهى</span> هذا الشهر
                                </p>
                            </div>
                            <div class="col-6 my-auto text-start">
                                <div class="dropdown float-start ps-4">
                                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-secondary"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3 me-n4" aria-labelledby="dropdownTable">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">عمل</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">عمل آخر</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">شيء آخر هنا</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center  text-secondary text-xs font-weight-bolder  opacity-7"
                                            style="width: 200px;">
                                            الفيديو</th>
                                        <th class=" text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                            الإسم</th>
                                        <th class="  text-secondary text-xs font-weight-bolder opacity-7">
                                            الوصف</th>
                                        <th class="text-center  text-secondary text-xs font-weight-bolder opacity-7">
                                            التفاعل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                @if ($category->video)
                                                    <video width="200" height="120" loop muted autoplay
                                                        style="object-fit: cover;">
                                                        <source src="{{ url('videos/' . $category->video) }}"
                                                            type="video/mp4">
                                                        this is a video
                                                    </video>
                                                @else
                                                    No video available
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                  
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $category->name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                                <a href="{{ route('dashboard.category.edit', $category->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <button class="btn btn-danger"
                                                    onclick="deleteCategory({{ $category->id }})">Delete</button>
                                                <form id="delete-form-{{ $category->id }}"
                                                    action="{{ route('dashboard.category.destroy', $category->id) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
