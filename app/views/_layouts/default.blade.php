<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Reef Stuff</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="layout" content="main"/>


    <link href="/site/css/bootstrap.min.css" type="text/css" media="screen, projection" rel="stylesheet" />
    <link href="/site/css/bootstrap-theme.min.css" type="text/css" media="screen, projection" rel="stylesheet" />
    <link href="/site/css/main.css" type="text/css" media="screen, projection" rel="stylesheet" />
    <style>
    </style>
</head>
<body>
        @include('_partials.navigation_main')
        <div class="clear"></div>

        @yield('page container')
        @include('_partials.footer_main')
</body>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script src="/js/jquery/jquery-1.11.3.min.js" type="text/javascript" ></script>
<script src="/site/js/bootstrap.min.js" type="text/javascript" ></script>
<script src="/site/js/main.js" type="text/javascript" ></script>
</html>