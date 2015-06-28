<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'BD Devs Club')</title>

    <link rel="stylesheet" href="/static/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/static/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="/static/css/style.css"/>

    <script src="/static/js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="/static/js/bootstrap.min.js" type="text/javascript"></script>


</head>
<body>

@include('navbar')

@yield('body')

</body>
</html>
