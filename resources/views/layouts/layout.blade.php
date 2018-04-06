<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css') }}" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <title>Room4Rent</title>

    </head>
<body>

    @yield('content')

<div class="container">
    @yield('footer')
</div>
    <script async defer
    src="//maps.googleapis.com/maps/api/js?key=AIzaSyAN6TE6Vw7wPbgC9-0n2yQIrr9UmrJdVTE&callback=initMap">
      </script>
</body>
</html>
