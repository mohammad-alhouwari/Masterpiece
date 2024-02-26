@extends('dash.layouts.master')

@section('title', 'صور المنتج')

@section('content')
    <div class="container-fluid py-4">

        <div class="col-12 mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h4 class="mb-1">مزايا الموقع</h4>
                    <p class="text-sm">أضف كحد اقصى <b>(4)</b> مزايا</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        @php
                            $numfeature = 0;
                        @endphp
                        @foreach ($features as $item)
                        <div class=" col-xl-3 col-md-6 p-3 ">
                            <div class="card card-profile  h-100">
                                <div class="card-body text-center bg-white shadow border-radius-lg p-3  d-flex  flex-column">
                                    <a href="javascript:;">
                                        <img class="w-100 border-radius-md  object-fit-cover"
                                            src="{{ url($item->media1) }}">
                                    </a>
                                    <div
                                        class="blur justify-content-center text-center mx-4 mb-1 py-1 border-radius-md mt-auto">

                                            <h4 class="mb-0 text-gradient text-primary">{{ $item->title }}</h4>
                                            <h5 class="mb-0 text-secondary ">{{ $item->text }}</h5>
                                    </div>
                                    <form action="{{ route('dashboard.general.features.featureDelete',$item->id) }}" method="POST" class="row px-1 justify-content-around ">
                                        @method('delete')
                                        @csrf
                                        {{-- <input type="hidden" name="productId" value="{{$item->id}}"> --}}
                                        <button
                                            class="mb-1 d-block text-md font-weight-bold btn btn-outline-danger text-lg col-5 ">إحذف
                                            الميزة</button>
                                            <a href="{{ route('dashboard.general.features.featureEdit',$item->id) }}" class="mb-1 d-block text-md font-weight-bold btn btn-outline-primary  text-lg col-5">
                                                عدل الميزة
                                            </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @php
                        $numfeature++;
                        @endphp
                        @endforeach
                        @if ($numfeature < 4)
                            <div class="{{ $numfeature == 4 || $numfeature == 0 ? 'col-xl-12 col-md-6 mb-5' : 'col-xl-3 col-md-6' }}  p-3">
                                <a href="{{ route('featureAdd') }}"
                                    class="card h-100 card-plain border add-category card-body d-flex flex-column justify-content-center text-center text-secondary h4 ">
                                    <i class="fa-solid fa-icons mb-3"></i>
                                    أضف ميّزة

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
