@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => 'https://in2world.net/index.html'])
{{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}
<br>
have a nice day,
in2world
{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} in2world. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
