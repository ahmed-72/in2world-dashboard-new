@extends('dashboard/parent')


@section('extraCSS')
@endsection

@section('pageName'){{__('Users')}} @endsection

@section('pagePath'){{__('dashboard')}}--{{__('All Users')}} @endsection

@section('content')
<div class="card m-5 mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">{{__('Users')}}</span>
        </h3>
        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="" data-bs-original-title="Click to add a user">
            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_user">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
                    </svg>
                </span>
                <!--end::Svg Icon-->{{__('New User')}}
            </a>
        </div>
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

                        <th class="min-w-120px">{{__('ID')}}</th>
                        <th class="min-w-120px">{{__('Name')}}</th>
                        <th class="min-w-120px">{{__('Email')}}</th>
                        <th class="min-w-120px">{{__('Created At')}}</th>
                        <th class="min-w-120px">{{__('Actions')}}</th>

                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            <div class="text-dark fw-bolder text-hover-primary fs-6">{{$user->id}}</div>
                        </td>
                        <td>
                            <div class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$user->name}}
                            </div>
                        </td>
                        <td>
                            <div class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$user->email}}</div>
                        </td>
                        <td class="text-dark fw-bolder text-hover-primary fs-6">{{$user->created_at->DiffForHumans()}}
                        </td>
                        <td class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <span class="badge badge-light fw-bolder my-2">
                                <a href="{{route('user.show',$user->id)}}">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                                <path
                                                    d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                    fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </span>
                            <form action="{{route('user.destroy',$user->id)}}" method="post">
                                @csrf @method('delete')
                                <button type="submit" class="badge badge-light fw-bolder my-2" style="border:none"
                                    onclick="return confirm('Are you sure you want to delete this row?')">
                                    <span class="svg-icon svg-icon-danger svg-icon-2x">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                    fill="#000000" fill-rule="nonzero"></path>
                                                <path
                                                    d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                    fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
            {{$users->links()}}
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--begin::Modal new user -->
<div class="modal fade" id="kt_modal_new_user" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>{{__('New User')}}</h2>
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
                    action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('Name')}}</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" name="name" id="name" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group--> 
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('Email')}}</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" name="email" id="email" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                     <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('password')}}</span>
                        </label>
                        <!--end::Label-->
                        <input type="password" class="form-control form-control-solid" name="password" id="password" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('confirm password')}}</span>
                        </label>
                        <!--end::Label-->
                        <input type="password" class="form-control form-control-solid" name="password_confirmation" id="password_confirmation" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="d-flex flex-column mb-2 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="">{{__('User type')}}</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-select form-select-solid " name="type" id="type">
                            <option value="user" selected>user</option>
                            <option value="admin">admin</option>
                            <option value="super-admin">super-admin</option>
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                     <!--end::Input group-->
                     <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2 required">{{__('User-Roles')}}</label>
                        <!--end::Label-->
                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7" data-select2-id="select2-data-118-piq0">
                            <!--begin::User-->
                            @foreach($roles as $role)
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <div class="ms-5">
                                        <div class="fs-6 fw-bolder text-gray-900 text-hover-primary mb-2">
                                           {{$role->name}}</div>
                                    </div>
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->

                                <div class="ms-2 w-100px">
                                    <input type="checkbox" name="roleUser[]" id="" value="{{$role->id}}" >
                                </div>

                                <!--end::Access menu-->
                            </div>
                            @endforeach
                            <!--end::User-->
                        </div>
                        <!--end::List-->
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
<!--end::Modal new user -->
@endsection

@section('extraJS')
@endsection