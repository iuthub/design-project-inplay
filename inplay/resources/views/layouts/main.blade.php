<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/fullpage.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/mainPage.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
   
    @yield('content')
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fullpage.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fullpageScript.js') }}"></script>   
</body>
</html>