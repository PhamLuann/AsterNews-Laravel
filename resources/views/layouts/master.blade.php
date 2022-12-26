<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    <script src="{{asset('./js/main.js')}}" async></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <title>@yield('title')</title>
</head>

<body class="bg-mainbg">
<div class="lg:grid lg:grid-cols-5 lg:gap-11 relative">
    @include('partials.left-side')
    <div class="col-span-4 mt-4 mr-4 ml-4 lg:ml-0">
        @include('partials.header')
        <div class="lg:grid lg:grid-cols-4 lg:gap-11">
            <div class="col-span-3">
                @include('partials.category')
                @yield('content')
            </div>
            @include('partials.right-side')
        </div>
    </div>
</div>
@include('partials.footer')
@include('partials.modal')
@include('partials.script')
@include('admin.partials.js')
</body>

</html>
