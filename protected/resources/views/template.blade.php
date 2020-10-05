<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,500' type='text/css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lora:400,700' type='text/css'>
    <link rel="stylesheet" href="{{asset('public/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/jquery-ui.structure.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/jquery-ui.theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/jquery.countdown.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/red.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/plyr.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/jquery.raty.css')}}" />
    <link rel="stylesheet" href="{{asset('public/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('public/css/hotel.style.css')}}">
</head>
<body class="rq-homepage-one">
    <div id="rq-circle-loader-wrapper">
        <div id="rq-circle-loader-center">
            <div class="rq-circle-load"><img src="{{asset('public/img/oval.svg')}}" alt="Page Loader"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="rq-side-menu-overlay"></div>
        @include('sidebar')
        <header>
            <nav class="navbar rq-header-main-menu navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}"><img class="logo" src="{{asset('public/img/logo.png')}}" alt="Dana Tunai"></a>
                    </div>
                    <div id="nav-menu" class="navbar-collapse rq-menu-wrapper collapse" role="navigation">
                        <ul class="nav navbar-nav rq-menus">
                            <li {{request()->segment(1)==''?"class=active":""}}><a href="{{url('/')}}">Home</a></li>
                            <li {{request()->segment(1)=='blog'||request()->segment(1)=='detail'?"class=active":""}}><a href="{{url('blog')}}">Blog</a></li>
                            <li {{request()->segment(1)=='contact'?"class=active":""}}><a href="{{url('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="rq-extra-btns-wrapper">
                        <button id="rq-side-menu-btn" class="cd-btn btn rq-sidemenu-btn"></button>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer class="footer">
            <div class="rq-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="footer-logo">
                                <img src="{{asset('public/img/footer-logo.png')}}" class="img-responsive" alt="Responsive image" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <h5>address</h5>
                            <address>
                                <ul>
                                    <li class="rq-hotel-address"><i class="fa fa-map-marker"></i>Green lake, Hotel plaza <br>new york, USA</li>
                                    <li class="rq-phone"><i class="fa fa-phone"></i>807 302 2186</li>
                                    <li class="rq-email"><i class="fa fa-envelope-o"></i>mail@domain.com</li>
                                </ul>
                            </address>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <h5>useful link</h5>
                            <ul class="rq-footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Booking System</a></li>
                                <li><a href="#">Hotel Services</a></li>
                                <li><a href="#">Booking Agent</a></li>
                                <li><a href="#">Conntact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <h5>newsletter</h5>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            <div class="rq-common-btn">
                            <button class="btn rq-btn-primary" type="submit">submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rq-footer-bottom">
                <div class="container">
                    <div class="row"><p>&copy;Copyright {{date('Y')}}. All right reserved</p></div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{asset('public/js/main.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/js/parallax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpKAwq-qKxzm-9D1405KCFp7ZTtu_Vimg"></script>
    <script src="{{asset('public/js/googleMap.js')}}"></script>
    <script src="{{asset('public/js/customGoogleMap.js')}}"></script>
    <script src="{{asset('public/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('public/js/select2.min.js')}}"></script>
    <script src="{{asset('public/js/icheck.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.raty.js')}}"></script>
    <script src="{{asset('public/js/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{asset('public/js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
</html>
