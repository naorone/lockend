<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    @include('partials.head')
        <body data-spy="scroll" data-target="#navbar" data-offset="120" >

            @include('partials.header')
            @include('partials.loginModal')
            @yield('content')
            @include('partials.footer')

            <script src="js/jquery-2.1.3.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

            <script src="js/jquery.actual.min.js"></script>
            <script src="js/jquery.scrollTo.min.js"></script>
            <script src="js/vendor/bootstrap.min.js"></script>

            <script src="js/main.js"></script>

        </body>
</html>

