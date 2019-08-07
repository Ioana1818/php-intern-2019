@component('mail::message')
# Name: {{$newuser->name}}

For regisdtration please validate your mail. 
Press the button below.

@component('mail::button', ['url' => env('APP_URL').'validate/'.$newuser->validate_url])
Validate email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
