<!doctype html>

<html>
<head>
    <title>Hello </title>
</head>

<body>
<h1>New User registered!</h1>
<br>
<p>Fullname: {{ $subscriber->fullname }}</p>
<br>
<p>Email: {{ $subscriber->email }}</p>
<br>
<p>Phone: {{ $subscriber->phone }}</p>
<br>
<p>last4: {{ $subscriber->last4 }}</p>
<br>
<p>Account type: {{ $subscriber->accounttype }}</p>
<br>
<p>Work Status: {{ $subscriber->work_status }}</p>
<br>
<p>Preference: {{ $subscriber->preference }}</p>
<br>
<p>How often: {{ $subscriber->how_often }}</p>
<br>
<p>How you travel: {{ $subscriber->how_you_travel }}</p>
<br>
<p>Payment status: Successful</p>

</body>
</html>
