<!DOCTYPE html>
<html lang="{{App::currentLocale()}}" dir="{{App::currentLocale()=='ar' ?'rtl' :'ltr'}}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>in2World</title>
    <meta name="facebook-domain-verification" content="ewdte70anh9c688sdkc2hj4n02ast9" />
    @yield('front_site.css_add')
    <link rel="shortcut icon" href="{{asset('assets/media/logos/in2world_logo.png')}}" />
    <!-- new ahmed to comments -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hamburger-spin-menu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css?ver=1.2') }}">
<body>

    <a href="javascript:void(0)" class="to-top">
        <svg id="Group_9341" data-name="Group 9341" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24">
            <path id="Path_833" data-name="Path 833" d="M0,0H24V24H0Z" fill="none" />
            <line id="Line_21" data-name="Line 21" y2="14" transform="translate(12 5)" fill="none" stroke="#fff"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
            <line id="Line_22" data-name="Line 22" x1="4" y1="4" transform="translate(12 5)" fill="none" stroke="#fff"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
            <line id="Line_23" data-name="Line 23" y1="4" x2="4" transform="translate(8 5)" fill="none" stroke="#fff"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
        </svg>
    </a>

    <header class="container-fluid py-3 px-lg-4" dir="rtl">
        <div class="row align-items-center justify-content-between">
            <a href="{{route('home')}}" class="col-auto">
                <img class="logo" src="{{asset('/imgs/logo.svg')}}" width="180" height="47" alt="Logo In2World">
            </a>
            <div class="col-auto d-flex align-items-center">

                @if (session('locale')=='en')
                <a href="{{URL::current()}}?lang=ar" class="me-3" title="اضغط لتغيير اللغة للعربية">
                    EN
                    <img class="rounded-1" src="{{asset('assets/media/flags/united-states.svg')}}" width="30"
                        height="30" alt="">
                    @else
                    <a href="{{URL::current()}}?lang=en" class="me-3" title="click to change site languge to English">
                        ع
                        <img class="rounded-1" src="{{asset('assets/media/flags/saudi-arabia.svg')}}" width="30"
                            height="30" alt="">
                        @endif

                    </a>
                    <div class="space-button"></div>

            </div>

        </div>
        @if(session('success'))

        <p class="alert alert-success mt-10 fs-4" id="alertSuccess">
            <span class="svg-icon svg-icon-success svg-icon-2x">
                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Code/Done-circle.svg--><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                        <path
                            d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                            fill="#000000" fill-rule="nonzero" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
            {{session('success')}}
            <a class="btn btn-sm btn-icon btn-color-danger" onclick="closeSuccess()">
                <span class="svg-icon svg-icon-danger svg-icon-2x">
                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Close.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                fill="#ff0500">
                                <rect x="0" y="7" width="16" height="2" rx="1" />
                                <rect opacity="0.6"
                                    transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) "
                                    x="0" y="7" width="16" height="2" rx="1" />
                            </g>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </a>
        </p>
        @endif

        @if($errors->any())
        <div class="mb-5" id="alertError">

            <ul class=" alert alert-danger col-12">
                <span class="svg-icon svg-icon-danger svg-icon-2x">
                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Code/Warning-1-circle.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <circle fill="#000000" opacity="0.5" cx="12" cy="12" r="10" />
                            <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1" />
                            <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <a class="btn btn-sm btn-icon btn-color-danger" onclick="closeError()">
                    <span class="svg-icon svg-icon-danger svg-icon-2x">
                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Close.svg--><svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                    fill="#000000">
                                    <rect x="0" y="7" width="16" height="2" rx="1" />
                                    <rect opacity="0.3"
                                        transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) "
                                        x="0" y="7" width="16" height="2" rx="1" />
                                </g>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </a>
                @foreach ($errors->all() as $message)
                <li class="mx-5 fs-6">{{__($message)}}</li>
                @endforeach

            </ul>

        </div>
        @endif
    </header>

    <button class="collapse-menu hamburger hamburger--spin" type="button" dir="rtl">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

    <div class="main-menu d-flex align-content-between flex-wrap">
        <div class="links-pages d-flex flex-column pt-4 pt-lg-5 px-3">
            <a href="{{ route('home') }}" class="mb-2 mt-3  @if(URL::current() == config('url') || URL::current() =='http://127.0.0.1:8000') active  @endif">
                <span>
                    {{ __('Main') }}
                </span>
            </a>
            <a href="{{ route('about') }}" class="mb-4 @if(str_contains(URL::current() , 'about')) active @endif">
                <span>
                    {{ __('Who are we?') }}
                </span>
            </a>
            <a href="{{ route('starredProjects.index') }}" class="mb-4 @if(str_contains(URL::current() , 'starredProjects')) active @endif">
                <span>
                    {{ __('Our Projects') }}

                </span>
            </a>
            <a href="{{ route('contentBlogs.index') }}" class="mb-4 @if(str_contains(URL::current() , 'contentBlogs')) active @endif">
                <span>
                    {{ __('Our Blogs') }}

                </span>
            </a>

            <a href="{{ route('message.create') }}" class="mb-4 @if(str_contains(URL::current() , 'message')) active @endif">
                <span>
                    {{ __('Call us') }}

                </span>
            </a>
            <a href="{{ route('servicRequest.create') }}" class="mb-4 @if(str_contains(URL::current() , 'serviceRequest')) active @endif">
                <span>
                    {{ __('Request a service') }}
                </span>
            </a>
        </div>
        @if(Auth::check())
        <div class="p-4">
            <hr>
            <h5 style="color:green ;">{{__('you are loged in as')}}{{Auth::user()->name}}</h5>
            <div class="input my-4 d-flex">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="py-2 btn btn-danger">
                        {{__('Sign Out')}}
                    </button>
                </form>
            </div>
        </div>
        @else


        <form action="{{route('login')}}" class="px-2" method="post">
            @csrf
            <h4 >{{__('Login to your account')}}</h4>
            <div class="input my-4 ">
                <input class=" flex-grow-1" type="email" name="email" placeholder="{{__('your eamil')}}">
                <input class=" flex-grow-2" type="password" name="password" placeholder="{{__('your password')}}">
                <button type="submit" class="">
                    {{__('login')}}
                </button>
            </div>
            <label>{{__('you don\'t have an account?')}}<button type="button" class="btn btn-primary"
                    data-toggle="modal" data-target="#sign_up_modal">
                    {{__('Sign up')}}
                </button></label>

        </form>
        @endif
        <div class="links-social d-flex align-items-center justify-content-between p-4">
            <a target="_blank" href="https://www.behance.net/in2worldcompany/">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.358" height="14.033" viewBox="0 0 22.358 14.033">
                    <path id="behance"
                        d="M9.005,81.68a2.946,2.946,0,0,0,1.879-2.872c0-2.74-2.042-3.408-4.4-3.408H0V89.156H6.669c2.5,0,4.848-1.2,4.848-3.994A3.315,3.315,0,0,0,9.005,81.68ZM3.024,77.748H5.861c1.091,0,2.073.307,2.073,1.572,0,1.168-.765,1.638-1.844,1.638H3.024ZM6.257,86.82H3.024V83.031h3.3c1.331,0,2.174.555,2.174,1.964C8.493,86.385,7.488,86.82,6.257,86.82Zm13.915-9.343H14.6V76.122h5.578Zm2.185,6.843c0-2.946-1.723-5.4-4.848-5.4a5,5,0,0,0-5.1,5.271,4.852,4.852,0,0,0,5.1,5.228,4.441,4.441,0,0,0,4.662-3.35H19.757a2.266,2.266,0,0,1-2.162,1.3,2.252,2.252,0,0,1-2.445-2.535h7.185c.011-.165.023-.339.023-.514Zm-7.2-1.211a2.138,2.138,0,0,1,2.271-2.127,2.039,2.039,0,0,1,2.181,2.127Z"
                        transform="translate(0 -75.4)" fill="#999999" />
                </svg>
            </a>
            <a href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="16.142" height="16.142" viewBox="0 0 16.142 16.142">
                    <path id="dribbble"
                        d="M16.071,8a8.071,8.071,0,1,0,8.071,8.071A8.071,8.071,0,0,0,16.071,8Zm5.336,3.722a6.861,6.861,0,0,1,1.557,4.294,16.109,16.109,0,0,0-4.8-.222c-.187-.457-.364-.859-.606-1.354a9.183,9.183,0,0,0,3.848-2.718Zm-.766-.8a7.783,7.783,0,0,1-3.613,2.49,36.8,36.8,0,0,0-2.572-4.036,6.876,6.876,0,0,1,6.184,1.549Zm-7.5-1.082A43.985,43.985,0,0,1,15.7,13.829a25.713,25.713,0,0,1-6.373.84A6.919,6.919,0,0,1,13.14,9.843ZM9.177,16.081V15.87a25.429,25.429,0,0,0,7.085-.981c.2.386.386.778.559,1.17a10.678,10.678,0,0,0-5.875,4.631,6.866,6.866,0,0,1-1.769-4.609Zm2.662,5.438a9.7,9.7,0,0,1,5.453-4.32,28.654,28.654,0,0,1,1.471,5.228,6.879,6.879,0,0,1-6.924-.908Zm8.083.276a29.753,29.753,0,0,0-1.339-4.915,10.118,10.118,0,0,1,4.294.3A6.906,6.906,0,0,1,19.922,21.8Z"
                        transform="translate(-8 -8)" fill="#999999" />
                </svg>
            </a>
            <a href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.391" height="15.038" viewBox="0 0 17.391 15.038">
                    <path id="vimeo-v"
                        d="M17.382,67.592q-.116,2.539-3.548,6.952-3.546,4.611-6,4.611-1.52,0-2.573-2.806C3.893,71.334,3.311,68.4,2.181,68.4a5.417,5.417,0,0,0-1.366.819L0,68.159c2-1.758,3.917-3.715,5.116-3.823q2.032-.2,2.5,2.775c1.114,7.045,1.607,8.109,3.633,4.918A6.853,6.853,0,0,0,12.421,69.4c.186-1.782-1.39-1.661-2.457-1.2q1.281-4.2,4.9-4.08,2.667.07,2.519,3.47Z"
                        transform="translate(0 -64.117)" fill="#999999" />
                </svg>
            </a>
            <a target="_blank" href="https://www.instagram.com/in2worldnet/?igshid=NDBlY2NjN2I%3D">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.4" height="17.396" viewBox="0 0 17.4 17.396">
                    <path id="instagram"
                        d="M8.627,36.063a4.453,4.453,0,1,0,3.156,1.3,4.46,4.46,0,0,0-3.156-1.3Zm0,7.359a2.9,2.9,0,1,1,2.9-2.9,2.9,2.9,0,0,1-2.9,2.9ZM14.31,35.88a1.04,1.04,0,1,1-.3-.736,1.04,1.04,0,0,1,.3.736Zm2.954,1.056a5.148,5.148,0,0,0-1.405-3.645,5.182,5.182,0,0,0-3.645-1.405c-1.436-.082-5.741-.082-7.177,0a5.174,5.174,0,0,0-3.645,1.4A5.165,5.165,0,0,0-.014,36.932c-.082,1.436-.082,5.741,0,7.177a5.148,5.148,0,0,0,1.405,3.645,5.188,5.188,0,0,0,3.645,1.405c1.436.082,5.741.082,7.177,0a5.148,5.148,0,0,0,3.645-1.4,5.182,5.182,0,0,0,1.405-3.645c.082-1.436.082-5.737,0-7.173ZM15.408,45.65a2.936,2.936,0,0,1-1.654,1.65c-1.145.454-3.862.349-5.128.349s-3.986.1-5.128-.349a2.936,2.936,0,0,1-1.653-1.65c-.454-1.145-.349-3.862-.349-5.128s-.1-3.986.349-5.128A2.936,2.936,0,0,1,3.5,33.742c1.145-.454,3.862-.349,5.128-.349s3.986-.1,5.128.349A2.936,2.936,0,0,1,15.408,35.4c.454,1.145.349,3.862.349,5.128S15.862,44.509,15.408,45.65Z"
                        transform="translate(0.076 -31.825)" fill="#999999" />
                </svg>
            </a>
            <a target="_blank" href="https://www.linkedin.com/company/in2world/about/">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.413" height="17.394" viewBox="0 0 17.413 17.394">
                    <path id="linkedin-in"
                        d="M3.892,17.4H.287V5.789h3.6ZM2.088,4.206A2.1,2.1,0,1,1,4.176,2.1,2.1,2.1,0,0,1,2.088,4.206ZM17.386,17.4h-3.6V11.747c0-1.347-.027-3.074-1.874-3.074-1.874,0-2.162,1.463-2.162,2.977V17.4H6.15V5.789H9.608V7.373h.05A3.788,3.788,0,0,1,13.07,5.5c3.649,0,4.319,2.4,4.319,5.523V17.4Z"
                        transform="translate(0.024 -0.006)" fill="#999999" />
                </svg>
            </a>
            <a target="_blank" href="https://www.facebook.com/In2WorldNet/">
                <svg xmlns="http://www.w3.org/2000/svg" width="10.644" height="19.877" viewBox="0 0 10.644 19.877">
                    <path id="facebook-f"
                        d="M32.837,11.179l.552-3.6H29.937V5.248a1.8,1.8,0,0,1,2.028-1.943h1.569V.243A19.133,19.133,0,0,0,30.749,0c-2.842,0-4.7,1.723-4.7,4.841V7.582H22.89v3.6h3.159v8.695h3.888v-8.7Z"
                        transform="translate(-22.89)" fill="#999999" />
                </svg>
            </a>
            <a target="_blank" href="https://twitter.com/in2worldnet?s=21&t=1wNvUutlGZ46AYA_DCnmUg">
                <svg xmlns="http://www.w3.org/2000/svg" width="19.874" height="16.148" viewBox="0 0 19.874 16.148">
                    <path id="twitter"
                        d="M17.831,52.1c.013.177.013.353.013.53A11.509,11.509,0,0,1,6.255,64.223,11.51,11.51,0,0,1,0,62.4a8.425,8.425,0,0,0,.984.05A8.157,8.157,0,0,0,6.04,60.7a4.08,4.08,0,0,1-3.808-2.82A5.137,5.137,0,0,0,3,57.943,4.308,4.308,0,0,0,4.073,57.8a4.074,4.074,0,0,1-3.266-4v-.05a4.1,4.1,0,0,0,1.841.517,4.079,4.079,0,0,1-1.261-5.448,11.578,11.578,0,0,0,8.4,4.262,4.6,4.6,0,0,1-.1-.933,4.077,4.077,0,0,1,7.049-2.787,8.019,8.019,0,0,0,2.585-.984,4.062,4.062,0,0,1-1.791,2.245A8.166,8.166,0,0,0,19.874,50,8.756,8.756,0,0,1,17.831,52.1Z"
                        transform="translate(0 -48.075)" fill="#999999" />
                </svg>
            </a>
        </div>
    </div>
    <span class="over-main-menu"></span>
    <!--begin::Modal Sign up-->
    <div class="modal fade" id="sign_up_modal" tabindex="-1" style="display: none;" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h4>{{__('Sign up')}}</h4>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </button>
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-3">
                    <!--begin::Form-->
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{route('register')}}"
                        method="post">
                        @csrf
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-1 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-2 fw-bold form-label mb-1">
                                <span class="required">{{__('name')}}</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" required class="form-control form-control-solid"
                                placeholder="{{__('Enter your name')}}" name="name">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-1 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class=" fs-2 fw-bold form-label mb-1">{{__('email')}}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="email" required class="form-control form-control-solid"
                                    placeholder="{{__('Enter your email')}}" name="email">
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-1 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-2 fw-bold form-label mb-1">
                                <span class="required">{{__('password')}}</span>
                            </label>
                            <!--end::Label-->
                            <input type="password" required class="form-control form-control-solid"
                                placeholder="{{__('Enter password')}}" name="password">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-1 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-2 fw-bold form-label mb-1">
                                <span class="required">{{__('confirm password')}}</span>
                            </label>
                            <!--end::Label-->
                            <input type="password" required class="form-control form-control-solid"
                                placeholder="{{__('cofirm your password')}}" name="password_confirmation">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel"
                                class="btn btn-light me-3">{{__('Discard')}}</button>
                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">{{__('save')}}</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                        <div></div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal Sign up-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
</script>