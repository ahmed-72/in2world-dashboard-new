@extends('front_site.repeat.master')
@section('content')
<div class="landingPage-intro container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-3 mb-lg-0">
                <div>
                    <h1 class="mb-3 mb-lg-4 wow fadeInRight" data-wow-duration="1s">{{$product->title}}</h1>
                    <p class="mb-4 mb-lg-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">{{$product->subTitle}}</p>
                    <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                        @foreach($product->buttons as $button)
                        <a href="{{$button->link}}" class=@if($button->importance)"btn btn-fill me-lg-3 me-2 px-4 py-3" @else "btn btn-outline px-4 py-3" @endif >{{$button->name}}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-7 my-3 my-lg-0">
                <div class="wow fadeInLeft" data-wow-duration="1s">
                    <img src="/storage/{{$product->images[1]->src}}" width="100" height="100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-4 py-lg-5 row-text-img landingPage-video">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-auto wow fadeInDown" data-wow-duration="1s">
                <h2 class="title-sec">
                  {{__('Unleash your success with')}}{{$product->name}}
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="d-flex box-video wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <video width="100" height="100" class="paused">
                        <source src="/storage/{{$product->images[2]->src}}" type="video/mp4">
                    </video>
                    <button type="button" class="d-flex align-items-center justify-content-center">
                        <img class="icon-play" src="{{ asset('imgs/icon-play.svg') }}" width="12" height="12" alt="">
                        <img class="icon-pause" src="{{ asset('imgs/icon-pause.svg') }}" width="12" height="12" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-4 py-lg-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-auto wow fadeInDown" data-wow-duration="1s">
                <h2 class="title-sec">
                    {{__('Why')}} {{$product->name}}؟
                </h2>
            </div>
        </div>
        <div class="row py-4 row-why-product gy-4">
@foreach($product->advantages as $advantage)
            <div class="col-lg-4 col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="px-3 py-4">
                    <div>
                        <img src="/storage/{{$product->images[0]->src}}" width="100" height="100" alt="img">
                    </div>
                    <div>
                        <h3 class="mb-2 mt-4">{{$product->title}}</h3>
                        <p>{{$product->details}} </p>
                    </div>
                </div>
            </div>
@endforeach
        </div>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box-green-ad wow fadeInDown" data-wow-duration="1s">
                    <div class="row flex-sm-nowrap align-items-center justify-content-between">
                        <div class="col-auto me-3">
                            <div>
                                <h4 class="mb-2 mb-lg-4"> {{$product->contactInformation['contactDetails']}}
                                </h4>
                            </div>
                        </div>
                        <div class="col-sm-auto mt-4 mt-md-0">
                            <a href="{{$product->contactInformation['contactLink']}}" class="d-inline-block btn btn-outline px-4 py-3">
                            {{$product->contactInformation['contactTitle']}}                           </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonials container-fluid py-5" id="about">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-auto wow fadeInDown" data-wow-duration="1s">
                <h2 class="title-sec">{{__('They said about')}}{{$product->name}}
                </h2>
            </div>
        </div>
        <div class="swiper wow fadeInUp" data-wow-duration="1s">
            <div class="swiper-wrapper">
                @foreach($product->feedbacks as $feedback)
                <div class="swiper-slide">
                    <!-- <div class="col-lg-6 my-3 my-lg-0"> -->
                    <div class="testimonial">
                        <div class="img">
                            <img src="/storage/{{$feedback->images[0]->src}}" width="164" height="164" alt="testimonial">
                        </div>
                        <div class="testimonial-text ms-4">
                            <h3>{{$feedback->feedback}}</h3>
                            <div>
                                <p class="mb-1">{{$feedback->name}}</p>
                                <span>{{$product->jobTitle}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
                @endforeach
            </div>
            <div class="menu swiper-pagination">
                <span></span>
                <span class="active"></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
<x-speak></x-speak>

@endsection