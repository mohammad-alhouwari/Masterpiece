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
                                <a href="{{ route('dashboard.order.index') }}" class="btn btn-outline-primary text-lg">العودة للطلبات</a>
                            </div>
                        </div>
                        <div class="card-body p-0 pb-2">
                            <div class="table-responsive">
                                <table id="dataTable" class=" table table-head-bg-primary table-striped  table-hover">
                                    <thead>
                                        <tr>
                                            <th>إسم المنتج</th>
                                            <th>الكمية</th>
                                            <th>السعر</th>
                                            <th class="w-10">المزيد</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>إسم المنتج</th>
                                            <th>الكمية</th>
                                            <th>السعر</th>
                                            <th class="w-10">روؤية المنتج</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($orderItem as $item)
                                            <tr>
                                                <td>{{ $item->Product->name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->Product->price }}</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-block .btn-lg btn-outline-info mb-0 py-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-note{{ $item->id }}">المنتج</button>
                                                    <div class="modal fade" id="modal-note{{ $item->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="modal-note{{ $item->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title mx-auto"
                                                                        id="modal-title-default">
                                                                        {{ $item->Product->name }}
                                                                    </h6>
                                                                </div>
                                                                <div class="modal-body text-center">
                                                                    <img src="{{ url($item->Product->image) }}"
                                                                        class="w-50" alt="">

                                                                    <p>{{ $item->Product->description }}
                                                                    </p>
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
