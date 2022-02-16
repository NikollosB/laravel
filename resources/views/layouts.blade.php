<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - {{ ucfirst($title) }}</title>
</head>
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}" class="href">
<body>
<ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contacts">Contacts</a></li>
        <li><a href="/article">Articole</a></li>
        <li><a href="/nicuu">Nicuu</a></li>
</ul>
@yield('content')



</body>
</html>