<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <title>Rony Blog | {{ $title }}</title>
</head>
<body>

  @include('partials.navbar')

  <div class="container">
    @yield('container')
  </div>

    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>