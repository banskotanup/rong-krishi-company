<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/logo.png">
    @include('home.loader.custom_loader_css')
    <title>Home Page</title>
</head>

<body>
    @include('home.loader.loader')
    <h2>Hi, This is home page...</h2>
    <H2>Welcome, {{ Auth::user()->name ?? 'Guest'}}</H2>
    <p><a href="{{url('log_out')}}">Logout</a></p>

    @include('home.loader.custom_loader_js')
    
</body>

</html>