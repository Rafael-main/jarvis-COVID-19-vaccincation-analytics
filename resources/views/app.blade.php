<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jarvis COVID-19 & Vaccination Tracker</title>

        {{-- icons --}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        {{-- styles --}}
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        {{-- map --}}
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

    </head>
    <body class="antialiased">
        <div id="app"></div>
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
