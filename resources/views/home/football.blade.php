<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Football</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

</head>

<body>

    <!-- Start your project here-->
    <!--Main Navigation-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark scrolling-navbar">
        <a class="navbar-brand" href="{{route('home')}}"><strong>GameZone</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('all')}}">All Game <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Main Navigation-->

    <!--Carousel Wrapper-->
    <div class="container-fluid">

        <div class="row align-items-center">
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox" style="height: 500px;position-fixed">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="col-lg-12 mb-3 text-center p-0 d-flex align-items-center">
                            <img class="d-block w-100" src="/img/carousel/farcry4-1.jpg" alt="First slide">
                            <h1 class="w-100 position-absolute text-white my-auto animated fadeInUp"><b>Far Cry
                                    4</b><br>The
                                New
                                Game Play.</h1>
                        </div>
                    </div>
                    <!--/First slide-->
                    <!--Second slide-->
                    <div class="carousel-item ">
                        <div class="col-lg-12 mb-3 text-center p-0 d-flex align-items-center">
                            <img class="d-block w-100" src="/img/carousel/farcry4.jpg" alt="Second slide">
                            <h1 class="w-100 position-absolute text-white my-auto animated fadeInUp"><b>Far Cry
                                    4</b><br>New
                                Featured Game Play</h1>
                        </div>
                    </div>
                    <!--/Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item">
                        <div class="col-lg-12 mb-3 text-center p-0 d-flex align-items-center">
                            <img class="d-block w-100" src="/img/carousel/gta5.jpg" alt="Second slide">
                            <h1 class="w-100 position-absolute text-white my-auto animated fadeInUp"><b>GTA V</b><br>New
                                Featured
                                Game Play</h1>
                        </div>
                    </div>
                    <!--/Third slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
        </div>
        <!--/.Carousel Wrapper-->


        <!-- All GAME  -->
        <hr>
        <div class="row">
        <div class="col-md-8">
        <h2 style="padding-top:100px" data-aos="fade-left">Football Game</h2>
        </div>
            <div class="col-md-4">
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <form action="/category/football/search" method="get">
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search">
                                <span class="input-group-append">
                                    <button class="btn btn-dark" type="submit">Search!</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="row">
            @foreach($liat as $li)
            @if($li->genre=="football")
            <div class="col-md-3 animated fadeInRight delay-1s">
                <!-- Card Light -->
                <div class="card mb-4">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{$li->featured_image}}" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Social shares button -->
                        <a class="activator waves-effect waves-light mr-4"><i class="fas fa-share-alt"></i></a>
                        <!-- Title -->
                        <h4 class="card-title">{{$li->title}}</h4>
                        <hr>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's
                            content.</p>
                        <!-- Link -->
                        <a href="/article/{{$li->id}}" class="black-text d-flex justify-content-end">
                            <h5>Read more <i class="fas fa-angle-double-right"></i></h5>
                        </a>

                    </div>

                </div>
            </div>
            @endif
            @endforeach
        </div>

        <!-- Footer -->
        <div class="row align-items-center" style="padding-top:20px">
            <div style="width:100%">
                <footer class="page-footer font-small unique-color-dark pt-4">

                    <!-- Footer Elements -->


                    <!-- Call to action -->
                    <ul class="list-unstyled list-inline text-center py-2">
                        <li class="list-inline-item">
                            @if(empty(Auth::user()))
                            <h5 class="mb-1">Register for free</h5>
                            @endif
                            @if(!empty(Auth::user()))
                            <h5 class="mb-1">Hello! {{Auth::user()->email}}</h5>
                            @endif
                        </li>
                        <li class="list-inline-item">
                            @if(empty(Auth::user()))
                            <a href="{{route('register')}}" class="btn btn-outline-white btn-rounded"
                                data-aos="zoom-in">Sign up!</a>
                            @endif
                            @if(!empty(Auth::user()))
                            <a href="{{route('logout')}}" class="btn btn-outline-white btn-rounded"
                                data-aos="zoom-in">Log Out</a>
                            @endif
                        </li>
                    </ul>
                    <!-- Call to action -->
                    <!-- Footer Elements -->

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3">© 2020 Copyright:
                        <a href="">Pamungkas</a>
                    </div>
                    <!-- Copyright -->

                </footer>
            </div>
        </div>
        <!-- Footer -->

        <!-- End your project here-->

        <!-- jQuery -->
        <script type="text/javascript" src="js/jquery.min.js">
            $(".wow").addClass("fadeInUp");

        </script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Your custom scripts (optional) -->
        <script type="text/javascript"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();

        </script>
</body>

</html>
