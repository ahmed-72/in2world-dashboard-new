@extends('front_site.repeat.master')
@section('content')
<x-share_image title="{{ __('home') }}" sub="{{ __('Content Blogs') }}" > </x-share_image>

<div class="container-fluid py-4">

    <div class="container">
        <div class="row my-3 our-articales">
            @foreach($contentBlogs as $blog)
            <div class="col-lg-4 col-md-6 my-4">
                <a class="link-article" href="{{route('contentBlog.show',['id'=>$blog->id ,'name'=>$blog->name])}}">
                    <div class="img">
                        <img src="/storage/{{$blog->images[0]->src}}" width="100" height="100" alt="">
                        <span class="type">{{$blog->details}}</span>
                    </div>

                    <h5 class="mt-3">
                        <span>{{$blog->name}}</span>
                        <p class="d-flex align-items-center mt-3">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="15.036" height="15.036"
                                viewBox="0 0 15.036 15.036">
                                <path id="Icon_material-access-time" data-name="Icon material-access-time"
                                    d="M10.51,3a7.518,7.518,0,1,0,7.525,7.518A7.514,7.514,0,0,0,10.51,3Zm.008,13.532a6.014,6.014,0,1,1,6.014-6.014A6.013,6.013,0,0,1,10.518,16.532Zm.376-9.773H9.766V11.27l3.947,2.368.564-.925-3.383-2.007Z"
                                    transform="translate(-3 -3)" fill="#a2a2a2" />
                            </svg>
                            <span>{{$blog->created_at->diffForHumans()}} </span>
                        </p>
                    </h5>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<x-speak></x-speak>
@endsection
