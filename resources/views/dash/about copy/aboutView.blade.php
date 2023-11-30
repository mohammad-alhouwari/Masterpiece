@extends('dash.layouts.master')

@section('title', 'من نحن')

@section('content')
    <div class="container-fluid py-4">


        <div class="row my-4">
            <div class="col-lg-12 col-md-12 mb-md-0 mb-12">
                <div class="card p-2">
                    <div class="card-header pb-0">
                        <div class="row mb-3">
                            <div class="col-6">
                                <a href="{{ route('dashboard.general.about.create') }}"
                                    class="btn btn-outline-primary text-lg">إضافة صفحة جديدة</a>
                            </div>
                        </div>
                        <div class="card-body p-0 pb-2">
                            <div class="table-responsive">
                                <table id="dataTable" class=" table table-head-bg-primary table-striped  table-hover">
                                    <thead>
                                        <tr>
                                            <th style="">الصفحة</th>
                                            <th class="">العنوان</th>
                                            <th class="">النّص</th>
                                            <th class="">خلفية الصفحة</th>
                                            <th class="">المحتوى</th>
                                            <th class="w-10">التحكم</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <th>الصفحة</th>
                                        <th>العنوان</th>
                                        <th>النّص</th>
                                        <th>خلفية الصفحة</th>
                                        <th>المحتوى</th>
                                        <th>التحكم</th>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $pageNumber = 1;
                                        @endphp

                                        @foreach ($abouts as $about)
                                            @if ($about->generalType == 'about')
                                                <tr>
                                                    <td>{{ $pageNumber }}</td>
                                                    <td>{{ $about->title }}</td>
                                                    <td>{{ $about->text }}</td>
                                                    <td>
                                                        @if ($about->media2)
                                                            <img height="100px" width="100px"
                                                                src="{{ url($about->media2) }}" alt="">
                                                        @else
                                                        <P>فارغ</P>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($about->media1)
                                                            @if ($about->mediaType1 == 'image')
                                                                <img height="100px" width="100px"
                                                                    src="{{ url($about->media1) }}" alt="">
                                                            @elseif ($about->mediaType1 == 'video')
                                                                <video width="200" height="120" loop muted autoplay>
                                                                    <source src="{{ url($about->media1) }}"
                                                                        type="video/mp4">
                                                                    this is a video
                                                                </video>
                                                            @endif
                                                        @else
                                                            <P>فارغ</P>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="dropdown float-start ps-4 pt-1">
                                                            <a class="cursor-pointer" id="dropdownTable"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa-solid fa-wrench"
                                                                    style="font-size: 2.25rem;"></i>
                                                            </a>
                                                            <ul class="dropdown-menu px-2 py-3 me-n4"
                                                                aria-labelledby="dropdownTable">
                                                                <li><a class="dropdown-item border-radius-md text-center text-success"
                                                                        href="{{ route('dashboard.general.about.edit', $about->id) }}">تعديل</a>
                                                                </li>
                                                                <li>
                                                                    <form id="deleteForm{{ $about->id }}"
                                                                        action="{{ route('dashboard.general.about.destroy', $about->id) }}"
                                                                        method="POST" style="display: inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    </form>
                                                                    <a class="dropdown-item border-radius-md text-center text-danger"
                                                                        href="#"
                                                                        onclick="confirmAndSubmit({{ $about->id }})">حذف</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @php
                                                    $pageNumber++;
                                                @endphp
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
