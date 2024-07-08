<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--  Favicon--><link rel="shortcut icon" href="{{asset('assest/Biz.png')}}" type ="image/x-icon">
        <title>BizNest Messenger</title>
        <!-- Scripts -->
            @vite(['resources/css/app.css','resources/js/app.js'])
    </head>


    <body class="font-sans bg-white">

    <div id ='chatapp'></div>
    </body>
</html>
