<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$title; ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>
<body>
<ul>
    <li><a href="./">Home</a> </li>
    <li><a href="./about">About</a> </li>
</ul>
<div class="content">@yield('content')</div>
<p>Logo &COPY; 2017</p>
</body>
</html>
