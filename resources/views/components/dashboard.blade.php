<?php 
function endsWith($string, $endString)
{
    $len = strlen($endString);
    if ($len == 0) {
        return true;
    }
    return (substr($string, -$len) === $endString);
}
?><div class="menu-item py-3">
    <a class="menu-link @if(endsWith(URL::current() , 'dashboard')) active  @endif" href="{{route('dashboard.home')}}" title="" data-bs-toggle="tooltip"
        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" data-bs-original-title="{{__('Dashboard Home')}}">
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2x">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </span>
    </a>
</div>

