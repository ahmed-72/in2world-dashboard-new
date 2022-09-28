<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{asset('assets/media/logos/in2World-croped.jpg')}}" class="logo" alt="in2world Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
