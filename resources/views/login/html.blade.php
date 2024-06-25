<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    <video class="video-background" autoplay loop muted playsinline>
        <source src="https://cdn.pixabay.com/video/2019/02/13/21368-317182818_large.mp4" type="video/mp4">
        Your browser does not support video background.
    </video>

    @include('button')

    @yield('isi')
</body>

</html>
