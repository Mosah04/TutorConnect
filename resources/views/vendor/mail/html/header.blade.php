@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="http://tutorconnect.test/img/TutoConn.png" class="logo" alt="TutorConnect Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
