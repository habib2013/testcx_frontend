@component('mail::message')
# Congratulations

Hello {{ $subscriber->fullname }}!

You have successfully registered and your payment status was successful, we will get back to you via email

Thanks,<br>
{{ config('app.name') }}
@endcomponent
