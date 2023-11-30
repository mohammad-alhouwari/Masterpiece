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
            <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html"
                target="_blank">
                <img src="{{ asset('dash/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="me-1 font-weight-bold">Soft UI Dashboard</span>
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

                {{-- <li class="nav-item">
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
                </li> --}}



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
                                <a class="nav-link {{ set_active(['dashboard.general.about.*']) }}" data-bs-toggle="collapse" aria-expanded="false"
                                    href="#nav-itemAbout">
                                    <span class="sidenav-mini-icon"><i class="fa-regular fa-address-book"></i></span>
                                    <span class="sidenav-normal">معلوموات من نحن <b class="caret"></b></span>
                                </a>
                                <div class="collapse {{ set_show(['dashboard.general.about.*']) }}" id="nav-itemAbout">
                                    <ul class="nav nav-sm flex-column pe-3">
                                        <li class="nav-item">
                                            <a class="nav-link {{ set_active(['dashboard.general.about.index']) }}" href="{{route('dashboard.general.about.index')}}">
                                                <span class="sidenav-mini-icon text-xs"><i class="fa-regular fa-eye"></i></span>
                                                <span class="sidenav-normal">من نحن كل البيانات</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ set_active(['dashboard.general.about.create']) }}" href="{{route('dashboard.general.about.create')}}">
                                                <span class="sidenav-mini-icon text-xs"><i class="fa-solid fa-circle-plus"></i></span>
                                                <span class="sidenav-normal">إضافة من نحن</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>






















                {{-- <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link {{ set_active(['dashboard.category.*']) }} collapsed"
                        aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  ms-2">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <span class="nav-link-text ms-1">فئات المنتجات</span>
                    </a>
                    <div class="collapse show" id="dashboardsExamples" style="">
                        <ul class="nav ms-4 ps-3">
                            <li class="nav-item active">
                                <a class="nav-link active" href="../../pages/dashboards/default.html">
                                    <span class="sidenav-mini-icon"> D </span>
                                    <span class="sidenav-normal"> Default </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="../../pages/dashboards/automotive.html">
                                    <span class="sidenav-mini-icon"> A </span>
                                    <span class="sidenav-normal"> Automotive </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="../../pages/dashboards/smart-home.html">
                                    <span class="sidenav-mini-icon"> S </span>
                                    <span class="sidenav-normal"> Smart Home </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false"
                                    href="#vrExamples">
                                    <span class="sidenav-mini-icon"> V </span>
                                    <span class="sidenav-normal"> Virtual Reality <b class="caret"></b></span>
                                </a>
                                <div class="collapse " id="vrExamples">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="../../pages/dashboards/vr/vr-default.html">
                                                <span class="sidenav-mini-icon text-xs"> V </span>
                                                <span class="sidenav-normal"> VR Default </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="../../pages/dashboards/vr/vr-info.html">
                                                <span class="sidenav-mini-icon text-xs"> V </span>
                                                <span class="sidenav-normal"> VR Info </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="../../pages/dashboards/crm.html">
                                    <span class="sidenav-mini-icon"> C </span>
                                    <span class="sidenav-normal"> CRM </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

































            </ul>
        </div>
        {{-- <div class="sidenav-footer mx-3 ">
            <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
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
                        <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard"
                            target="_blank" class="btn btn-white btn-sm w-100 mb-0">توثيق</a>
                    </div>
                </div>
            </div>
            <a class="btn bg-gradient-primary mt-4 w-100"
                href="https://www.creative-tim.com/product/soft-ui-dashboard-pro?ref=sidebarfree"
                type="button">Upgrade
                to pro</a>
        </div> --}}
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
                        <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark"
                                href="javascript:;">لوحات القيادة</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">RTL</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">RTL</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="أكتب هنا...">
                        </div>
                    </div>
                    <ul class="navbar-nav me-auto ms-0 justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">يسجل دخول</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown ps-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('dash/img/team-2.jpg') }}"
                                                    class="avatar avatar-sm  ms-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('dash/img/small-logos/logo-spotify.svg') }}"
                                                    class="avatar avatar-sm bg-gradient-dark  ms-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  ms-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
