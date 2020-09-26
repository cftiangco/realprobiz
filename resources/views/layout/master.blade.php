<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Real Pro Biz Admin</title>
    <link href="{{ asset('bootstrap-4.3.1/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>

  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="/">
      <img src="/" width="30" height="30" class="d-inline-block align-top" alt="">
      Real Pro Biz Admin
    </a>
  </nav>

    <div class="container-fluid">
      @yield('content')
    </div>

  <script src="{{ asset('warehouse/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('bootstrap-4.3.1/js/bootstrap.js') }}"></script>
  </body>
</html>
