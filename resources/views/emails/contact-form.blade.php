@component('mail::message')
# New Service Inquiry

You have received a new service inquiry from the website contact form.

**Client Details:**
- Name: {{ $data['name'] }}
- Email: {{ $data['email'] }}
- Phone: {{ $data['phone'] }}

**Service Required:**
@if($data['service_type'] === 'other')
- Other (See message for details)
@else
- {{ ucwords(str_replace('_', ' ', $data['service_type'])) }}
@endif

**Message:**
{{ $data['message'] }}

@component('mail::button', ['url' => config('app.url')])
View Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent 