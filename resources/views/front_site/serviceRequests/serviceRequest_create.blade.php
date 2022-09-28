@extends('front_site.repeat.master')
@section('content')
{{-- <div class="container-fluid hero-bg-img d-flex align-items-center justify-content-center">
    <div>
        <h1 class="mb-4">
           {{__('Service Request')}}
        </h1>
    </div>
    <img class="right" src="{{asset('imgs/shape-right-bg-hero.svg')}}" width="100" height="100" alt="Shape Hero">
<img class="left" src="{{asset('imgs/shape-left-bg-hero.svg')}}" width="100" height="100" alt="Shape Hero">
</div> --}}
<x-share_image title="null" sub="{{ __('front.service1') }}"> </x-share_image>


<form action="{{route('servicRequest.store')}}" method="post" step="1" class="request-service" novalidate>
    @csrf

    <div class="container-fluid">
        <div class="container py-5">
            <div class="d-flex steps justify-content-between">
                <div>
                    {{__('Choose the type of service')}}
                </div>
                <div>
                   {{__('Work requirements')}}
                </div>
                <div>
                    {{__('Contact Information')}}
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0 py-5 forms">

        <div class="container">
            <div class="row">
                <h3 class="title-sec mb-4">
                    {{__('Please select the required services')}}
                </h3>
            </div>
            <div class="row our-services">
                @foreach($services as $service)
                <div class="col-lg-4 col-sm-6 my-3">
                    <input required type="checkbox" name="services[]" id="service{{$service->id}}" hidden
                        value="{{$service->id}}">
                    <label for="service{{$service->id}}" class="box-service px-3 py-4 py-md-5">
                        <img src="/storage/{{$service->images[0]->src}}" width="90" height="90" alt="service">
                        <h4 class="my-3">{{$service->name}}</h4>
                    </label>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h3 class="title-sec mb-4">
                    {{__('Website or e-store design requirements')}}
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-6 my-3">
                    <div>
                        <label for="" class="mb-3 d-inline-block fill">
{{__('Do you currently have a website? If available, please include a link to the website')}}                        </label>
                        <input type="text" name="x" class="fill">
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div>
                        <label for="" class="mb-3 d-inline-block fill">
                           {{__('Do you have a domain and hosting?')}}
                        </label>
                        <input type="text" name="y" class="fill">
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <h3 class="title-sec mb-4">
{{__('Please fill in the required contact information')}}                </h3>
            </div>
            <div class="row">
                <div class="col-lg-6 my-3">
                    <div>
                        <label for="" class="mb-3 d-inline-block fill">
                            {{__('name or company name')}}
                        </label>
                        <input type="text" name="name" @if(Auth::check()) value="{{Auth::user()->name}}" @endif  class="fill">
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div>
                        <label for="" class="mb-3 d-inline-block fill">
                           {{__('Personal or company email')}}
                        </label>
                        <input type="text" name="email" @if(Auth::check()) value="{{Auth::user()->email}}" @endif  class="fill">
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div>
                        <label for="" class="mb-3 d-inline-block fill">
                            {{__('Phone number')}}
                        </label>
                        <input type="text" name="phone" class="fill">
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div>
                        <label for="" class="mb-3 d-inline-block fill">
                            {{__('Country')}}
                        </label>
                        <input type="text" name="country" class="fill">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid pb-5 btns">
        <div class="container">
            <div class="row">
                <div class="col-auto mx-auto d-flex">
                    <button type="button" style="border:#426644 solid ; border-radius: 50px;" class="btn prev btn-outline py-3 px-4 mx-2">
                        {{__('Previous')}}
                    </button>
                    <button type="button" style="background-color:#42ad44 ; border-radius: 50px;" class="btn next btn-fill py-3 px-4 mx-2">
                    {{__('Next')}}
                    </button>
                    <button type="submit" style="background-color:#42ad44 ; border-radius: 50px;" class="btn send btn-fill py-3 px-4 mx-2">
                        {{__('send')}}
                    </button>
                </div>
            </div>
        </div>
    </div>

</form>

@endsection
