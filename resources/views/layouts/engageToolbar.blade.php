<!--begin::Drawers-->
<!--begin::Engage toolbar-->
<div
    class="engage-toolbar d-flex position-fixed px-5 fw-bolder zindex-2 top-50 end-0 transform-90 mt-20 mt-lg-20 gap-2">
    <!--begin::Demos drawer toggle- ->
    <button id="kt_engage_demos_toggle"
        class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0"
        title="Check out 20 more demos" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click"
        data-bs-trigger="hover">
        <span id="kt_engage_demos_label">Demos</span>
    </button>
    <!- -end::Demos drawer toggle-->
    <!--begin::Purchase link-->
    <a href="{{route('dashboard.home')}}"
        class="engage-purchase-link btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 px-5 shadow-sm fs-7 px-4  rounded-top-0">{{__('Dashboard Home Page')}}</a>
    <!--end::Purchase link-->
    <!--begin::Purchase link-->
    <a href="{{route('home')}}" target="_blank"
        class="engage-purchase-link btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 px-5 fs-7  shadow-sm rounded-top-0">{{__('Site Home Page')}}</a>
    <!--end::Purchase link-->
</div>
<!--end::Engage toolbar-->