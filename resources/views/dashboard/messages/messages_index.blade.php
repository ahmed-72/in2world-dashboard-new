@extends('dashboard/parent')

@section('extraCSS')
@endsection

@section('pageName') {{__('messages')}} @endsection

@section('pagePath') {{__('dashboard')}}--{{__('messages')}} @endsection

@section('content')

<div class="card m-5 mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">{{__('Recent Messages')}}</span>
            <span class="text-muted mt-1 fw-bold fs-7">{{__('you have')}} {{$messages->count()}} {{__('messages waiting to review')}}</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bolder text-gray-700 bg-light rounded-lg">

                        <th class="min-w-120px">{{__('Name')}}</th>
                        <th class="min-w-120px">{{__('Company Name')}}</th>
                        <th class="min-w-120px">{{__('Email')}}</th>
                        <th class="min-w-120px">{{__('Budget')}}</th>
                        <th class="min-w-120px">{{__('Details')}}</th>
                        <th class="min-w-120px">{{__('Created At')}}</th>
                        <th class="min-w-120px">{{__('Reply')}}</th>

                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    @foreach($messages as $message)
                    <tr>
                        <td>
                            <div class="text-dark fw-bolder text-hover-primary fs-6">{{$message->name}}</div>
                        </td>
                        <td>
                            <div class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$message->companyName}}
                            </div>
                        </td>
                        <td>
                            <div class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$message->email}}</div>
                        </td>
                        <td>
                            <div class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$message->budget}}</div>
                        </td>
                        <td class="text-dark fw-bolder text-hover-primary fs-6">{{$message->details}}</td>
                        <td class="text-dark fw-bolder text-hover-primary fs-6">{{$message->created_at->DiffForHumans()}}</td>
                        <td class="text-exnd">
                            <a href="#"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                    data-bs-toggle="modal" id="reply_message"
                                    data-bs-target="#kt_modal_reply_message"
                                    data-id-id="{{$message->id}}"
                                    data-id-email="{{$message->email}}">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                <span class="svg-icon svg-icon-2x">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Sending mail.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M4,16 L5,16 C5.55228475,16 6,16.4477153 6,17 C6,17.5522847 5.55228475,18 5,18 L4,18 C3.44771525,18 3,17.5522847 3,17 C3,16.4477153 3.44771525,16 4,16 Z M1,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L1,13 C0.44771525,13 6.76353751e-17,12.5522847 0,12 C-6.76353751e-17,11.4477153 0.44771525,11 1,11 Z M3,6 L5,6 C5.55228475,6 6,6.44771525 6,7 C6,7.55228475 5.55228475,8 5,8 L3,8 C2.44771525,8 2,7.55228475 2,7 C2,6.44771525 2.44771525,6 3,6 Z" fill="#000000" opacity="0.3"></path>
                                            <path d="M10,6 L22,6 C23.1045695,6 24,6.8954305 24,8 L24,16 C24,17.1045695 23.1045695,18 22,18 L10,18 C8.8954305,18 8,17.1045695 8,16 L8,8 C8,6.8954305 8.8954305,6 10,6 Z M21.0849395,8.0718316 L16,10.7185839 L10.9150605,8.0718316 C10.6132433,7.91473331 10.2368262,8.02389331 10.0743092,8.31564728 C9.91179228,8.60740125 10.0247174,8.9712679 10.3265346,9.12836619 L15.705737,11.9282847 C15.8894428,12.0239051 16.1105572,12.0239051 16.294263,11.9282847 L21.6734654,9.12836619 C21.9752826,8.9712679 22.0882077,8.60740125 21.9256908,8.31564728 C21.7631738,8.02389331 21.3867567,7.91473331 21.0849395,8.0718316 Z" fill="#000000"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<div class="card m-5 mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">{{__('Recent Service Requsets')}}</span>
            <span class="text-muted mt-1 fw-bold fs-7">{{__('you have')}} {{$serviceRequests->count()}} {{__('Service Requsets waiting to review')}}</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bolder text-gray-700 bg-light rounded-lg">

                        <th class="min-w-120px">{{__('Name OR Company Name')}}</th>
                        <th class="min-w-120px">{{__('Email')}}</th>
                        <th class="min-w-120px">{{__('Country')}}</th>
                        <th class="min-w-120px">{{__('Created At')}}</th>
                        <th class="min-w-120px">{{__('Services')}}</th>
                        <th class="min-w-120px">{{__('Requirements')}}</th>
                        <th class="min-w-120px">{{__('Reply')}}</th>

                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    @foreach($serviceRequests as $serviceRequest) 
                    <tr>
                        <td>
                            <div class="text-dark fw-bolder text-hover-primary fs-6">{{$serviceRequest->name}}</div>
                        </td>
                        <td>
                            <div class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$serviceRequest->email}}
                            </div>
                        </td>
                        <td>
                            <div class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$serviceRequest->country}}</div>
                        </td>
                        <td>
                            <div class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$serviceRequest->created_at->DiffForHumans()}}</div>
                        </td>
                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                            <ul>
                                @foreach($serviceNames[$serviceRequest->id] as $service)
                                <li>{{$service}}</li> 
                                @endforeach
                            </ul></td>
                        <td class="text-dark fw-bolder text-hover-primary fs-6">{{$serviceRequest->Requirements}}</td>
                        <td class="text-exnd">
                            <a href="#"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                    data-bs-toggle="modal" id="reply_serviceRequest"
                                    data-bs-target="#kt_modal_reply_service_request"
                                    data-id-id="{{$serviceRequest->id}}"
                                    data-id-email="{{$serviceRequest->email}}">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                <span class="svg-icon svg-icon-2x">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Sending mail.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M4,16 L5,16 C5.55228475,16 6,16.4477153 6,17 C6,17.5522847 5.55228475,18 5,18 L4,18 C3.44771525,18 3,17.5522847 3,17 C3,16.4477153 3.44771525,16 4,16 Z M1,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L1,13 C0.44771525,13 6.76353751e-17,12.5522847 0,12 C-6.76353751e-17,11.4477153 0.44771525,11 1,11 Z M3,6 L5,6 C5.55228475,6 6,6.44771525 6,7 C6,7.55228475 5.55228475,8 5,8 L3,8 C2.44771525,8 2,7.55228475 2,7 C2,6.44771525 2.44771525,6 3,6 Z" fill="#000000" opacity="0.3"></path>
                                            <path d="M10,6 L22,6 C23.1045695,6 24,6.8954305 24,8 L24,16 C24,17.1045695 23.1045695,18 22,18 L10,18 C8.8954305,18 8,17.1045695 8,16 L8,8 C8,6.8954305 8.8954305,6 10,6 Z M21.0849395,8.0718316 L16,10.7185839 L10.9150605,8.0718316 C10.6132433,7.91473331 10.2368262,8.02389331 10.0743092,8.31564728 C9.91179228,8.60740125 10.0247174,8.9712679 10.3265346,9.12836619 L15.705737,11.9282847 C15.8894428,12.0239051 16.1105572,12.0239051 16.294263,11.9282847 L21.6734654,9.12836619 C21.9752826,8.9712679 22.0882077,8.60740125 21.9256908,8.31564728 C21.7631738,8.02389331 21.3867567,7.91473331 21.0849395,8.0718316 Z" fill="#000000"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>

<!--begin::Modal message -->
<div class="modal fade" id="kt_modal_reply_message" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('reply message')}}</h2>
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
                    action="{{route('replyMessage.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control form-control-solid" hidden name="messageID"
                        id="messageID" value="">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('TO')}}:</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" readonly
                            name="email" id="email" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>

                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('enter message to send')}}:</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <textarea type="text" class="form-control form-control-solid"
                                placeholder="{{__('Enter message body')}}" name="messageBody" value=""></textarea>
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
<!--end::Modal  message-->
<!--begin::Modal service_request-->
<div class="modal fade" id="kt_modal_reply_service_request" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content"> 
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('reply message')}}</h2>
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
                    action="{{route('serviceRequestReply.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <input type="text" class="form-control form-control-solid" hidden name="id"
                        id="serviceRequestID" value="">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('TO')}}:</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" readonly
                            name="email" id="serviceRequestemail" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>

                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('enter message to send')}}:</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <textarea type="text" class="form-control form-control-solid"
                                placeholder="{{__('Enter message body')}}" name="messageBody" value=""></textarea>
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
<!--end::Modal edit service_request--> 
@endsection

@section('extraJS')
<script>
    $('#kt_modal_reply_message').on('show.bs.modal', function(e) {
    var replyMessageID = $(e.relatedTarget).attr('data-id-id');
    document.getElementById("messageID").value = replyMessageID;
    var replyMessageEmail = $(e.relatedTarget).attr('data-id-email');
    document.getElementById("email").value = replyMessageEmail;
}); 
    $('#kt_modal_reply_service_request').on('show.bs.modal', function(e) {
    var serviceRequestID = $(e.relatedTarget).attr('data-id-id');
    document.getElementById("serviceRequestID").value = serviceRequestID;
    var serviceRequestEmail = $(e.relatedTarget).attr('data-id-email');
    document.getElementById("serviceRequestemail").value = serviceRequestEmail;
}); 
</script>

@endsection