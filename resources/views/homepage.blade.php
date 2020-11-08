<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GameZone</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<style>
body { overflow-x: hidden; }
</style>

<body>

        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark scrolling-navbar">
            <a class="navbar-brand" href="{{route('home')}}"><strong>GameZone</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
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

    <!-- Start your project here-->

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
                        <div class="col-md-12 mb-3 text-center p-0 d-flex align-items-center">
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
                        <div class="col-md-12 mb-3 text-center p-0 d-flex align-items-center">
                            <img class="d-block w-100" src="/img/carousel/farcry4.jpg" alt="Second slide">
                            <h1 class="w-100 position-absolute text-white my-auto animated fadeInUp"><b>Far Cry
                                    4</b><br>New
                                Featured Game Play</h1>
                        </div>
                    </div>
                    <!--/Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item">
                        <div class="col-md-12 mb-3 text-center p-0 d-flex align-items-center">
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


        <!-- Top GAME  -->
        <div class="row text-left" style="padding-top:50px">
            <div class="col-md-12">
                <h2 style="padding-bottom:10px" class="animated fadeInRight">Top Game 2020</h2>
            </div>
        </div>
        <div class="row">
            @foreach($liat as $li)
            @if($li->category=='top')
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

        <!-- New GAME  -->
        <hr>
        <div class="row text-right" style="padding-top:30px">
            <div class="col-md-12">
                <h2 style="padding-bottom:10px" data-aos="fade-left">New Game 2020</h2>
            </div>
        </div>

        <div class="row">
            @foreach($liat as $li)
            @if($li->category=='new')
            <div class="col-md-3 animated " data-aos="fade-left">
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

        <!-- Jumbotron -->

        <div class="row">
            <div class="col-md-12 jobs_index_middle_panels">
                <div class="card card-image" data-aos="fade-right"
                    style="background-image: url(/img/jumbotron/football.jpg)">
                    <div class="text-white text-center rgba-stylish-strong py-5 px-4">
                        <div class="py-5">
                            <!-- Content -->
                            <h5 class="h5 orange-text"><i class="fas fa-camera-retro" data-aos="fade-right"></i> GameZone
                            </h5>
                            <h2 class="card-title h2 my-4 py-2" data-aos="fade-right">Football Game</h2>
                            <p class="mb-4 pb-2 px-md-5 mx-md-5" data-aos="fade-right">Lorem, ipsum dolor sit amet
                                consectetur adipisicing elit. Nisi autem modi velit et ea ipsum nihil ullam fugiat nobis
                                odio? Aspernatur quis iusto aperiam totam odio maxime ratione architecto error!</p>
                            <a class="btn peach-gradient" href="/category/football"><i class="fas fa-clone left"></i> View Game</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 jobs_index_middle_panels">
                <div class="card card-image" data-aos="fade-left"
                    style="background-image: url(/img/jumbotron/shooting.jpg)">
                    <div class="text-white text-center rgba-stylish-strong py-5 px-4">
                        <div class="py-5">
                            <!-- Content -->
                            <h5 class="h5 orange-text"><i class="fas fa-camera-retro" data-aos="fade-left"></i> GameZone
                            </h5>
                            <h2 class="card-title h2 my-4 py-2" data-aos="fade-left">Shooting Game</h2>
                            <p class="mb-4 pb-2 px-md-5 mx-md-5" data-aos="fade-left">Lorem, ipsum dolor sit amet
                                consectetur adipisicing elit. Nisi autem modi velit et ea ipsum nihil ullam fugiat nobis
                                odio? Aspernatur quis iusto aperiam totam odio maxime ratione architecto error!</p>
                            <a class="btn peach-gradient" href="/category/shooting"><i class="fas fa-clone left"></i> View Game</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 jobs_index_middle_panels">
                <div class="card card-image" data-aos="fade-right"
                    style="background-image: url(/img/jumbotron/adventure.jpg)">
                    <div class="text-white text-center rgba-stylish-strong py-5 px-4">
                        <div class="py-5">
                            <!-- Content -->
                            <h5 class="h5 orange-text"><i class="fas fa-camera-retro" data-aos="fade-right"></i> GameZone
                            </h5>
                            <h2 class="card-title h2 my-4 py-2" data-aos="fade-right">Adventure Game</h2>
                            <p class="mb-4 pb-2 px-md-5 mx-md-5" data-aos="fade-right">Lorem, ipsum dolor sit amet
                                consectetur adipisicing elit. Nisi autem modi velit et ea ipsum nihil ullam fugiat nobis
                                odio? Aspernatur quis iusto aperiam totam odio maxime ratione architecto error!</p>
                            <a class="btn peach-gradient" href="category/adventure"><i class="fas fa-clone left"></i> View Game</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 jobs_index_middle_panels">
                <div class="card card-image" data-aos="fade-left"
                    style="background-image: url(/img/jumbotron/racing.jpg)">
                    <div class="text-white text-center rgba-stylish-strong py-5 px-4">
                        <div class="py-5">
                            <!-- Content -->
                            <h5 class="h5 orange-text"><i class="fas fa-camera-retro" data-aos="fade-left"></i> GameZone
                            </h5>
                            <h2 class="card-title h2 my-4 py-2" data-aos="fade-left">Racing Game</h2>
                            <p class="mb-4 pb-2 px-md-5 mx-md-5" data-aos="fade-left">Lorem, ipsum dolor sit amet
                                consectetur adipisicing elit. Nisi autem modi velit et ea ipsum nihil ullam fugiat nobis
                                odio? Aspernatur quis iusto aperiam totam odio maxime ratione architecto error!</p>
                            <a class="btn peach-gradient" href="/category/racing"><i class="fas fa-clone left"></i> View Game</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 jobs_index_middle_panels">
                <div class="card card-image" data-aos="fade-right"
                    style="background-image: url(/img/jumbotron/all.jpg)">
                    <div class="text-white text-center rgba-stylish-strong py-5 px-4">
                        <div class="py-5">
                            <!-- Content -->
                            <h5 class="h5 orange-text"><i class="fas fa-camera-retro" data-aos="fade-right"></i> GameZone
                            </h5>
                            <h2 class="card-title h2 my-4 py-2" data-aos="fade-right">All Game</h2>
                            <p class="mb-4 pb-2 px-md-5 mx-md-5" data-aos="fade-right">Lorem, ipsum dolor sit amet
                                consectetur adipisicing elit. Nisi autem modi velit et ea ipsum nihil ullam fugiat nobis
                                odio? Aspernatur quis iusto aperiam totam odio maxime ratione architecto error!</p>
                            <a class="btn peach-gradient" href="/all"><i class="fas fa-clone right"></i> View Game</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumbotron -->

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
