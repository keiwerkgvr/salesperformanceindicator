<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Metrics Solution</title>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/fixes.css')}}">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script>
$(document).ready(function () {
    $('#godown').height($("#ss_fixed_nav").height());
    window.onresize = function () {
        $('#godown').height($("#ss_fixed_nav").height());
    }
});
        </script>
        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>


        <!-- Begin page content -->
        <div class="container-fluid">
            <div class="row" style="height: 140px;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <nav class="navbar-default navbar-fixed-top" id="ss_fixed_nav">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle Navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="{{ url('/')}}">
                                    <img class="hidden-xs hidden-sm img-responsive" src="{{ asset('/images/modLogo.png') }}" alt="logo description" />
                                    <img class="hidden-xs visible-sm img-responsive" src="{{ asset('/images/modLogo-half.png') }}" alt="logo description" />
                                    <img class="visible-xs img-responsive" src="{{ asset('/images/modLogo-small.png') }}" alt="logo description" />
                                </a>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
							<li><img class="img-responsive" src="/images/presented-edited.png" />&nbsp;</li>
                               </ul>
                           </div>
                        </div>
                    </nav>
                    <div id="godown"></div>
                </div>
            </div>
            <div class="page-header" id="banner">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h2 class="marg-top-15"><img src="{{ asset('/images/GAGTLogo.JPG') }}" /></h2>
                    </div>
                </div>
            </div>
            @yield('content')

        </div>
        <div class="container-fluid">
            <footer>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="list-unstyled">
                            <li>
                                <div class="footer-copyright">
                                    <div class="container text-center">
                                        Sales Performance Indicator | &copy; 2015 Good as Gold Training, All rights reserved.<br />
                                        <a class="grey-text text-lighten-4 right" href="mailto:support@staffingandrecruiting.com">support@staffingandrecruiting.com | 219 663 9609</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>

        <style>
            .navbar-nav > li > a {
                line-height: 80px;
            }
            @media (max-width: 767px) {
                .navbar-nav .open .dropdown-menu > li > a {
                    line-height: 60px;
                }
            }

        </style>
    </body>
</html>
