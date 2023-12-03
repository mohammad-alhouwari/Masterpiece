@extends('dash.layouts.master')

@section('title', 'من نحن')

@section('content')
    <div class="container-fluid py-4">


        <div class="row my-4">
            <div class="col-lg-12 col-md-12 mb-md-0 mb-12">
                <div class="card p-2">
                    <div class="card-header pb-0">
                        <div class="card-body p-0 pb-2">
                            <div class="table-responsive">
                                <table id="dataTable" class=" table table-head-bg-primary table-striped  table-hover">
                                    <thead>
                                        <tr>
                                            <th>رقم الطلب</th>
                                            <th>الإسم</th>
                                            <th>تاريخ الطلب</th>
                                            <th>عدد المنتجات</th>
                                            <th>السعر الكلي</th>
                                            <th>طريقة الدفع</th>
                                            <th>ملاحظات المشتري</th>
                                            <th>معلومات الوصول</th>
                                            <th class="w-10">المزيد</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>رقم الطلب</th>
                                            <th>الإسم</th>
                                            <th>تاريخ الطلب</th>
                                            <th>عدد المنتجات</th>
                                            <th>السعر الكلي</th>
                                            <th>طريقة الدفع</th>
                                            <th>ملاحظات المشتري</th>
                                            <th>معلومات الوصول</th>
                                            <th class="w-10">المزيد</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>#{{ $order->id }}</td>
                                                <td>{{ $order->User->name }}</td>
                                                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                                <td>{{ $order->total_quantity }}</td>
                                                <td>${{ $order->total_price }}</td>
                                                <td>{{ $order->payment_method }}</td>

                                                <td>
                                                    @if ($order->note)
                                                        <button type="button"
                                                            class="btn btn-block .btn-lg btn-outline-info mb-0 py-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-note{{ $order->id }}">الملاحظات</button>
                                                        <div class="modal fade" id="modal-note{{ $order->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="modal-note{{ $order->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title mx-auto"
                                                                            id="modal-title-default">ملاحظات المشتري
                                                                        </h6>
                                                                    </div>
                                                                    <div class="modal-body text-center">
                                                                        <h6>
                                                                            <i class="fa-solid fa-clipboard-list"></i>
                                                                        </h6>
                                                                        <p>{{ $order->note ? "$order->note" : '-------' }}
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
                                                    @else
                                                        <P class="px-4  mb-0">غير متوفر</P>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($order->city || $order->phone || $order->street_address || $order->post_code)
                                                        <button type="button"
                                                            class="btn btn-block .btn-lg btn-outline-info mb-0 py-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-description{{ $order->id }}">العنوان</button>
                                                        <div class="modal fade" id="modal-description{{ $order->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="modal-description{{ $order->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title mx-auto"
                                                                            id="modal-title-default">معلومات عنوان الطلب
                                                                        </h6>
                                                                    </div>
                                                                    <div class="modal-body row">
                                                                        <div class="col-lg-3">
                                                                            <h6><i class="fa-solid fa-city"></i> المدينة
                                                                            </h6>
                                                                            <p>{{ $order->city ? "$order->city" : '-------' }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <h6><i class="fa-solid fa-phone"></i> الهاتف
                                                                            </h6>
                                                                            <p>{{ $order->phone ? "$order->phone" : '-------' }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <h6><i class="fa-solid fa-road"></i>الشارع و
                                                                                الحي</h6>
                                                                            <p>{{ $order->street_address ? "$order->street_address" : '-------' }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <h6><i class="fa-solid fa-envelopes-bulk"></i>
                                                                                رمز البريد</h6>
                                                                            <p>{{ $order->post_code ? "$order->post_code" : '-------' }}
                                                                            </p>

                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-link text-danger mx-auto my-0 py-1"
                                                                            data-bs-dismiss="modal">إغلاق</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <P>غير متوفر</P>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class=" ps-4 pt-1">
                                                        <a class="cursor-pointer"
                                                            href="{{ route('dashboard.order.show', $order->id) }}">
                                                            <i class="fa-solid fa-eye" style="font-size: 1.8rem;"></i>
                                                        </a>
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
