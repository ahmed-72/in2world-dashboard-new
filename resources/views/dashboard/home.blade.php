@extends('dashboard/parent')

@section('extraCSS')
@endsection

@section('pageName') {{__('home')}} @endsection

@section('pagePath') {{__('home')}}-{{__('home')}} @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container-xxl" id="kt_content_container">
        <div class="row g-5 g-xl-8">
            <div class="col-xl-6">
                <!--begin::Misc Widget 1-->
                <div class="row mb-5 mb-xl-8 g-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-6">
                        <!--begin::Card-->
                        <div class="card card-stretch">
                            <!--begin::Link-->
                            <a
                                class="btn btn-flex btn-text-gray-800 btn-icon-color-success btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                                <span class="svg-icon svg-icon-success svg-icon-4x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Adress-book2.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-4 fw-bolder">{{__('Members count')}}</span>
                                <div class="d-flex align-items-center">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                    <span class="svg-icon svg-icon-2x  svg-icon-success me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                                                transform="rotate(90 13 6)" fill="black"></rect>
                                            <path
                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <div class="fs-2 fw-bolder counted" data-kt-countup="true"
                                        data-kt-countup-value="{{$membersCount}}">
                                        {{$membersCount}}</div>
                                </div>
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                        <!--begin::Card-->
                        <div class="card card-stretch">
                            <!--begin::Link-->
                            <a
                                class="btn btn-flex btn-text-gray-800 btn-icon-color-success btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                <span class="svg-icon svg-icon-success svg-icon-4x">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Earth.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="9" />
                                            <path
                                                d="M11.7357634,20.9961946 C6.88740052,20.8563914 3,16.8821712 3,12 C3,11.9168367 3.00112797,11.8339369 3.00336944,11.751315 C3.66233009,11.8143341 4.85636818,11.9573854 4.91262842,12.4204038 C4.9904938,13.0609191 4.91262842,13.8615942 5.45804656,14.101772 C6.00346469,14.3419498 6.15931561,13.1409372 6.6267482,13.4612567 C7.09418079,13.7815761 8.34086797,14.0899175 8.34086797,14.6562185 C8.34086797,15.222396 8.10715168,16.1034596 8.34086797,16.2636193 C8.57458427,16.423779 9.5089688,17.54465 9.50920913,17.7048097 C9.50956962,17.8649694 9.83857487,18.6793513 9.74040201,18.9906563 C9.65905192,19.2487394 9.24857641,20.0501554 8.85059781,20.4145589 C9.75315358,20.7620621 10.7235846,20.9657742 11.7357634,20.9960544 L11.7357634,20.9961946 Z M8.28272988,3.80112099 C9.4158415,3.28656421 10.6744554,3 12,3 C15.5114513,3 18.5532143,5.01097452 20.0364482,7.94408274 C20.069657,8.72412177 20.0638332,9.39135321 20.2361262,9.6327358 C21.1131932,10.8600506 18.0995147,11.7043158 18.5573343,13.5605384 C18.7589671,14.3794892 16.5527814,14.1196773 16.0139722,14.886394 C15.4748026,15.6527403 14.1574598,15.137809 13.8520064,14.9904917 C13.546553,14.8431744 12.3766497,15.3341497 12.4789081,14.4995164 C12.5805657,13.664636 13.2922889,13.6156126 14.0555619,13.2719546 C14.8184743,12.928667 15.9189236,11.7871741 15.3781918,11.6380045 C12.8323064,10.9362407 11.963771,8.47852395 11.963771,8.47852395 C11.8110443,8.44901109 11.8493762,6.74109366 11.1883616,6.69207022 C10.5267462,6.64279981 10.170464,6.88841096 9.20435656,6.69207022 C8.23764828,6.49572949 8.44144409,5.85743687 8.2887174,4.48255778 C8.25453994,4.17415686 8.25619136,3.95717082 8.28272988,3.80112099 Z M20.9991771,11.8770357 C20.9997251,11.9179585 21,11.9589471 21,12 C21,16.9406923 17.0188468,20.9515364 12.0895088,20.9995641 C16.970233,20.9503326 20.9337111,16.888438 20.9991771,11.8770357 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-4 fw-bolder">{{__('Countries count')}}</span>
                                <div class="d-flex align-items-center">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                    <span class="svg-icon svg-icon-2x  svg-icon-success me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                                                transform="rotate(90 13 6)" fill="black"></rect>
                                            <path
                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <div class="fs-2 fw-bolder counted" data-kt-countup="true"
                                        data-kt-countup-value="0">
                                        {{$countriesCount}}</div>
                                </div>
                            </a>
                            <!--end::Link-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Misc Widget 1-->
                <!--begin::Misc Widget 1-->
                <div class="card mb-5 mb-xl-8 ">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">{{__('services')}}</span>
                            <span class="text-muted mt-1 fw-bold fs-7">{{__('select services to show')}}</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <form action="{{route('services.store')}}" method="post"> @csrf
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <input type="text" name="pageServiceIDs" hidden value="{{$services->pluck('id')}}">

                                @foreach($services as $service)
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-2 ">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="/storage/{{$service->images[0]->src}}"
                                                class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <div class="text-gray-800 text-hover-primary fs-6 fw-bolder">
                                                {{$service->name}}
                                            </div>
                                            <span class="text-muted fw-bold d-block fs-7">{{$service->details}}</span>
                                        </div>

                                        <span class="badge badge-light fw-bolder my-2">
                                            <a href="#" data-bs-toggle="modal" id="edit_service"
                                                data-bs-target="#kt_modal_edit_service" data-id-id="{{$service->id}}"
                                                data-id-name="{{$service->name}}"
                                                data-id-details="{{$service->details}}">
                                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Design/Edit.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </span>
                                        <span class="badge badge-light fw-bolder my-2">
                                            <a onclick="return confirm('Are you sure you want to delete this row?')"
                                                class="button button-danger"
                                                href="{{route('service.delete',$service->id)}}">
                                                <span class="svg-icon svg-icon-danger svg-icon-xl">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                            <path
                                                                d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span></a>
                                        </span>
                                        <!-- <span class="badge badge-light fw-bolder my-2">
                                            <form action="{{route('service.delete',$service->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" style="border:none ; background-color:none"
                                                    onclick="return confirm('Are you sure you want to delete this row?')">
                                                    <span class="svg-icon svg-icon-danger svg-icon-xl">
                                                          <svg  xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                                    fill="#000000" fill-rule="nonzero" />
                                                                <path
                                                                    d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span></button>
                                            </form>
                                        </span> -->

                                        <span class="badge badge-light fw-bolder my-2"><input type="checkbox"
                                                name="services[]" value="{{$service->id}}" @if($service->status
                                            =='active')
                                            checked @endif>
                                        </span>

                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                @endforeach
                            </div>
                            @if($services->count()>0)
                            <input class="btn btn-primary" type="submit" value="{{__('save')}}">
                            @endif
                            <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_new_service">{{__('Add New Service')}}</a>
                        </form>
                        {{$services->links()}}
                    </div>
                    <!--end::Body-->
                </div>


                <!--begin::Misc Widget 1-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">{{__('clients')}}</span>
                            <span class="text-muted mt-1 fw-bold fs-7">{{__('select clients to show')}}</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <form action="{{route('clients.store')}}" method="post"> @csrf
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <input type="text" name="pageClientIDs" hidden value="{{$clients->pluck('id')}}">
                                @foreach($clients as $client)
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="/storage/{{$client->images[0]->src}}"
                                                class="h-50 align-self-center"
                                                style="background-color:black ; width:40px;" alt="">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <div class="text-gray-800 text-hover-primary fs-6 fw-bolder">
                                                {{$client->name}}
                                            </div>

                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">
                                            <a href="#" data-bs-toggle="modal" id="edit_client"
                                                data-bs-target="#kt_modal_edit_client" data-id-id="{{$client->id}}"
                                                data-id-name="{{$client->name}}">
                                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Design/Edit.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </span>

                                        <span class="badge badge-light fw-bolder my-2">
                                            <a onclick="return confirm('Are you sure you want to delete this row?')"
                                                class="button button-danger"
                                                href="{{route('client.delete',$client->id)}}">
                                                <span class="svg-icon svg-icon-danger svg-icon-xl">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                            <path
                                                                d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span></a>
                                        </span>
                                        <span class="badge badge-light fw-bolder my-2"><input type="checkbox"
                                                name="clients[]" value="{{$client->id}}" @if($client->status =='active')
                                            checked @endif></span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                @endforeach
                            </div>
                            @if($clients->count()>0)
                            <input class="btn btn-primary" type="submit" value="{{__('save')}}">
                            @endif
                            <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_new_client">{{__('Add New Client')}}</a>
                        </form>
                        {{$clients->links()}}
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <div class="col-xl-6">
                <!--begin::Misc Widget 1-->

                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">{{__('starred Projects')}}</span>
                            <span class="text-muted mt-1 fw-bold fs-7">{{__('select starred Projects to show')}}</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <form action="{{route('starredProjects.store')}}" method="post"> @csrf
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <input type="text" name="pageStarredProjectIDs" hidden
                                    value="{{$starredProjects->pluck('id')}}">

                                @foreach($starredProjects as $project)
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="/storage/{{$project->images[0]->src}}"
                                                class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <div class="text-gray-800 text-hover-primary fs-6 fw-bolder">
                                                {{$project->name}}
                                            </div>
                                            <span class="text-muted fw-bold d-block fs-7">{{$project->details}}</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">
                                            <a href="#" data-bs-toggle="modal" id="edit_starredProject"
                                                data-bs-target="#kt_modal_edit_starredProject"
                                                data-id-id="{{$project->id}}" data-id-name="{{$project->name}}"
                                                data-id-details="{{$project->details}}">
                                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Design/Edit.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </span>

                                        <span class="badge badge-light fw-bolder my-2">
                                            <a onclick="return confirm('Are you sure you want to delete this row?')"
                                                class="button button-danger"
                                                href="{{route('starredProject.delete',$project->id)}}">
                                                <span class="svg-icon svg-icon-danger svg-icon-xl">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                            <path
                                                                d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span></a>
                                        </span>
                                        <span class="badge badge-light fw-bolder my-2"><input type="checkbox"
                                                name="starredProjects[]" value="{{$project->id}}" @if($project->status
                                            =='homePage')
                                            checked @endif></span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                @endforeach

                            </div>
                            @if($starredProjects->count()>0)
                            <input class="btn btn-primary" type="submit" value="{{__('save')}}">
                            @endif
                            <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_new_starred_project">{{__('Add New Starred Project')}}</a>
                        </form>
                        {{$starredProjects->links()}}
                    </div>
                    <!--end::Body-->
                </div>

                <!--begin::Misc Widget 1-->

                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">{{__('partners')}}</span>
                            <span class="text-muted mt-1 fw-bold fs-7">{{__('select partners to show')}}</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <form action="{{route('partners.store')}}" method="post"> @csrf
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <input type="text" name="pagePartnerIDs" hidden value="{{$partners->pluck('id')}}">

                                @foreach($partners as $partner)
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="/storage/{{$partner->images[0]->src}}"
                                                class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <div class="text-gray-800 text-hover-primary fs-6 fw-bolder">
                                                {{$partner->name}}
                                            </div>
                                            <span
                                                class="text-muted fw-bold d-block fs-7">{{\Illuminate\Support\Str::limit($partner->details, 50)}}
                                            </span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">
                                            <a href="#" data-bs-toggle="modal" id="edit_partner"
                                                data-bs-target="#kt_modal_edit_partner" data-id-id="{{$partner->id}}"
                                                data-id-name="{{$partner->name}}"
                                                data-id-details="{{$partner->details}}">
                                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Design/Edit.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </span>

                                        <span class="badge badge-light fw-bolder my-2">
                                            <a onclick="return confirm('Are you sure you want to delete this row?')"
                                                class="button button-danger"
                                                href="{{route('partner.delete',$partner->id)}}">
                                                <span class="svg-icon svg-icon-danger svg-icon-xl">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                            <path
                                                                d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span></a>
                                        </span>
                                        <span class="badge badge-light fw-bolder my-2"><input type="checkbox"
                                                name="partners[]" value="{{$partner->id}}" @if($partner->status
                                            =='active')
                                            checked @endif></span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                @endforeach
                            </div>
                            @if($partners->count()>0)
                            <input class="btn btn-primary" type="submit" value="{{__('save')}}">
                            @endif
                            <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_new_partner">{{__('Add New Partner')}}</a>
                        </form>
                        {{$partners->links()}}
                    </div>
                    <!--end::Body-->
                </div>
                <!--begin::Misc Widget 1-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">{{__('content Blogs')}}</span>
                            <span class="text-muted mt-1 fw-bold fs-7">{{__('select content Blogs to show')}}</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <form action="{{route('contentBlogs.store')}}" method="post"> @csrf
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <input type="text" name="pageContentBlogIDs" hidden
                                    value="{{$contentBlogs->pluck('id')}}">

                                @foreach($contentBlogs as $contentBlog)
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-2">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <img src="/storage/{{$contentBlog->images[0]->src}}"
                                                class="h-50 align-self-center" alt="">
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <div class="text-gray-800 text-hover-primary fs-6 fw-bolder">
                                                {{$contentBlog->name}}</div>
                                            <span
                                                class="text-muted fw-bold d-block fs-7">{{$contentBlog->details}}</span>
                                        </div>
                                        <span class="badge badge-light fw-bolder my-2">
                                            <a href="#" data-bs-toggle="modal" id="edit_contentBlog"
                                                data-bs-target="#kt_modal_edit_contentBlog"
                                                data-id-id="{{$contentBlog->id}}" data-id-name="{{$contentBlog->name}}"
                                                data-id-details="{{$contentBlog->details}}"
                                                data-id-mytextarea="{{$contentBlog->image}}">
                                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Design/Edit.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </span>

                                        <span class="badge badge-light fw-bolder my-2">
                                            <a onclick="return confirm('Are you sure you want to delete this row?')"
                                                class="button button-danger"
                                                href="{{route('contentBlog.delete',$contentBlog->id)}}">
                                                <span class="svg-icon svg-icon-danger svg-icon-xl">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                            <path
                                                                d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span></a>
                                        </span>
                                        <span class="badge badge-light fw-bolder my-2"><input type="checkbox"
                                                name="contentBlogs[]" value="{{$contentBlog->id}}"
                                                @if($contentBlog->status
                                            =='homePage')
                                            checked @endif></span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                @endforeach
                            </div>
                            @if($contentBlogs->count()>0)
                            <input class="btn btn-primary" type="submit" value="{{__('save')}}">
                            @endif
                            <a href="{{route('contentBlog.create')}}" class="btn btn-primary er fs-6 px-8 py-4">{{__('Add New Content Blog')}}</a>
                        </form>
                        {{$contentBlogs->links()}}
                    </div>
                    <!--end::Body-->
                </div>
            </div>

        </div>
    </div>
</div>

<!--begin::services Modals -->

<!--begin::Modal services-->
<div class="modal fade" id="kt_modal_new_service" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('add new service')}}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 ">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach(config('languages') as $key=>$value)
                    <h3>{{$value}}</h3>
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('service name')}}</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid"
                            placeholder="{{__('Enter service name')}}" name="name_{{$key}}" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2 ">{{__('service details')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid"
                                placeholder="{{__('Enter service details')}}" name="details_{{$key}}" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <hr>
                    @endforeach

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2 required">{{__('service image')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="file" required class="form-control form-control-solid" name="image" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">{{__('Discard')}}</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">{{__('save')}}</span>
                            <span class="indicator-progress">{{__('Please wait...')}}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal services-->

<!--begin::Modal edit services-->
<div class="modal fade" id="kt_modal_edit_service" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('edit service')}}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{route('service.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="text" class="form-control form-control-solid" hidden name="id" id="serviceIdEdit"
                        value="">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('service name')}}</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Specify a card holder's name"
                                aria-label="Specify a card holder's name"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="{{__('Enter service name')}}"
                            name="name" id="serviceNameEdit" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>

                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('service details')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid"
                                placeholder="{{__('Enter service details')}}" id="serviceDetailsEdit" name="details" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('service image')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="file" class="form-control form-control-solid" name="image" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">{{__('Discard')}}</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">{{__('save')}}</span>
                            <span class="indicator-progress">{{__('Please wait...')}}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal edit services-->

<!--end::services Modals -->

<!-- **************** -->

<!--begin::starred Projects Modals -->

<!--begin::Modal starred Projects-->
<div class="modal fade" id="kt_modal_new_starred_project" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('add new starred Project')}}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{route('starredProject.store')}}" method="post" enctype="multipart/form-data"> @csrf
                    @foreach(config('languages') as $key=>$value)
                    <h3>{{$value}}</h3>
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('starred Project name')}}</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" required class="form-control form-control-solid"
                            placeholder="{{__('Enter starred Project name')}}" name="name_{{$key}}" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('starred Project details')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" required class="form-control form-control-solid"
                                placeholder="{{__('Enter starred Project details')}}" name="details_{{$key}}" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <hr>
                    @endforeach
                    <!--begin::Input group-->
                        <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class=" fs-6 fw-bold form-label mb-2">{{__('starred Project image')}}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="file" required class="form-control form-control-solid" name="image"
                                    value="">
                                <!--end::Input-->
                            </div>
                            <!--end::Input wrapper-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel"
                                class="btn btn-light me-3">{{__('Discard')}}</button>
                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">{{__('save')}}</span>
                                <span class="indicator-progress">{{__('Please wait...')}}
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal starred Projects-->
<!--begin::Modal edit starred Projects-->
<div class="modal fade" id="kt_modal_edit_starredProject" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('edit starred project')}}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{route('starredProject.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="text" class="form-control form-control-solid" hidden name="id"
                        id="starredProjectIdEdit" value="">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('starred Project name')}}</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Specify a card holder's name"
                                aria-label="Specify a card holder's name"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid"
                            placeholder="{{__('Enter starred Project name')}}" name="name" id="starredProjectNameEdit" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>

                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('starred Project details')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid"
                                placeholder="{{__('Enter starred Project details')}}" name="details"
                                id="starredProjectDetailsEdit" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('starred Project image')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="file" class="form-control form-control-solid" name="image" id="" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">{{__('Discard')}}</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">{{__('save')}}</span>
                            <span class="indicator-progress">{{__('Please wait...')}}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal edit starred Projects-->

<!--end::starred Projects Modals -->

<!-- ************** -->
<!--begin::clients Modals -->

<!--begin::Modal clients-->
<div class="modal fade" id="kt_modal_new_client" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('add new client')}}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 ">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{route('client.store')}}" method="post" enctype="multipart/form-data"> @csrf
                    @foreach(config('languages') as $key=>$value)
                    <h3>{{$value}}</h3>
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('client name')}}</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" required class="form-control form-control-solid"
                            placeholder="{{__('Enter client name')}}" name="name_{{$key}}" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <hr>
                    @endforeach
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('client image')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="file" required class="form-control form-control-solid" name="image" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">{{__('Discard')}}</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">{{__('save')}}</span>
                            <span class="indicator-progress">{{__('Please wait...')}}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal clients-->
<!--begin::Modal edit clients-->
<div class="modal fade" id="kt_modal_edit_client" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('edit client')}}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{route('client.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="text" class="form-control form-control-solid" hidden name="clientID" id="clientIdEdit"
                        value="">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('client name')}}</span>
                          </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="{{__('Enter client name')}}"
                            name="name" id="clientNameEdit" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>

                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('client image')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="file" class="form-control form-control-solid" name="image" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">{{__('Discard')}}</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">{{__('save')}}</span>
                            <span class="indicator-progress">{{__('Please wait...')}}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal edit clients-->

<!--end::clients Modals -->

<!-- *************** -->

<!--begin::content Blogs Modals -->

<!--begin::Modal content Blogs-->
<div class="modal fade" id="kt_modal_new_content_blog" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('add new content Blog')}}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{route('contentBlog.store')}}" method="post" enctype="multipart/form-data"> @csrf
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('content blog name')}}</span>
                            
                        </label>
                        <!--end::Label-->
                        <input type="text" required class="form-control form-control-solid"
                            placeholder="{{__('Enter content blog name')}}" name="name" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('content Blog details')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" required class="form-control form-control-solid"
                                placeholder="{{__('Enter content Blog details')}}" name="details" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">content Blog keywords (add ',' between
                            kywords)</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input required type="text" required class="form-control form-control-solid"
                                placeholder="Enter content Blog keywords" name="keywords" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">content Blog page</label>
                        <!--end::Label-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>

                    <textarea name="content" id="content"></textarea>

                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('content blog image')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="file" required class="form-control form-control-solid" name="image" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">{{__('Discard')}}</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">{{__('save')}}</span>
                            <span class="indicator-progress">{{__('Please wait...')}}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal content blog -->
<!--begin::Modal edit scontent Blog-->
<div class="modal fade" id="kt_modal_edit_contentBlog" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>edit content Blog</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{route('contentBlog.update')}}" method="post" enctype="multipart/form-data"> @csrf
                    @method('put')
                    <input type="text" class="form-control form-control-solid" name="id" id="contentBlogIdEdit" hidden>
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">contentBlog name</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Specify a card holder's name"
                                aria-label="Specify a card holder's name"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" required class="form-control form-control-solid" id="contentBlogNameEdit"
                            name="name" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">content Blog details</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" required class="form-control form-control-solid" name="details"
                                id="contentBlogDetailsEdit" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--end::Input group-->
                    <textarea name="content" id="content" cols="30" rows="10" value=""></textarea>

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">content Blog image</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="file" class="form-control form-control-solid" name="image" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">save</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal edit contentBlog-->

<!--end::content Blogs Modals -->
<!-- **************** -->

<!--begin::partners Modals -->

<!--begin::Modal partners-->
<div class="modal fade" id="kt_modal_new_partner" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('add new partner')}}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5">
                <!--begin::Form-->
                <form id="" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{route('partner.store')}}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach(config('languages') as $key=>$value)
                    <h3>{{$value}}</h3>
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('partner name')}}</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" required class="form-control form-control-solid"
                            placeholder="{{__('Enter partner name')}}" name="name_{{$key}}" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('partner details')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" required class="form-control form-control-solid"
                                placeholder="{{__('Enter partner details')}}" name="details_{{$key}}" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group--> <hr>
                    @endforeach
                    <!--begin::Input group-->
                        <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class=" fs-6 fw-bold form-label mb-2">{{__('partner image')}}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="file" required class="form-control form-control-solid" name="image"
                                    value="">
                                <!--end::Input-->
                            </div>
                            <!--end::Input wrapper-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" id="kt_modal_new_card_cancel"
                                class="btn btn-light me-3">{{__('Discard')}}</button>
                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                <span class="indicator-label">{{__('save')}}</span>
                                <span class="indicator-progress">{{__('Please wait...')}}
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal partners-->
<!--begin::Modal edit partners-->
<div class="modal fade" id="kt_modal_edit_partner" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('edit partner')}}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{route('partner.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="text" class="form-control form-control-solid" hidden name="id"
                        id="partnerIdEdit" value="">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('partner name')}}</span>
                             </label>
                        <!--end::Label-->
                        <input required type="text" class="form-control form-control-solid"
                            placeholder="{{__('Enter partner name')}}" name="name" id="partnerNameEdit" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>

                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('partner details')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" placeholder="{{__('Enter partner details')}}"
                                name="details" id="partnerDetailsEdit" cols="30" rows="8"></textarea>

                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('partner image')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="file" class="form-control form-control-solid" name="image" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">{{__('Discard')}}</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">{{__('save')}}</span>
                            <span class="indicator-progress">{{__('Please wait...')}}
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--begin::Modal edit partners-->

<!--end::partners Modals -->

@endsection

@section('extraJS')

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script>
$('#kt_modal_edit_service').on('show.bs.modal', function(e) {
    var serviceID = $(e.relatedTarget).attr('data-id-id');
    document.getElementById("serviceIdEdit").value = serviceID;
    var serviceName = $(e.relatedTarget).attr('data-id-name');
    document.getElementById("serviceNameEdit").value = serviceName;
    var serviceDetails = $(e.relatedTarget).attr('data-id-details');
    if (serviceDetails) {
        document.getElementById("serviceDetailsEdit").value = serviceDetails;
    }
});
$('#kt_modal_edit_contentBlog').on('show.bs.modal', function(e) {
    var contentBlogID = $(e.relatedTarget).attr('data-id-id');
    document.getElementById("contentBlogIdEdit").value = contentBlogID;
    var contentBlogName = $(e.relatedTarget).attr('data-id-name');
    document.getElementById("contentBlogNameEdit").value = contentBlogName;
    var contentBlogDetails = $(e.relatedTarget).attr('data-id-details');
    if (contentBlogDetails) {
        document.getElementById("contentBlogDetailsEdit").value = contentBlogDetails;
    }
    // var contentBlogmytextarea = $(e.relatedTarget).attr('data-id-mytextarea');
    //  if (contentBlogmytextarea) {
    //      document.getElementById("mytextareaEdit").value = contentBlogmytextarea;
    //  }contentBlogKeywordsEdit
});

$('#kt_modal_edit_starredProject').on('show.bs.modal', function(e) {
    var starredProjectID = $(e.relatedTarget).attr('data-id-id');
    document.getElementById("starredProjectIdEdit").value = starredProjectID;
    var starredProjectName = $(e.relatedTarget).attr('data-id-name');
    document.getElementById("starredProjectNameEdit").value = starredProjectName;
    var starredProjectDetails = $(e.relatedTarget).attr('data-id-details');
    if (starredProjectDetails) {
        document.getElementById("starredProjectDetailsEdit").value = starredProjectDetails;
    }
});


$('#kt_modal_edit_client').on('show.bs.modal', function(e) {
    var clientID = $(e.relatedTarget).attr('data-id-id');
    document.getElementById("clientIdEdit").value = clientID;
    var clientName = $(e.relatedTarget).attr('data-id-name');
    document.getElementById("clientNameEdit").value = clientName;
});

$('#kt_modal_edit_partner').on('show.bs.modal', function(e) {
    var partnerID = $(e.relatedTarget).attr('data-id-id');
    document.getElementById("partnerIdEdit").value = partnerID;
    var partnerName = $(e.relatedTarget).attr('data-id-name');
    document.getElementById("partnerNameEdit").value = partnerName;
    var partnerDetails = $(e.relatedTarget).attr('data-id-details');
    if (partnerDetails) {
        document.getElementById("partnerDetailsEdit").value = partnerDetails;
    }
});
</script>

@endsection