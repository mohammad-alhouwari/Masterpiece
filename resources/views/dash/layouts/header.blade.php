<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dash/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('dash/img/favicon.png') }}">
    <title>
        @yield('title')
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('dash/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('dash/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('dash/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('dash/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('dash/css/custom.css') }}" rel="stylesheet" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css'>
</head>

<body class="g-sidenav-show rtl bg-gray-100">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute start-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{ route('dashboard') }}" target="_blank">
                <img src="{{ asset('dash/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="me-1 font-weight-bold">إسلاميات</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse px-0 w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ set_active(['dashboard']) }}" href="{{ route('dashboard') }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-mosque"></i>
                        </div>
                        <span class="nav-link-text me-1">لوحة القيادة</span>
                    </a>
                </li>


                @if (Auth::user()->sub_role == 0)
                    <li class="nav-item ">
                        <a class="nav-link {{ set_active(['dashboard.admin.*']) }}"
                            href="{{ route('dashboard.admin.index') }}">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <span class="nav-link-text me-1">المسؤولين</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ set_active(['dashboard.user.*']) }}"
                            href="{{ route('dashboard.user.index') }}">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center ms-2 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <span class="nav-link-text me-1">العملاء</span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->sub_role <= 1)
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#dashboardsCategory"
                            class="nav-link {{ set_active(['dashboard.category.*']) }} collapsed"
                            aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  ms-2">
                                <i class="fa-solid fa-boxes-stacked"></i>
                            </div>
                            <span class="nav-link-text ms-1">فئات المنتجات</span>
                        </a>
                        <div class="collapse {{ set_show(['dashboard.category.*']) }}" id="dashboardsCategory"
                            style="">
                            <ul class="nav ms-4 ps-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ set_active(['dashboard.category.index']) }}"
                                        href="{{ route('dashboard.category.index') }}">
                                        <span class="sidenav-mini-icon"><i class="fa-regular fa-eye"></i></span>
                                        <span class="sidenav-normal">جميع الفئات</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link {{ set_active(['dashboard.category.create']) }}"
                                        href="{{ route('dashboard.category.create') }}">
                                        <span class="sidenav-mini-icon"><i class="fa-solid fa-circle-plus"></i></span>
                                        <span class="sidenav-normal">إضافة فئة جديدة</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#dashboardsProduct"
                            class="nav-link {{ set_active(['dashboard.product.*']) }} collapsed"
                            aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  ms-2">
                                <i class="fa-solid fa-box"></i>
                            </div>
                            <span class="nav-link-text ms-1">المنتجات</span>
                        </a>
                        <div class="collapse {{ set_show(['dashboard.product.*']) }}" id="dashboardsProduct"
                            style="">
                            <ul class="nav ms-4 ps-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ set_active(['dashboard.product.index']) }}"
                                        href="{{ route('dashboard.product.index') }}">
                                        <span class="sidenav-mini-icon"><i class="fa-regular fa-eye"></i></span>
                                        <span class="sidenav-normal">جميع المنتجات</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link {{ set_active(['dashboard.product.create']) }}"
                                        href="{{ route('dashboard.product.create') }}">
                                        <span class="sidenav-mini-icon"><i class="fa-solid fa-circle-plus"></i></span>
                                        <span class="sidenav-normal">إضافة منتجات جديدة</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                                    <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#dashboardsGeneral"
                        class="nav-link {{ set_active(['dashboard.general.*']) }} collapsed"
                        aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  ms-2">
                            <i class="fa-regular fa-address-book"></i>
                        </div>
                        <span class="nav-link-text ms-1">معلومات الموقع</span>
                    </a>
                    <div class="collapse {{ set_show(['dashboard.general.*']) }}" id="dashboardsGeneral"
                        style="">
                        <ul class="nav ms-4 ps-3">

                            <li class="nav-item ">
                                <a class="nav-link {{ set_active(['dashboard.general.about.*']) }}"
                                    data-bs-toggle="collapse" aria-expanded="false" href="#nav-itemAbout">
                                    <span class="sidenav-mini-icon"><i class="fa-regular fa-address-book"></i></span>
                                    <span class="sidenav-normal">معلوموات من نحن <b class="caret"></b></span>
                                </a>
                                <div class="collapse {{ set_show(['dashboard.general.about.*']) }}"
                                    id="nav-itemAbout">
                                    <ul class="nav nav-sm flex-column pe-3">
                                        <li class="nav-item">
                                            <a class="nav-link {{ set_active(['dashboard.general.about.index']) }}"
                                                href="{{ route('dashboard.general.about.index') }}">
                                                <span class="sidenav-mini-icon text-xs"><i
                                                        class="fa-regular fa-eye"></i></span>
                                                <span class="sidenav-normal">من نحن كل البيانات</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ set_active(['dashboard.general.about.create']) }}"
                                                href="{{ route('dashboard.general.about.create') }}">
                                                <span class="sidenav-mini-icon text-xs"><i
                                                        class="fa-solid fa-circle-plus"></i></span>
                                                <span class="sidenav-normal">إضافة من نحن</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>

                @endif

                @if (Auth::user()->sub_role == 0 || Auth::user()->sub_role == 2)

                <li class="nav-item ">
                    <a class="nav-link {{ set_active(['dashboard.order.*']) }}"
                        href="{{ route('dashboard.order.index') }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                        <span class="nav-link-text me-1">الطلبات</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ set_active(['dashboard.contact.*']) }}"
                        href="{{ route('dashboard.contact.index') }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <span class="nav-link-text me-1">الإستفسارات</span>
                    </a>
                </li>

                @endif



                <li class="sidenav-footer mx-3 mt-5">
                    <div class="card card-background shadow-none card-background-mask-warning" id="sidenavCard">
                        <div class="full-background"
                            style="background-image: url('{{ asset('dash/img/curved-images/white-curved.jpeg') }}">
                        </div>
                        <div class="card-body text-start p-3 w-100">
                            <div
                                class="icon icon-shape icon-md bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                                <i class="ni ni-istanbul text-dark text-gradient text-lg top-0" aria-hidden="true"
                                    id="sidenavCardIcon"></i>
                            </div>
                            <div class="docs-info">
                                <h6 class="text-white up mb-0 text-end">زيارة الموقع الأساسي</h6>
                                {{-- <p class="text-xs font-weight-bold text-end">زيارة الموقع الأساسي</p> --}}
                                <a href="{{ route('home') }}" target="_blank"
                                    class="btn btn-white btn-sm w-100 mb-0">الذهاب</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="copyright text-center text-sm text-muted text-lg-end">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        إنتاج <i class="fa fa-heart"></i> 
                        <a href="https://github.com/mohammad-alhouwari" class="font-weight-bold" target="_blank">محمد الحواري</a>
                    </div>
                </li>






















            </ul>
        </div>
        {{-- <div class="sidenav-footer mx-3 ">
            <div class="card card-background shadow-none card-background-mask-warning" id="sidenavCard">
                <div class="full-background"
                    style="background-image: url('{{ asset('dash/img/curved-images/white-curved.jpeg') }}"></div>
                <div class="card-body text-start p-3 w-100">
                    <div
                        class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                        <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true"
                            id="sidenavCardIcon"></i>
                    </div>
                    <div class="docs-info">
                        <h6 class="text-white up mb-0 text-end">تحتاج مساعدة?</h6>
                        <p class="text-xs font-weight-bold text-end">يرجى التحقق من مستنداتنا</p>
                        <a href="#" target="_blank" class="btn btn-white btn-sm w-100 mb-0">توثيق</a>
                    </div>
                </div>
            </div>
        </div> --}}
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
                        <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark"
                                href="javascript:;">لوحات القيادة</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">RTL</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">RTL</h6>
                </nav> --}}
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
                    {{-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="أكتب هنا...">
                        </div>
                    </div> --}}
                    <ul class="navbar-nav me-auto ms-0 justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">يسجل دخول</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
