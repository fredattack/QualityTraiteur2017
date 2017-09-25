<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        {{--jquery--}}

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        {{--Bootstrap--}}

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        {{--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">--}}

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <!--
              Scripts
              -->

        <script src="https://unpkg.com/vue"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script  src="{{asset('script/FrontEndScript.js')}}"></script>

          {{-- jsPdf --}}

        <script  src="{{asset('script/jspdf.min.js')}}"></script>
        <script  src="{{asset('script/jspdf.debug.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

         {{--Jssor--}}

        <script src="{{asset('script/docs.min.js')}}"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="{{asset('script/ie10-viewport-bug-workaround.js')}}"></script>

        <!-- jssor slider scripts-->
        <script type="text/javascript" src="{{asset('script/jssor.slider-26.2.0.min.js')}}"></script>

        <!-- FancyBox -->
        <script type="text/javascript" src="{{asset('script/jquery.fancybox.min.js')}}"></script>
        <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />

        <!--
        EndScript
            -->
        <link rel="stylesheet" type="text/css" href="css/homeSlideStyle.css">
        <link rel="stylesheet" type="text/css" href="css/front.css">

        {{--StarRating plugin--}}

        <link rel="stylesheet" type="text/css" href="css/star-rating.css">
        {{--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">--}}
        <script type="text/javascript" src="{{asset('script/star-rating.js')}}"></script>

    </head>
    <header>
        @if (Auth::check())
            @include('menu.menuFrontLogged')
        @else

            @include('menu.menuFrontUnLogged')
        @endif

    </header>
    <body>
    <script>
        initApp();
    </script>
        @yield('menuBt')
        @yield('content')


    </body>
    <footer>
    	@yield('footer')

    </footer>
</html>

