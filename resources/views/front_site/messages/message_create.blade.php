@extends('front_site.repeat.master')
@section('content')
{{-- @component('')

@endcomponent --}}
<x-share_image title="{{ __('front.main') }}" sub="{{ __('front.call') }}" > </x-share_image>


<form action="{{route('message.store')}}" method="post" class="container-fluid call-us py-5"> @csrf
    <div class="container">
        <div class="row">

            <div class="col-12 mb-5">
                <div>
                    <h2 class="title-sec">
                       {{__('Our team works around the clock')}}
                    </h2>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div>
                    <input type="text" class="input-custom" name="name" @if(Auth::check()) value="{{Auth::user()->name}}" @endif placeholder="{{__('Name')}}">
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div>
                    <input type="text" class="input-custom" name="companyName" placeholder="{{__('Company name')}}">
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div>
                    <input type="email" class="input-custom" name="email" @if(Auth::check()) value="{{Auth::user()->email}}" @endif  placeholder="{{__('Email')}}">
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div>
                    <input type="tel" class="input-custom" name="phone" placeholder="{{__('Phone number')}}">
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div>
                    <select class="input-custom" name="service">
                            <option value="default">
                               {{__('Choose the type of service required')}}
                            </option>
                            @foreach(App\Models\Service::all() as $service)
                            <option value="{{$service->id}}">{{$service->name}}
                            </option>
                            @endforeach
                        </select>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div>
                    <select class="input-custom" name="budget">
                            <option value="default">
                                {{__('budget')}}
                            </option>
                            <option value="0-1000">
                                {{__('less than')}} 1000$
                            </option>
                            <option value="1000-1500">
                            {{__('from')}} 1000$ {{__('to')}} 2000$
                            </option>
                            <option value="1500-2000">
                            {{__('from')}} 2000$ {{__('to')}} 3000$
                            </option>
                            <option value="2000-">
                            {{__('more than')}} 3000$
                            </option>
                        </select>
                </div>
            </div>

            <div class="col-12 mb-5">
                <div>
                    <textarea class="input-custom" name="details" placeholder="{{__('Tell us a little about your project')}}" rows="5"></textarea>
                </div>
            </div>

            <div class="col-12">
                <div>
                    <button type="submit" class="btn-fill p-3">
                           {{__('Send')}}
                        </button>
                </div>
            </div>

        </div>
    </div>
</form>


@endsection
