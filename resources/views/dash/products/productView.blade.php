@extends('dash.layouts.master')

@section('title', 'فئات المنتجات')

@section('content')
    <div class="container-fluid py-4">


        <div class="row my-4">
            <div class="col-lg-12 col-md-12 mb-md-0 mb-12">
                <div class="card p-2">
                    <div class="card-header pb-0">
                        <div class="row mb-3">
                            <div class="col-6">
                                <a href="{{ route('dashboard.product.create') }}"
                                    class="btn btn-outline-primary text-lg">إضافة منتج جديد</a>
                            </div>
                        </div>
                        <div class="card-body p-0 pb-2">
                            <div class="table-responsive">
                                <table id="dataTable" class=" table table-head-bg-primary table-striped  table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 120px;">الصورة</th>
                                            <th class="w-35">الصورة</th>
                                            <th class="w-8">إسم المنتج</th>
                                            <th class="w-8">الفئة</th>
                                            <th class="w-15">وصف قصير</th>
                                            <th class="w-15">وصف طويل</th>
                                            <th class="w-5">التوفر</th>
                                            <th class="w-5">الحالة</th>
                                            <th class="w-5">التحكم</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <th>الصورة</th>
                                        <th>الصورة</th>
                                        <th>إسم المنتج</th>
                                        <th>الفئة</th>
                                        <th>وصف قصير</th>
                                        <th>وصف طويل</th>
                                        <th>التوفر</th>
                                        <th>الحالة</th>
                                        <th>التحكم</th>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td><img src="{{ url($product->image) }}" alt="img" width="120px">
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2 d-flex justify-content-center align-items-center"
                                                        style="height: 160px;">
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
                                                                <a href="javascript:;"
                                                                    class="avatar avatar-xxs rounded-circle"
                                                                    {{-- data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $imageKey }}" --}}
                                                                    >
                                                                    <img alt="{{ $imageKey }}"
                                                                        src="{{ url($product->$imageKey) }}">
                                                                </a>
                                                            @endif
                                                        @endfor
                                                        @if ($numImage == 0)
                                                        <P>لا يوجد صور إضافية</P>
                                                        @endif
                                                    </div>
                                                </td>

                                                <td><b>{{ $product->name }}</b></td>
                                                <td><b>{{ $product->category->name }}</b></td>
                                                <td>
                                                    {{ Illuminate\Support\Str::limit($product->description, 70, '...') }}
                                                    <button type="button" class="btn btn-block btn-outline-info mb-0 p-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-description{{ $product->id }}">روؤية
                                                        المزيد</button>
                                                    <div class="modal fade" id="modal-description{{ $product->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="modal-description{{ $product->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title mx-auto"
                                                                        id="modal-title-default">وصف قصير للمنتج</h6>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>{{ $product->description }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-link text-danger mx-auto my-0 py-1"
                                                                        data-bs-dismiss="modal">إغلاق</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ Illuminate\Support\Str::limit($product->longDescription, 70, '...') }}
                                                    <button type="button" class="btn btn-block btn-outline-info mb-0 p-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-longDescription{{ $product->id }}">روؤية
                                                        المزيد</button>
                                                    <div class="modal fade" id="modal-longDescription{{ $product->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="modal-longDescription{{ $product->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title mx-auto"
                                                                        id="modal-title-default">وصف طويل للمنتج</h6>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>{{ $product->longDescription }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-link text-danger mx-auto my-0 py-1"
                                                                        data-bs-dismiss="modal">إغلاق</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>


                                                <td class="text-center"> {{ $product->stock_quantity }}</td>
                                                <td>
                                                    @if ($product->stock_quantity != 0)
                                                        @if ($product->status == 1)
                                                            <span
                                                                class="badge badge-sm bg-gradient-success text-center w-100">نشط</span>
                                                        @elseif ($product->status == 0)
                                                            <span
                                                                class="badge badge-sm bg-gradient-secondary text-center w-100">غير
                                                                نشط</span>
                                                        @else
                                                            <span
                                                                class="badge badge-sm bg-gradient-warning text-center w-100">{{ $product->status }}</span>
                                                        @endif
                                                    @else
                                                        <span
                                                            class="badge badge-sm bg-gradient-danger text-center w-100">غير
                                                            متوفر</span>
                                                    @endif



                                                </td>
                                                <td>
                                                    <div class="dropdown float-start ps-4 pt-1">
                                                        <a class="cursor-pointer" id="dropdownTable"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-wrench" style="font-size: 2.25rem;"></i>
                                                        </a>
                                                        <ul class="dropdown-menu px-2 py-3 me-n4"
                                                            aria-labelledby="dropdownTable">
                                                            <li><a class="dropdown-item border-radius-md text-center text-info"
                                                                    href="{{ route('dashboard.product.show', $product->id) }}">عرض</a>
                                                            </li>
                                                            <li><a class="dropdown-item border-radius-md text-center text-success"
                                                                    href="{{ route('dashboard.product.edit', $product->id) }}">تعديل</a>
                                                            </li>
                                                            <li><a class="dropdown-item border-radius-md text-center text-warning"
                                                                    href="{{ route('dashboard.product.show', $product->id) }}">الصور</a>
                                                            </li>
                                                            <li>
                                                                <form id="deleteForm{{ $product->id }}"
                                                                    action="{{ route('dashboard.product.destroy', $product->id) }}"
                                                                    method="POST" style="display: inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>

                                                                <a class="dropdown-item border-radius-md text-center text-danger"
                                                                    href="#"
                                                                    onclick="confirmAndSubmit({{ $product->id }})">حذف</a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
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
