<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('CSS/style.css')}}" />
    <link rel="stylesheet" href="sweetalert2.min.css">

    <title> {{config("app.name")}} - @yield('title')</title>
</head>

<body>
@yield('content')
    <script src="{{ asset ('JS/alert.js')}}"></script>
    <script src="sweetalert2.min.js"></script>
</body>

</html>