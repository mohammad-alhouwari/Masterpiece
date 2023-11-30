@extends('dash.layouts.master')

@section('title', 'صور المنتج')

@section('content')
    <div class="container-fluid py-4">

        <div class="col-12 mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h4 class="mb-1">أضف صور للمنتج</h4>
                    <p class="text-sm">أضف كحد اقصى <b>(5)</b> صور</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        @php
                            $numImage = 0;
                        @endphp
                        @for ($i = 1; $i <= 5; $i++)
                            @php
                                $imageKey = 'image' . $i;
                            @endphp
                            @if ($product->$imageKey)
                                @php
                                    $numImage++;
                                @endphp
                                <div class=" col-xl-4 col-md-6 p-3">
                                    <div class="card card-profile card-plain">
                                        <div class="card-body text-center bg-white shadow border-radius-lg p-3">
                                            <a href="javascript:;">
                                                <img class="w-100 border-radius-md mb-2"
                                                    src="{{ url($product->$imageKey) }}">
                                            </a>
                                            <form action="{{ route('imageDelete') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="productId" value="{{$product->id}}">
                                                <input type="hidden" name="imageKey" value="{{$imageKey}}">
                                                <button
                                                    class="mb-1 d-block text-md font-weight-bold btn btn-outline-danger text-lg w-100">إحذف
                                                    الصورة</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endfor

                        @if ($numImage < 5)
                            <div class="{{ $numImage == 3 || $numImage == 0 ? 'col-xl-12 col-md-6 mb-5' : 'col-xl-4 col-md-6' }}  p-3">
                                <a href="{{ route('imageAddPage',$product->id) }}"
                                    class="card h-100 card-plain border add-category card-body d-flex flex-column justify-content-center text-center text-secondary h4 ">
                                    <i class="fa-solid fa-camera-retro mb-3"></i>
                                    أضف صورة

                                </a>
                            </div>
                        @else
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
