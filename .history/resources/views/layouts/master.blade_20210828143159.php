<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{asset('admin-panel/main.css')}}" rel="stylesheet">
    <link href="{{asset('admin-panel/editor.css')}}" type="text/css" rel="stylesheet"/>
    
	{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}

    @yield('css')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo"><img src="{{asset('landing-page/assets/img/smkwd.png')}}" alt="" width="50">
                </div>
                
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group dropdown">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle fa fa-user" src="" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"> </i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            {{-- <div tabindex="-1" class="dropdown-divider"></div> --}}
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
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

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            @if((auth()->user()->role_name == "admin"))
                            <li class="app-sidebar__heading">Dashboard</li>
                            <li>
                                <a href="{{url('/home')}}" class="mm-active">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Menu</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-pen"></i>
                                    Ujian / Tes
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="" href="#" data-toggle="modal" data-target="#modalForAddCourse">
                                            <i class="metismenu-icon"></i>
                                            Kelola Nama Ujian
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('manage-exam')}}">
                                            <i class="metismenu-icon"></i>
                                            Kelola Data Ujian
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('exam-report')}}">
                                            <i class="metismenu-icon">
                                            </i>Laporan Hasil
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    <i class="metismenu-icon pe-7s-ribbon"></i>
                                    Pendaftaran
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('/register')}}">
                                            <i class="metismenu-icon">
                                            </i>Data Pendaftar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('/announcement')}}">
                                    <i class="metismenu-icon pe-7s-volume"></i>
                                    Pengaturan Pengumuman
                                </a>

                            </li>
                            @else
                            <li class="app-sidebar__heading">Dashboard</li>
                            <li>
                                <a href="{{url('/home')}}" class="mm">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Menu Siswa</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-id"></i>
                                    Biodata
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{route('biodata')}}">
                                            <i class="metismenu-icon">
                                            </i>Biodata Saya
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('list-exam')}}">
                                    <i class="metismenu-icon pe-7s-pen"></i>
                                    Ujian/Tes
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>

            </div>
        </div>
    </div>
    @include('admin.modal')
    <script type="text/javascript" src="{{asset('admin-panel/assets/scripts/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin-panel/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin-panel/js/myjs.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin-panel/js/ajax.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin-panel/js/sweetalert.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin-panel/js/facebox.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin-panel/js/ckeditor/ckeditor.js')}}"></script>

    @yield('custom_js')

    


</body>

</html>