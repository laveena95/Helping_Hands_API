@component('mail::message')
Hello {{$email_data['name']}}!,
Hello {{$email_data['name']}}!,

Welcome to Helping Hands!

Please click the below link to verify your email and activate your account!

@component('mail::button', ['url' => "http://localhost/Internship/Helping_Hands_API/public/verify?code={{$email_data['verification_code']}}"])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
