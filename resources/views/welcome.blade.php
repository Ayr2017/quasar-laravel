<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet" 
        type="text/css"> 
    <link href="https://cdn.jsdelivr.net/npm/quasar@1.12.8/dist/quasar.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="{{ asset('css/quasar.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/roboto.css') }}" rel="stylesheet" type="text/css"> -->

</head>

<body>
    <app id="q-app"></app>
    <script src="https://cdn.jsdelivr.net/npm/vue@^2.0.0/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quasar@1.12.8/dist/quasar.umd.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
