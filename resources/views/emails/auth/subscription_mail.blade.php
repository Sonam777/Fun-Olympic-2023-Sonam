<x-mail::message>
Hello Sir/Mam,

<div style="text-align: justify">
    {!! $email->message !!}
</div>

<x-mail::button :url="route('index')">
Visit Website
</x-mail::button>

Thanks,<br>
{{ $profile->company_name }}
<br><br>
For any enquiries: <a href="{{ $profile->company_phone }}">{{ $profile->company_phone }}</a>
<br>
Address: {{ $profile->company_address }}
</x-mail::message>
