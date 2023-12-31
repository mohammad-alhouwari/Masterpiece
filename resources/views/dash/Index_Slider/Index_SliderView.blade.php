﻿@extends('dash.layouts.masterTable')

@section('title', 'Index_Slider')
@section('Index_Slider', 'toggled')
@section('general')
    class="active"
@endsection
@section('Index_SliderView')
    class="active"
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                About-Us
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Title</th>
                                            <th>Text</th>
                                            <th>Cover</th>
                                            <th>Media</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Page</th>
                                            <th>Title</th>
                                            <th>Text</th>
                                            <th>Cover</th>
                                            <th>Media</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $pageNumber = 1;
                                        @endphp

                                        @foreach ($abouts as $about)
                                            @if ($about->generalType == 'about')
                                                <tr>
                                                    <td>Page {{ $pageNumber }}</td>
                                                    <td>{{ $about->title }}</td>
                                                    <td>{{ $about->text }}</td>
                                                    <td>
                                                        @if ($about->media2)
                                                            <img height="100px" width="100px"
                                                                src="{{ url($about->media2) }}" alt="">
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
                                                        <P><i class="fa-solid fa-pallet"></i></P>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('dashboard.about.edit', $about->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <button class="btn btn-danger"
                                                            onclick="deleteCategory({{ $about->id }})">Delete</button>
                                                        <form id="delete-form-{{ $about->id }}"
                                                            action="{{ route('dashboard.about.destroy', $about->id) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
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
            <!-- #END# Exportable Table -->




            <!-- Basic Examples -->
            {{-- <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC EXAMPLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- #END# Basic Examples -->
        </div>
        <script>
            function deleteCategory(categoryId) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // User confirmed, submit the form
                        document.getElementById('delete-form-' + categoryId).submit();
                    }
                });
            }
        </script>
    </section>
@endsection
