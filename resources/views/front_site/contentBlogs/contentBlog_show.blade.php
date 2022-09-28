@extends('front_site.repeat.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/b5c02635a2.js" crossorigin="anonymous"></script>


<div class="container-fluid hero-bg-img d-flex align-items-center justify-content-center">
    <div>
        <h1 class="mb-4 px-5">
            {{$contentBlog->name}}

        </h1>
        <ol class="breadcrumb d-flex" style="background:none ;">
            <li>
                <a href="{{route('home')}}">
                    {{__('Main')}}
                </a>
            </li>
            <li>

                <a href="{{route('contentBlogs.index')}}">
                    {{__('Blog')}}
                </a>
            </li>
            <li>
                <a href="">
                    {{$contentBlog->name}}
                </a>
                <input type="hidden" hidden name="id" value="{{$contentBlog->id}}">
            </li>
        </ol>
    </div>
    <img class="right" src="{{asset('imgs/shape-right-bg-hero.svg')}}" width="100" height="100" alt="Shape Hero">
    <img class="left" src="{{asset('imgs/shape-left-bg-hero.svg')}}" width="100" height="100" alt="Shape Hero">
</div>

<div class="container-fluid py-5">

    <div class="container mb-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto col-12">
                <div class="time-categroy-article d-inline-flex align-items-center">
                    <a href="" class="me-4 d-inline-flex align-items-center">
                        <i class="d-inline-flex align-items-center me-2">
                            <img src="{{asset('imgs/icon-time.svg')}}" width="16" height="16" alt="">
                        </i>
                        <span>
                            {{$contentBlog->created_at->diffForHumans()}}
                        </span>
                    </a>
                    <a href="" class="d-inline-flex align-items-center">
                        <i class="d-inline-flex align-items-center me-2">
                            <img src="{{asset('imgs/icon-folder.svg')}}" width="16" height="16" alt="">
                        </i>
                        <span>
                            {{$contentBlog->details}}
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="container content-article">
        <div class="row">

            <div class="result-ck-editor">

                <figure class="image ck-widget image-style-side ck-widget_selected" contenteditable="false">
                    <img src="/storage/{{$contentBlog->images[0]->src}}"
                        alt="A lone wanderer looking at Mount Bromo volcano in Indonesia." sizes="100vw">
                    <div class="ck ck-reset_all ck-widget__type-around">
                        <div class="ck ck-widget__type-around__button ck-widget__type-around__button_before"
                            title="Insert paragraph before block"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 10 8">
                                <path d="M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038"></path>
                            </svg></div>
                        <div class="ck ck-widget__type-around__button ck-widget__type-around__button_after"
                            title="Insert paragraph after block"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 10 8">
                                <path d="M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038"></path>
                            </svg></div>
                        <div class="ck ck-widget__type-around__fake-caret"></div>
                    </div>
                </figure>
                {!!$contentBlog->content!!}
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row align-items-end justify-content-between align-items-end">
            <div class="col-md-8 col-12">
                <div class="words-tag">
                    <h6 class="mb-3">{{__('Keywords')}}</h6>
                    <div class="d-flex flex-wrap">
                        @php $keywords=explode(',', $contentBlog->keywords); @endphp
                        @foreach($keywords as $keyword)
                        <a>{{$keyword}} </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="d-flex align-items-center m-5">
        <button id="like" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4"
            data-kt-stepper-action="submit" @if($status=='like' || !Auth::check() )disabled @endif>
            <i class="fa-solid fa-thumbs-up fa-2xl px-2" style="color: blue;"></i><label><span
                    id="likes_count">{{$contentBlog->likes}} </span> Likes</label>
        </button>
        <button id="disLike" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2"
            data-kt-stepper-action="submit" @if($status=='disLike' || !Auth::check() )disabled @endif>
            <i class="fa-solid fa-thumbs-down fa-2xl  px-2"></i> <label><span
                    id="disLikes_count">{{$contentBlog->disLikes}} </span> disLikes</label>
        </button>
        @if(!Auth::check() )
        <div class="alert alert-warning">
        {{__('You must be logged in to be able to interact with blogs')}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#log_in_modal">
                {{__('Login')}}
            </button> {{__('OR')}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sign_up_modal">
                {{__('Sign up')}}
            </button>
        
        </div>
        @endif
    </div>

    <!-- 
    <div class="px-5" dir="ltr" id="likeSection">
        <div class="border col-2 rounded-pill " style="background-color:#f7d6e6 ;">

            <button id="like" type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="submit"
                @if($status=='like' )disabled @endif>
                <span class="svg-icon">
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px"
                        height="40px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z"
                                fill="#ff0000" fill-rule="nonzero" />
                        </g>
                    </svg>
                </span>
            </button>
            <label><span id="likes_count">{{$contentBlog->likes}} </span> Likes</label>
            <button id="disLike" type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="submit"
                @if($status=='disLike' )disabled @endif>
                <span class="svg-icon">
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px"
                        height="40px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                </span>
            </button>
            <label><span id="disLikes_count">{{$contentBlog->disLikes}} </span> disLikes</label>
        </div>
        
    </div>-->
</div>

<div class="px-5" dir="ltr" id="comment">
    @comments(['model' => $contentBlog])
</div>


@if($relatedBlogs->count()>0)
<div class="container-fluid our-articales py-4 py-lg-5 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-center justify-content-between">
                <div class="wow fadeInRight" data-wow-duration="1s">
                    <h2 class="title-sec">
                        {{__('Related Blogs')}}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($relatedBlogs as $relatedBlog)

            <div class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                <a class="link-article" href="{{route('contentBlog.show',['id'=>$relatedBlog->id ,'name'=>$relatedBlog->name])}}">
                    <div class="img">
                        <img src="/storage/{{$relatedBlog->images[0]->src}}" width="100" height="100" alt="">
                        <span class="type">{{$relatedBlog->details}}</span>
                    </div>

                    <h5 class="mt-3">
                        <span>{{$relatedBlog->name}}</span>
                        <p class="d-flex align-items-center mt-3">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="15.036" height="15.036"
                                viewBox="0 0 15.036 15.036">
                                <path id="Icon_material-access-time" data-name="Icon material-access-time"
                                    d="M10.51,3a7.518,7.518,0,1,0,7.525,7.518A7.514,7.514,0,0,0,10.51,3Zm.008,13.532a6.014,6.014,0,1,1,6.014-6.014A6.013,6.013,0,0,1,10.518,16.532Zm.376-9.773H9.766V11.27l3.947,2.368.564-.925-3.383-2.007Z"
                                    transform="translate(-3 -3)" fill="#a2a2a2" />
                            </svg>
                            <span>{{$relatedBlog->created_at->diffForHumans()}}</span>
                        </p>
                    </h5>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endif
<x-speak></x-speak>




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
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black"></rect>
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
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{route('register')}}" method="post">
                    @csrf
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-1 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-2 fw-bold form-label mb-1">
                            <span class="required">{{__('name')}}</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" required class="form-control form-control-solid"
                            placeholder="{{__('Enter your name')}}" name="name" >
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
                                placeholder="{{__('Enter your email')}}" name="email" >
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
                            placeholder="{{__('Enter password')}}" name="password" >
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
                            placeholder="{{__('cofirm your password')}}" name="password_confirmation" >
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

<!-- ****** -->

<!--begin::Modal Login -->
<div class="modal fade" id="log_in_modal" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h4>{{__('Login')}}</h4>
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
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </button>
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body mx-3">
                <!--begin::Form-->
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{route('login')}}" method="post">
                    @csrf
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-1 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-2 fw-bold form-label mb-1">
                            <span class="required">{{__('email')}}</span>
                        </label>
                        <!--end::Label-->
                        <input type="email" required class="form-control form-control-solid"
                            placeholder="{{__('Enter your email')}}" name="email">
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
                            placeholder="{{__('Enter your password')}}" name="password">
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
<!--end::Modal Login-->








<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$.ajaxSetup({
    headers: {}
});
$("#like").click(function(e) {
    e.preventDefault();
    var id = $("input[name=id]").val();
    $.ajax({
        type: 'POST',
        url: "{{ route('contentBlog.like') }}",
        data: {
            userID: '{{Auth::id()}}',
            id: id,
            type: 'like',
            _token: '{{csrf_token()}}'
        },
        success: function(data) {
            // alert();
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: data.success,
                showConfirmButton: false,
                timer: 1000
            })
        },
        error: (error) => {
            console.log(JSON.stringify(error));
        }
    });

    var likes = document.getElementById("likes_count").textContent;
    console.log(likes);
    var disLike = document.getElementById("disLikes_count").textContent;
    document.getElementById("likes_count").textContent = parseInt(likes) + 1;
    if (document.getElementById('like').disabled || document.getElementById('disLike').disabled) {
        document.getElementById("disLikes_count").textContent = parseInt(disLike) - 1;
    }
    document.getElementById('disLike').disabled = false;
    document.getElementById('like').disabled = true;
});
$.ajaxSetup({
    headers: {}
});
$("#disLike").click(function(e) {
    e.preventDefault();
    var id = $("input[name=id]").val();
    $.ajax({
        type: 'POST',
        url: "{{ route('contentBlog.like') }}",
        data: {
            userID: '{{Auth::id()}}',
            id: id,
            type: 'disLike',
            _token: '{{csrf_token()}}'
        },
        success: function(data) {
            // alert();
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: data.success,
                showConfirmButton: false,
                timer: 1000
            })
        },
        error: (error) => {
            console.log(JSON.stringify(error));
        }
    });
    var likes = document.getElementById("likes_count").textContent;
    var disLike = document.getElementById("disLikes_count").textContent;
    if (document.getElementById('like').disabled || document.getElementById('disLike')
        .disabled) {
        document.getElementById("likes_count").textContent = parseInt(likes) - 1;
    }
    document.getElementById("disLikes_count").textContent = parseInt(disLike) + 1;
    document.getElementById('like').disabled = false;
    document.getElementById('disLike').disabled = true;
});
</script>

@endsection