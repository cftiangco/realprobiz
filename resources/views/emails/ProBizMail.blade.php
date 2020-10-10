<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Real Pro Biz</title>
  </head>
  <body>
    <h1>{{ $details['subject']}}</h1>
    <p>Name: {{ $details['fullname'] }}</p>
    <p>Email: {{ $details['email'] }}</p>

    <h4>Subject {{ $details['subject'] }}</h4>
    <h5>Message</h5>
    <div>
      {{ $details['message'] }}
    </div>
  </body>
</html>
