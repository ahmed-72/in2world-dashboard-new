@extends('dashboard/parent')

@section('extraCSS')
@endsection

@section('pageName') @endsection

@section('pagePath') @endsection

@section('content')
<div class="card card-flush h-lg-100 m-7">
    <div class="card-header pt-6">
        <!--begin::Modal title-->
        <h2>{{__('add new product')}}</h2>
        <!--end::Modal title-->
    </div>
    <div class="card-body mx-5 ">

        <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
            action="{{route('product.store')}}" method="post" enctype="multipart/form-data"> @csrf
            @foreach(config('languages') as $key=>$value)
            <h3 style="color:cornflowerblue">{{$value}}</h3>
            <div class="row mb-10">
                <!--begin::Col-->
                <div class="col-12 fv-row">
                    <!--begin::Label-->
                    <label class="fs-4 fw-bold form-label mb-2">{{__('Basic information')}}</label>
                    <!--end::Label-->
                    <!--begin::Row-->
                    <div class="row fv-row fv-plugins-icon-container">
                        <!--begin::Col-->
                        <div class="col-3">
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">{{__('Product name')}}</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" required class="form-control form-control-solid" name="name_{{$key}}">
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-3">
                            <label class=" fs-6 fw-bold form-label mb-2">{{__('Product title')}}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="text" required class="form-control form-control-solid"
                                    name="title_{{$key}}">
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-3">
                            <label class=" fs-6 fw-bold form-label mb-2">{{__('Product sub-title')}}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="text" required class="form-control form-control-solid"
                                    name="subTitle_{{$key}}">
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                         <div class="col-3">
                            <label class=" fs-6 fw-bold form-label mb-2">{{__('Product home page desciption')}}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <textarea  class="form-control form-control-solid" rows="3" required
                                    name="desciption_{{$key}}"></textarea>
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
                <hr class="col-5" style="color:darkblue">
                <!--begin::Input group-->
                <div class="repeater">
                    <!--begin::Label-->
                    <label class="fs-4 fw-bold form-label mb-2">{{__('Action buttons')}}</label>
                    <!--end::Label-->
                    <div data-repeater-list="buttonsGroup">
                        <div data-repeater-item>
                            <div class="row mb-10">
                                <!--begin::Col-->
                                <div class="col-12 fv-row">
                                    <!--begin::Row-->
                                    <div class="row fv-row fv-plugins-icon-container">
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label class=" fs-6 fw-bold form-label mb-2">{{__('Button name')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" required class="form-control form-control-solid"
                                                    name="buttonName_{{$key}}">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label class=" fs-6 fw-bold form-label mb-2">{{__('Button link')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" required class="form-control form-control-solid"
                                                    name="buttonLink_{{$key}}">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-2">
                                            <label
                                                class=" fs-6 fw-bold form-label mb-2">{{__('Most important?')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid p-3">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="buttonImportant_{{$key}}" value="1">
                                                </span>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-2">
                                            <a data-repeater-delete type="button"
                                                class="btn btn-active-danger font-weight-bold mt-7">
                                                <span class="svg-icon svg-icon-danger svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Trash.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
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
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                    </div>
                    <button data-repeater-create type="button" class="btn " style="margin-top: -30px; ;">
                        <span class="svg-icon svg-icon-primary svg-icon-3x">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Code/Plus.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                    <path
                                        d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                </div>
                <!--end::Input group-->
                <hr class="col-5" style="color:darkblue">
                <!--begin::Input group-->
                <div class="repeater">
                    <!--begin::Label-->
                    <label class=" fs-4 fw-bold form-label mb-2">{{__('Advantages')}}</label>
                    <!--end::Label-->
                    <div data-repeater-list="advantagesGroup">
                        <div data-repeater-item>
                            <div class="row mb-10">
                                <!--begin::Col-->
                                <div class="col-12 fv-row">
                                    <!--begin::Row-->
                                    <div class="row fv-row fv-plugins-icon-container">
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class=" fs-6 fw-bold form-label mb-2">{{__('Advantage titel')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" required class="form-control form-control-solid"
                                                    name="advantageTitle_{{$key}}" value="">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class=" fs-6 fw-bold form-label mb-2">{{__('Advantage details')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" required class="form-control form-control-solid"
                                                    name="advantageDetails_{{$key}}" value="">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-2">
                                            <label
                                                class=" fs-6 fw-bold form-label mb-2">{{__('Advantage icon')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="file" name="advantageIcon_{{$key}}">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-2">
                                            <a data-repeater-delete type="button"
                                                class="btn btn-active-danger font-weight-bold mt-7">
                                                <span class="svg-icon svg-icon-danger svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Trash.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
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
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                    </div>
                    <button data-repeater-create type="button" class="btn" style="margin-top: -30px ;">
                        <span class="svg-icon svg-icon-primary svg-icon-3x">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Code/Plus.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                    <path
                                        d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                </div>
                <!--end::Input group-->
                <hr class="col-5" style="color:darkblue">
                <!--begin::Col-->
                <div class="col-12 fv-row">
                    <!--begin::Label-->
                    <label class="fs-4 fw-bold form-label mb-2">{{__('Contact Information')}}</label>
                    <!--end::Label-->
                    <!--begin::Row-->
                    <div class="row fv-row fv-plugins-icon-container">
                        <!--begin::Col-->
                        <div class="col-4">
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">{{__('title')}}</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" required class="form-control form-control-solid"
                                name="contactTitle_{{$key}}">
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-4">
                            <label class=" fs-6 fw-bold form-label mb-2">{{__('details')}}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="text" required class="form-control form-control-solid"
                                    name="contactDetails_{{$key}}">
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-4">
                            <label class=" fs-6 fw-bold form-label mb-2">{{__('link')}}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="text" required class="form-control form-control-solid"
                                    name="contactLink_{{$key}}">
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
                <hr class="col-5" style="color:darkblue">
                <!--begin::Input group-->
                <div class="repeater">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-bold form-label mb-2">{{__('Feedback')}}</label>
                    <!--end::Label-->
                    <div data-repeater-list="feedbacksGroup">
                        <div data-repeater-item>
                            <div class="row mb-10">
                                <!--begin::Col-->
                                <div class="col-12 fv-row">
                                    <!--begin::Row-->
                                    <div class="row fv-row fv-plugins-icon-container">
                                        <!--begin::Col-->
                                        <div class="col-3">
                                            <label class=" fs-6 fw-bold form-label mb-2">{{__('Feedback name')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" required class="form-control form-control-solid"
                                                    name="feedbackName_{{$key}}" value="">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-3">
                                            <label
                                                class=" fs-6 fw-bold form-label mb-2">{{__('Feedback job title')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" required class="form-control form-control-solid"
                                                    name="feedbackJob_{{$key}}" value="">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-3">
                                            <label class=" fs-6 fw-bold form-label mb-2">{{__('Feedback')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <textarea class="form-control form-control-solid" rows="3"
                                                    name="feedback_{{$key}}" required></textarea>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-2">
                                            <label class=" fs-6 fw-bold form-label mb-2">{{__('Image')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="file" name="feedbackImage_{{$key}}">
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-1">
                                            <a data-repeater-delete type="button"
                                                class="btn btn-active-danger font-weight-bold mt-7">
                                                <span class="svg-icon svg-icon-danger svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Trash.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg"
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
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                    </div>
                    <button data-repeater-create type="button" class="btn " style="margin-top: -45px ;">
                        <span class="svg-icon svg-icon-primary svg-icon-3x">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Code/Plus.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                                    <path
                                        d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                </div>
                <!--end::Input group-->
                <hr class="col-5" style="color:darkblue">






                <hr class="pt-2 mt-5">
                @endforeach

                <!--begin::Col-->
                <div class="col-12 fv-row">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold form-label mb-2">{{__('Media')}}</label>
                    <!--end::Label-->
                    <!--begin::Row-->
                    <div class="row fv-row fv-plugins-icon-container">
                        <!--begin::Col-->
                        <div class="col-4">
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">{{__('Home-Page image')}}</span>
                            </label>
                            <!--end::Label-->
                            <input type="file" name="homePageImage">
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-4">
                            <label class=" fs-6 fw-bold form-label mb-2">{{__('Show-page image')}}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="file" name="showPageImage">
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-4">
                            <label class=" fs-6 fw-bold form-label mb-2">{{__('details page video')}}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="file" name="showPageVideo">
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->


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

            </div>
    </div>
</div>
</div>

@endsection

@section('extraJS')
<!-- begin repeater -->
@include('includes.myscripts')
<script>
$(document).ready(function() {
    'use strict';
    window.id = 1;

    $('.repeater').repeater({
        defaultValues: {
            'id': window.id,

        },
        show: function() {
            $(this).slideDown();
            console.log($(this).find('input')[1]);
            $('#cat-id').val(window.id);

        },
        hide: function(deleteElement) {
            if (confirm('هل أنت متأكد من أنك تريد حذف هذا العنصر؟')) {
                window.id--;
                $('#cat-id').val(window.id);

                $(this).slideUp(deleteElement);
                console.log($('.repeater').repeaterVal());
            }
        },
        ready: function(setIndexes) {


        }
    });


});
</script>
<!-- end repeater -->
@endsection