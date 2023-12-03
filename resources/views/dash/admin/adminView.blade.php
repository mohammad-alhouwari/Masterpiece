@extends('dash.layouts.master')

@section('title', 'المسؤولين')

@section('content')
    <div class="container-fluid py-4">

        <div class="col-12 mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">المسؤولين</h6>
                    <p class="text-sm">جميع المسؤولين</p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        @foreach ($admins as $admin)
                            <div class="col-md-4 mt-4">
                                <div class="card card-profile mt-md-0 mt-5">
                                    <label for="image{{$admin->id}}" id="photo{{$admin->id}}">
                                        <div class="p-3">
                                            <img class="w-100 border-radius-md"
                                                src="{{ url($admin->image ? $admin->image : 'dash/img/admin.jpg') }}">
                                        </div>
                                    </label>

                                    <form role="form text-left" method="POST" enctype="multipart/form-data"
                                        action="{{ route('dashboard.admin.update', $admin->id) }}">
                                        @method('PUT')
                                        @csrf
                                        <input type="file" class="d-none" name="image" id="image{{$admin->id}}" onchange="this.form.submit()">
                                    </form>

                                    <div
                                        class="card-body blur justify-content-center text-center mx-4 mb-0 py-1 border-radius-md">

                                        @if ($admin->sub_role == 0)
                                            <h4 class="mb-0 text-gradient text-primary">{{ $admin->name }}</h4>
                                            <h5 class="mb-0 text-gradient text-primary"><i class="fa-solid fa-crown"></i>
                                            </h5>
                                        @elseif ($admin->sub_role == 1)
                                            <h4 class="mb-0 text-gradient text-success">{{ $admin->name }}</h4>
                                            <h5 class="mb-0 text-gradient text-success"><i
                                                    class="fa-solid fa-diagram-project"></i></h5>
                                        @elseif ($admin->sub_role == 2)
                                            <h4 class="mb-0 text-gradient text-info">{{ $admin->name }}</h4>
                                            <h5 class="mb-0 text-gradient text-info"><i class="fa-solid fa-headset"></i>
                                            </h5>
                                        @endif

                                        <p>{{ $admin->created_at->format('Y-m-d') }}</p>
                                    </div>
                                    <div class="row w-95 mx-auto">
                                        <div class="col-md-4 ">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn bg-gradient-success btn-block mb-0"
                                                data-bs-toggle="modal" data-bs-target="#success{{ $admin->id }}">
                                                المعلومات الأساسية
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="success{{ $admin->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="success{{ $admin->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-0">
                                                            <div class="card card-plain">
                                                                <div class="card-header pb-0 text-left">
                                                                    <h3
                                                                        class="font-weight-bolder text-success text-gradient">
                                                                        المعلومات الأساسية</h3>
                                                                    <p class="mb-0">هنا يمكنك تعديل المعلومات الأساسية
                                                                    </p>
                                                                </div>
                                                                <div class="card-body pb-3">
                                                                    <form role="form text-left" method="POST"
                                                                        action="{{ route('dashboard.admin.update', $admin->id) }}">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <label>الإسم</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control px-4"
                                                                                placeholder="الإسم" aria-label="الإسم"
                                                                                aria-describedby="name-addon" name="name"
                                                                                id="name" value="{{ $admin->name }}">
                                                                        </div>
                                                                        <label>البريد الإلكتروني</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="email" class="form-control px-4"
                                                                                placeholder="البريد الإلكتروني"
                                                                                aria-label="Email"
                                                                                aria-describedby="email-addon"
                                                                                id="email" name="email"
                                                                                value="{{ $admin->email }}">
                                                                        </div>
                                                                        <label>وظيفة المسؤول</label>
                                                                        <div class="input-group mb-3">
                                                                            <select class="form-control px-3" id=""
                                                                                name="sub_role">
                                                                                <option value="0"
                                                                                    {{ $admin->sub_role == 0 ? 'selected' : '' }}>
                                                                                    المسؤول الأساسيي</option>
                                                                                <option value="1"
                                                                                    {{ $admin->sub_role == 1 ? 'selected' : '' }}>
                                                                                    مسؤول المنتجات</option>
                                                                                <option value="2"
                                                                                    {{ $admin->sub_role == 2 ? 'selected' : '' }}>
                                                                                    مسؤول خدمة العملاء</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="text-center">
                                                                            <button type="submit"
                                                                                class="btn bg-gradient-success btn-lg btn-rounded w-100 mt-4 mb-0">عدل
                                                                                المعلومات</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn bg-gradient-info btn-block mb-0"
                                                data-bs-toggle="modal" data-bs-target="#info{{ $admin->id }}">
                                                المعلومات الإضافية
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="info{{ $admin->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="info{{ $admin->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-0">
                                                            <div class="card card-plain">
                                                                <div class="card-header pb-0 text-left">
                                                                    <h3 class="font-weight-bolder text-info text-gradient">
                                                                        المعلومات الإضافية</h3>
                                                                    <p class="mb-0">هنا يمكنك تعديل المعلومات الإضافية
                                                                    </p>
                                                                </div>
                                                                <div class="card-body pb-3">
                                                                    <form role="form text-left" method="POST"
                                                                        action="{{ route('dashboard.admin.update', $admin->id) }}">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <label>المدينة</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text"
                                                                                class="form-control px-4"
                                                                                placeholder="المدينة" aria-label="المدينة"
                                                                                aria-describedby="city" name="city"
                                                                                id="city"
                                                                                value="{{ $admin->city }}">
                                                                        </div>
                                                                        <label>الهاتف</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text"
                                                                                class="form-control px-4"
                                                                                placeholder="الهاتف" aria-label="الهاتف"
                                                                                aria-describedby="phone" name="phone"
                                                                                id="phone"
                                                                                value="{{ $admin->phone }}">
                                                                        </div>
                                                                        <label>الشارع و الحي</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text"
                                                                                class="form-control px-4"
                                                                                placeholder="الشارع و الحي"
                                                                                aria-label="الشارع و الحي"
                                                                                aria-describedby="street_address"
                                                                                name="street_address" id="street_address"
                                                                                value="{{ $admin->street_address }}">
                                                                        </div>
                                                                        <label>رمز البريد</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text"
                                                                                class="form-control px-4"
                                                                                placeholder="رمز البريد"
                                                                                aria-label="رمز البريد"
                                                                                aria-describedby="post_code"
                                                                                id="post_code" name="post_code"
                                                                                value="{{ $admin->post_code }}">
                                                                        </div>

                                                                        <div class="text-center">
                                                                            <button type="submit"
                                                                                class="btn bg-gradient-info btn-lg btn-rounded w-100 mt-4 mb-0">عدل
                                                                                المعلومات</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn bg-gradient-secondary btn-block mb-0"
                                                data-bs-toggle="modal" data-bs-target="#secondary{{ $admin->id }}">
                                                كلمة المرور
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="secondary{{ $admin->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="secondary{{ $admin->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-0">
                                                            <div class="card card-plain">
                                                                <div class="card-header pb-0 text-left">
                                                                    <h3
                                                                        class="font-weight-bolder text-secondary text-gradient">
                                                                        كلمة المرور</h3>
                                                                    <p class="mb-0">هنا يمكنك تعديل المعلومات كلمة المرور
                                                                    </p>
                                                                </div>
                                                                <div class="card-body pb-3">
                                                                    <form role="form text-left" method="POST"
                                                                        action="{{ route('dashboard.admin.update', $admin->id) }}">
                                                                        @method('PUT')
                                                                        @csrf


                                                                        <label for="old_password">كلمة المرور
                                                                            القديمة</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="password"
                                                                                class="form-control px-4"
                                                                                placeholder="كلمة المرور القديمة"
                                                                                aria-label="كلمة المرور القديمة"
                                                                                aria-describedby="name-addon"
                                                                                name="old_password" id="password">
                                                                        </div>

                                                                        <label for="passwordNew">كلمة المرور
                                                                            الجديدة</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="password"
                                                                                class="form-control px-4"
                                                                                placeholder="كلمة المرور الجديدة"
                                                                                aria-label="كلمة المرور الجديدة"
                                                                                aria-describedby="name-addon"
                                                                                name="password" id="passwordNew">
                                                                        </div>

                                                                        <label for="passwordMatch">تأكيد كلمة
                                                                            المرور</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="password"
                                                                                class="form-control px-4"
                                                                                placeholder="تأكيد كلمة المرور"
                                                                                aria-label="تأكيد كلمة المرور"
                                                                                aria-describedby="name-addon"
                                                                                name="password_confirmation"
                                                                                id="passwordMatch">
                                                                        </div>

                                                                        <div class="text-center">
                                                                            <button type="submit"
                                                                                class="btn bg-gradient-secondary btn-lg btn-rounded w-100 mt-4 mb-0">عدل
                                                                                كلمة المرور</button>
                                                                        </div>
                                                                    </form>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row w-90 mx-auto">
                                        <form id="deleteForm{{ $admin->id }}"
                                            action="{{ route('dashboard.admin.destroy', $admin->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button type="submit" class="w-100 btn bg-gradient-danger btn-block my-1"
                                            onclick="confirmAndSubmit({{ $admin->id }})">
                                            حذف المسؤول</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-4 mt-4">
                            <a href="javascrept:;" data-bs-toggle="modal" data-bs-target="#adminAdd"
                                class="card h-100 card-plain border add-category card-body d-flex flex-column justify-content-center text-center text-secondary h4">
                                {{-- <div class="card h-100 card-plain border add-category"> --}}
                                {{-- <div class="card-body d-flex flex-column justify-content-center text-center"> --}}
                                <i class="fa fa-plus mb-3"></i><br>
                                أضف مسؤول
                                {{-- </div> --}}
                                {{-- </div> --}}
                            </a>

                            <div class="modal fade" id="adminAdd" tabindex="-1" role="dialog"
                                aria-labelledby="adminAdd" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="card card-plain">
                                                <div class="card-header pb-0 text-left">
                                                    <h3 class="font-weight-bolder text-primary text-gradient">
                                                        أضف مسؤول جديد</h3>
                                                    <p class="mb-0">هنا يمكنك أضف مسؤول جديد
                                                    </p>
                                                </div>
                                                <div class="card-body pb-3">
                                                    <form role="form text-left" method="post"
                                                        action="{{ route('dashboard.admin.store') }}">
                                                        @csrf

                                                        <label for="name">الإسم</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control px-4"
                                                                placeholder="الإسم" aria-label="الإسم"
                                                                aria-describedby="name-addon" name="name"
                                                                id="name" value="{{ old('name') }}">
                                                        </div>

                                                        <label for="email">البريد الإلكتروني</label>
                                                        <div class="input-group mb-3">
                                                            <input type="email" class="form-control px-4"
                                                                placeholder="البريد الإلكتروني" aria-label="Email"
                                                                aria-describedby="email-addon" id="email"
                                                                name="email" value="{{ old('email') }}">
                                                        </div>
                                                        <label>وظيفة المسؤول</label>
                                                        <div class="input-group mb-3">
                                                            <select class="form-control px-3" id=""
                                                                name="sub_role">
                                                                <option value="2" selected>
                                                                    مسؤول خدمة العملاء</option>
                                                                <option value="1">
                                                                    مسؤول المنتجات</option>
                                                                <option value="0">
                                                                    المسؤول الأساسيي</option>
                                                            </select>
                                                        </div>

                                                        <label for="passwordNew">كلمة المرور</label>
                                                        <div class="input-group mb-3">
                                                            <input type="password" class="form-control px-4"
                                                                placeholder="كلمة المرور" aria-label="كلمة المرور"
                                                                aria-describedby="name-addon" name="password"
                                                                id="passwordNew">
                                                        </div>

                                                        <label for="passwordMatch">تأكيد كلمة المرور</label>
                                                        <div class="input-group mb-3">
                                                            <input type="password" class="form-control px-4"
                                                                placeholder="تأكيد كلمة المرور"
                                                                aria-label="تأكيد كلمة المرور"
                                                                aria-describedby="name-addon" name="password_confirmation"
                                                                id="passwordMatch">
                                                        </div>

                                                        <div class="text-center">
                                                            <button type="submit"
                                                                class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">أضف
                                                                مسؤول جديد</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
