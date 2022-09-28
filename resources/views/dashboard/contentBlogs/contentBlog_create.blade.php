@extends('dashboard/parent')

@section('extraCSS')
<script src="https://cdn.tiny.cloud/1/fj1heforr21wxekb8y8rhb3ec0om9vrevx1od8xkg3ko9xc1/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
@endsection

@section('pageName'){{__('Content Blogs')}} @endsection

@section('pagePath'){{__('dashboard')}}--{{__('Create Content Blogs')}} @endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container-xxl" id="kt_content_container">
        <div class="card card-flush h-lg-100 m-7">
            <!--begin::Modal header-->
            <div class="card-header pt-6">
                <!--begin::Modal title-->
                <h2>{{__('add new content Blog')}}</h2>
                <!--end::Modal title-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="card-body mx-5 ">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="{{route('contentBlog.store')}}" method="post" enctype="multipart/form-data"> @csrf
                    @foreach(config('languages') as $key=>$value)
                    <h3 style="color:cornflowerblue">{{$value}}</h3>
                    <!--begin::Input group-->
                    <div class="d-flex flex-column  fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">{{__('content blog name')}}</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" required class="form-control form-control-solid"
                            placeholder="{{__('Enter content blog name')}}" name="name_{{$key}}" value="">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column  fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('content Blog details')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" required class="form-control form-control-solid"
                                placeholder="{{__('Enter content Blog details')}}" name="details_{{$key}}" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--begin::Input group-->
                    <div class="d-flex flex-column  fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('content Blog keywords (add \',\'between kywords)')}}</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input required type="text" required class="form-control form-control-solid"
                                placeholder="{{__('Enter content Blog keywords')}}" name="keywords_{{$key}}" value="">
                            <!--end::Input-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="d-flex flex-column  fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class=" fs-6 fw-bold form-label mb-2">{{__('content Blog page')}}</label>
                    </div>

                    
                    <textarea name="content_{{$key}}" id="content_{{$key}}"></textarea>
                    <hr>
                    <script>
                       
                    tinymce.init({
                        selector: '#content_<?php echo $key?>', 
                        plugins: [ 'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview' ,'table'],
                     toolbar: 'align advlist autolink link image lists charmap preview image editimage pageembed permanentpen table tableofcontents',
                        language: '<?php echo $key ?>'
                    });
                    </script>

                    @endforeach
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column  fv-row fv-plugins-icon-container">
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

            </div>
        </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Modal body-->
</div>

<!--end::Modal content-->

@endsection

@section('extraJS')
@endsection