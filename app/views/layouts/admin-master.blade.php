<!DOCTYPE html>
<html>
    <head>
        <title>Administrator - {{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style('assets/css/bootstrap.css') }}
        {{ HTML::style('assets/font-awesome/css/font-awesome.css') }}
        {{ HTML::style('assets/css/admin-master.css') }}
    </head>
    <body>
        @inlude('commons.admin.navbar')
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('commons.admin.sidenav')
                    @include('commons.admin.activitylog')
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Panel heading without title</div>
                                <div class="panel-body">
                                    Panel content
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Panel heading without title</div>
                                <div class="panel-body">
                                    Panel content
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('commons.admin.footer')

        {{ HTML::style('assets/js/jquery.js') }}
        {{ HTML::style('assets/js/bootstrap.min.js') }}        
        {{ HTML::style('assets/js/admin-master.js') }}        
    </body>
</html>