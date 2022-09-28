@extends('front_site.repeat.master')
@section('content')
<span class="over-main-menu"></span>

<div class="container-fluid video-home p-0">
    <video autoplay loop muted width="100" height="100">
        <source src="{{ asset('./videos/main.mp4') }}" type="video/mp4">
    </video>
    <div class="animate-scroll-down">
        <span class="line"></span>
        <span>{{ __('Scroll down') }}</span>
    </div>
    <button class="muted" type="button">
        <!-- <span> -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-muted" fill="none" viewBox="0 0 24 24" stroke="#FFF"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"
                clip-rule="evenodd" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon-unmuted" fill="none" viewBox="0 0 24 24"
            stroke="#FFF" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
        </svg>
        <!-- </span> -->
    </button>
</div>
@if($services->count()>0)
<div class="container-fluid our-services py-5 bg-gray">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex flex-wrap align-items-center justify-content-between">
                <div class="wow fadeInRight" data-wow-duration="1s">
                    <h2 class="title-sec">
                        {{__('our services')}}
                    </h2>
                    <p class="mt-3">
                        {{__('A package of integrated services to meet the needs of your company in various fields!')}}
                    </p>
                </div>
                <a href="{{route('servicRequest.create')}}"
                    class="btn btn-fill px-4 mt-2 mt-sm-0 py-3 d-inline-block wow fadeInLeft" data-wow-duration="1s">
                    {{__('Ask for your service')}}
                </a>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($services as $service)
            <div class="col-lg-4 col-sm-6 my-3">
                <a href="javascript:void(0)" class="box-service px-3 py-4 py-md-5 wow fadeInRight" data-wow-delay="0.1s"
                    data-wow-duration="1s">
                    <img src="/storage/{{$service->images[0]->src}}" width="90" height="90" alt="service">
                    <h4 class="my-3">{{$service->name}}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endif
<div class="container-fluid our-partners py-4 py-lg-5 bg-gray">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-auto wow fadeInDown" data-wow-duration="1s">
                <h2 class="title-sec">
                    {{__('Our products')}}
                </h2>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($products as $product)
            <div class="col-md-4 wow fadeInTopRight" data-wow-duration="1s">
                <a class="link-partner flip-card d-flex align-items-center justify-content-center"
                    href={{ route('product.show',$product->id) }}>
                    <div class="flip-card-inner">
                        <div class="flip-card-front p-0">
                            <img style="width: 100%; height: 100%; max-width: unset; object-fit: cover"
                                src="/storage/{{$product->images[0]->src}}" alt="Avatar" width="100" height="100">
                        </div>
                        <div class="flip-card-back">
                            <h6 class="mb-3">{{$product->name}}</h6>
                            <p>{{$product->desciption}} </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container-fluid how-develop py-0 px-0">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="img">
                <img src={{App::currentLocale()=='ar' ?"./imgs/how.svg" :"./imgs/how.svg"}} width="100" height="100"
                    style="width: 100%; height: auto;" alt="">
            </div>
        </div>
    </div>
</div>

@if($starredProjects->count()>0)

<div class="our-works pb-md-5">
    <div class="container-fluid py-5 bg-blue">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 d-flex flex-wrap align-items-center justify-content-between wow fadeInDown"
                    data-wow-duration="1s">
                    <div>
                        <h2 class="title-sec">
                            {{__('our starred Projects')}}
                        </h2>
                    </div>
                    <a href="{{route('starredProjects.index')}}"
                        class="btn mt-2 mt-sm-0 btn-outline px-4 py-3 d-inline-block">
                        {{ __('all projects') }}
                    </a>
                </div>
            </div>
        </div>
        <!-- <img class="bg-stroke wow fadeInLeft" src="./imgs/bg-stroke-works.svg" width="100" height="100" alt=""> -->
    </div>
    <div class="container-fluid pb-5">
        <div class="container">
            <div class="row row-works justify-content-between">
                @php $count=0; @endphp
                @foreach($starredProjects as $project)
                <div class="col-lg-5 col-md-6 wow @if($count%2==0)fadeInRight @else fadeInLeft @endif "
                    data-wow-duration="1s">
                    <div class="img-box">
                        <img src="/storage/{{$project->images[0]->src}}" width="100" height="100" alt="">
                        <div class="p-3 align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-3">
                                    {{$project->name}}
                                </h5>
                                <span>{{$project->details}}</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="{{$project->url}}" class="ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.358" height="14.033"
                                        viewBox="0 0 22.358 14.033">
                                        <path id="behance"
                                            d="M9.005,81.68a2.946,2.946,0,0,0,1.879-2.872c0-2.74-2.042-3.408-4.4-3.408H0V89.156H6.669c2.5,0,4.848-1.2,4.848-3.994A3.315,3.315,0,0,0,9.005,81.68ZM3.024,77.748H5.861c1.091,0,2.073.307,2.073,1.572,0,1.168-.765,1.638-1.844,1.638H3.024ZM6.257,86.82H3.024V83.031h3.3c1.331,0,2.174.555,2.174,1.964C8.493,86.385,7.488,86.82,6.257,86.82Zm13.915-9.343H14.6V76.122h5.578Zm2.185,6.843c0-2.946-1.723-5.4-4.848-5.4a5,5,0,0,0-5.1,5.271,4.852,4.852,0,0,0,5.1,5.228,4.441,4.441,0,0,0,4.662-3.35H19.757a2.266,2.266,0,0,1-2.162,1.3,2.252,2.252,0,0,1-2.445-2.535h7.185c.011-.165.023-.339.023-.514Zm-7.2-1.211a2.138,2.138,0,0,1,2.271-2.127,2.039,2.039,0,0,1,2.181,2.127Z"
                                            transform="translate(0 -75.4)" fill="#202020"></path>
                                    </svg>
                                </a>
                                <a href="{{$project->url}}" class="ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <path id="globe"
                                            d="M9,0A9,9,0,1,1,0,9,9,9,0,0,1,9,0ZM9,16.313c.26,0,.918-.253,1.673-1.7a12.144,12.144,0,0,0,.773-2.236H6.553a10.177,10.177,0,0,0,.773,2.236C8.051,16.059,8.74,16.313,9,16.313ZM6.275,10.688h5.449A16.261,16.261,0,0,0,11.813,9a16.261,16.261,0,0,0-.088-1.687H6.275a16.244,16.244,0,0,0,0,3.375Zm5.171-5.063a12.077,12.077,0,0,0-.773-2.234C9.918,1.941,9.26,1.688,9,1.688s-.949.254-1.673,1.7a10.129,10.129,0,0,0-.773,2.234Zm1.976,1.687c.049.545.077,1.111.077,1.688s-.028,1.143-.077,1.688h2.693a7.331,7.331,0,0,0,0-3.375Zm-1.4-4.971a11.73,11.73,0,0,1,1.146,3.283H15.49A7.343,7.343,0,0,0,12.027,2.342Zm-6.054,0A7.343,7.343,0,0,0,2.511,5.625H4.827A11.73,11.73,0,0,1,5.973,2.342ZM1.688,9a7.335,7.335,0,0,0,.2,1.688H4.577C4.528,10.143,4.5,9.577,4.5,9s.028-1.143.077-1.687H1.883A7.335,7.335,0,0,0,1.688,9Zm13.8,3.375H13.173a11.753,11.753,0,0,1-1.146,3.284A7.349,7.349,0,0,0,15.49,12.375Zm-10.663,0H2.511a7.348,7.348,0,0,0,3.462,3.284,11.753,11.753,0,0,1-1.146-3.284Z"
                                            fill="#202020" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @php $count++ @endphp
                @endforeach

            </div>
        </div>
    </div>
</div>
@endif

@if($clients->count()>0)

<div class="our-clients py-5 container-fluid bg-blue">
    <div class="container py-3">
        <div class="row justify-content-center wow fadeInDown" data-wow-duration="1s">
            <div class="col-auto">
                <h4 class="title-sec">
                    {{__('Clients trust us')}}
                </h4>
            </div>
        </div>
        <div class="row row-clients mt-5 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
            @foreach($clients as $client)
            <div class="col-md-3 col-sm-6 p-3">
                <img src="/storage/{{$client->images[0]->src}}" width="50" height="50" alt="">
            </div>
            @endforeach

        </div>
    </div>
    <div class="row mt-5 ticker">
        <div class="col-12 py-2">
            <div>
                <span class="d-inline-block me-4 me-lg-5">
                    {{__('We look forward to adding your logo here')}}
                    <i class="dot-green"></i>
                </span>
                <span class="d-inline-block me-4 me-lg-5">
                    {{__('We succeed together')}}
                    <i class="dot-green"></i>
                </span>
                <span class="d-inline-block me-4 me-lg-5">
                    {{__('We care about every detail')}}
                    <i class="dot-green"></i>
                </span>
                <span class="d-inline-block me-4 me-lg-5">
                    {{__('We look forward to adding your logo here')}}
                    <i class="dot-green"></i>
                </span>
                <span class="d-inline-block me-4 me-lg-5">
                    {{__('We succeed together')}}
                    <i class="dot-green"></i>
                </span>
                <span class="d-inline-block me-4 me-lg-5">
                    {{__('We care about every detail')}}
                    <i class="dot-green"></i>
                </span>
            </div>
        </div>
    </div>
</div>
@endif

@if($contentBlogs->count()>0)

<div class="container-fluid our-articales py-4 py-lg-5 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-center justify-content-between">
                <div class="wow fadeInRight" data-wow-duration="1s">
                    <h2 class="title-sec">
                        {{__('Our latest articles')}}
                    </h2>
                </div>
                <a href="{{route('contentBlogs.index')}}"
                    class="btn btn-outline px-4 py-3 d-inline-block wow fadeInLeft" data-wow-duration="1s">
                    {{__('Show all')}}
                </a>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($contentBlogs as $content)
            <div class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                <a class="link-article"
                    href="{{route('contentBlog.show',['id'=>$content->id ,'name'=>$content->name])}}">
                    <div class="img">
                        <img src="/storage/{{$content->images[0]->src}}" width="100" height="100" alt="">
                        <span class="type">
                            {{$content->details}}
                        </span>
                    </div>

                    <h5 class="mt-3">
                        <span>
                            {{$content->name}}
                        </span>
                        <p class="d-flex align-items-center mt-3">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="15.036" height="15.036"
                                viewBox="0 0 15.036 15.036">
                                <path id="Icon_material-access-time" data-name="Icon material-access-time"
                                    d="M10.51,3a7.518,7.518,0,1,0,7.525,7.518A7.514,7.514,0,0,0,10.51,3Zm.008,13.532a6.014,6.014,0,1,1,6.014-6.014A6.013,6.013,0,0,1,10.518,16.532Zm.376-9.773H9.766V11.27l3.947,2.368.564-.925-3.383-2.007Z"
                                    transform="translate(-3 -3)" fill="#a2a2a2" />
                            </svg>
                            <span>
                                {{$content->created_at->format('F j, Y')}}
                            </span>
                        </p>
                    </h5>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endif

@if($partners->count()>0)

<x-partners :partners="$partners" />
@endif

<x-speak></x-speak>
@endsection