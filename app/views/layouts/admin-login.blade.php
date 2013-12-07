<!DOCTYPE html>
<html>
    <head>
        <title>Administrator - {{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
        {{ HTML::style('assets/css/admin-login.css') }}
    </head>
    <body>        
        <div class="container">
            @yield('content')
        </div>
        @include('commons.admin.footer')

        {{ HTML::script('assets/js/jquery.js') }}
        {{ HTML::script('assets/js/bootstrap.min.js') }}        
    </body>
</html>