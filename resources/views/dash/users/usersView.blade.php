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
                                <a href="{{ route('dashboard.user.create') }}" class="btn btn-outline-primary text-lg">إضافة
                                    صفحة جديدة</a>
                            </div>
                        </div>
                        <div class="card-body p-0 pb-2">
                            <div class="table-responsive">
                                <table id="dataTable" class=" table table-head-bg-primary table-striped  table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 100px;">الصورة</th>
                                            <th class="">الإسم</th>
                                            <th class="">بريد إلكتروني</th>
                                            <th class="">عنوان العميل</th>
                                            <th>تاريخ الإنضمام</th>
                                            <th class="w-10">التحكم</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <th>الصورة</th>
                                        <th>الإسم</th>
                                        <th>بريد إلكتروني</th>
                                        <th>عنوان العميل</th>
                                        <th>تاريخ الإنضمام</th>
                                        <th>التحكم</th>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>

                                                <td>
                                                    @if ($user->image)
                                                        <img height="100px" width="100px" src="{{ url($user->image) }}"
                                                            alt="">
                                                    @else
                                                        <P>فارغ</P>
                                                    @endif
                                                </td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if ($user->city || $user->phone || $user->street_address || $user->post_code)
                                                        <button type="button"
                                                            class="btn btn-block .btn-lg btn-outline-info"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-description{{ $user->id }}">العنوان</button>
                                                        <div class="modal fade" id="modal-description{{ $user->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="modal-description{{ $user->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title mx-auto"
                                                                            id="modal-title-default">معلومات عنوان العميل</h6>
                                                                    </div>
                                                                    <div class="modal-body row">
                                                                        <div class="col-lg-3">
                                                                            <h6><i class="fa-solid fa-city"></i> المدينة
                                                                            </h6>
                                                                            <p>{{ $user->city ? "$user->city" : '-------' }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <h6><i class="fa-solid fa-phone"></i> الهاتف
                                                                            </h6>
                                                                            <p>{{ $user->phone ? "$user->phone" : '-------' }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <h6><i class="fa-solid fa-road"></i>الشارع و الحي</h6>
                                                                            <p>{{ $user->street_address ? "$user->street_address" : '-------' }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <h6><i class="fa-solid fa-envelopes-bulk"></i>
                                                                                رمز البريد</h6>
                                                                            <p>{{ $user->post_code ? "$user->post_code" : '-------' }}
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
                                                <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                                <td>
                                                    <div class="dropdown float-start ps-4 pt-1">
                                                        <a class="cursor-pointer" id="dropdownTable"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-wrench" style="font-size: 2.25rem;"></i>
                                                        </a>
                                                        <ul class="dropdown-menu px-2 py-3 me-n4"
                                                            aria-labelledby="dropdownTable">
                                                            <li><a class="dropdown-item border-radius-md text-center text-success"
                                                                    href="{{ route('dashboard.user.edit', $user->id) }}">تعديل</a>
                                                            </li>
                                                            <li>
                                                                <form id="deleteForm{{ $user->id }}"
                                                                    action="{{ route('dashboard.user.destroy', $user->id) }}"
                                                                    method="POST" style="display: inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                                <a class="dropdown-item border-radius-md text-center text-danger"
                                                                    href="#"
                                                                    onclick="confirmAndSubmit({{ $user->id }})">حذف</a>
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
