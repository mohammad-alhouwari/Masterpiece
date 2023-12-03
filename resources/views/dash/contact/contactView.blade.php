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
                                            <th>رقم الإستفسار</th>
                                            <th>الإسم</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>الموضوع</th>
                                            <th>تاريخ الإستفسار</th>
                                            <th>الإستفسار</th>
                                            <th class="w-10">الرد</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>رقم الإستفسار</th>
                                            <th>الإسم</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>الموضوع</th>
                                            <th>تاريخ الإستفسار</th>
                                            <th>الإستفسار</th>
                                            <th class="w-10">الرد</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($Inquiries as $Inquiry)
                                            <tr>
                                                <td>{{ $Inquiry->id }}</td>
                                                <td>{{ $Inquiry->name }}</td>
                                                <td>{{ $Inquiry->email }}</td>
                                                <td>{{ $Inquiry->created_at->format('Y-m-d') }}</td>
                                                <td>{{ $Inquiry->subject }}</td>
                                                <td><button type="button"
                                                        class="btn btn-block .btn-lg btn-outline-info mb-0 py-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-Inquiry{{ $Inquiry->id }}">الإستفسار</button>
                                                    <div class="modal fade" id="modal-Inquiry{{ $Inquiry->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="modal-Inquiry{{ $Inquiry->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title mx-auto"
                                                                        id="modal-title-default"><i class="fa-solid fa-envelope"></i> الإستفسار <i class="fa-solid fa-envelope"></i>
                                                                    </h6>
                                                                </div>
                                                                <div class="modal-body text-center">
                                                                    <p>{{ $Inquiry->message ? "$Inquiry->message" : '-------' }}
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
                                                <td>
                                                    <div class=" ps-4 pt-1">
                                                        <a class="cursor-pointer" href="mailto:{{ $Inquiry->email }}">
                                                            <i class="fa-regular fa-paper-plane"
                                                                style="font-size: 1.8rem;"></i>
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
