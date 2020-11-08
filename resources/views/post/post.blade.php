<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @if($hasil)
    <title>{{$hasil->title}}</title>
    @endif
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
    <header>

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
        @if($hasil)
        <div class="view intro-2">
            <div class="full-bg-img">
                <div class="mask rgba-black-strong flex-center">
                <img src="{{$hasil->featured_image}}" style="width:100%">                   
                </div>
            </div>
        </div>
        @endif

    </header>
    <!--Main Navigation-->

    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-md-8">

                <!-- Title -->
                @if($hasil)
                <h1 class="mt-1">{{$hasil->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#">Yoga Meleniawan Pamungkas</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p>Posted on January 1, 2019 at 12:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{$hasil->featured_image}}" alt="">

                <hr>

                <!-- Post Content -->

                <p>{{$hasil->content}}</p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut,
                    error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni
                    recusandae laborum minus inventore?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos
                    iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat.
                    Temporibus, voluptatibus.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis
                    unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat
                    perspiciatis. Enim, iure!</p>
                @if(!empty(Auth::user()))
                <a href="/articles" class="btn btn-primary">Manage</a>
                @endif
                <hr>

                <!-- Comments Form -->
                
                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            @if(empty(Auth::user()->name))
                            <div class="form-group">
                                <p>Comment : </p>
                                <input class="form-control" type="text" name="komentar" value="Please Login to Comment" readonly></input>

                            </div>
                            @endif
                            @if(isset( Auth::user()->name))
                            <div class="form-group">

                                <input class="form-control" type="hidden" name="name"
                                    value="{{ Auth::user()->name }}"></input>
                            </div>
                            <div class="form-group">
                                <p>Comment : </p>
                                <input class="form-control" type="text" name="komentar"></input>

                            </div>
                            <input type="submit" class="btn btn-primary"></button>
                            @endif
                        </form>
                    </div>
                    
                </div>
                @endif
                <!-- Single Comment -->
                @foreach($komen as $k)
                @if($k->id_article==$id)
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="{{$k->profile_photo}}" alt="" style="width:7%">
                    <div class="media-body">
                        <h5 class="mt-0">{{$k->name}}</h5>
                        <p>{{$k->comment}}</p>
                    </div>
                </div>
                @endif
                @endforeach

            </div>
            <!-- Sidebar Widgets Column -->

        </div>
        <!-- /.row -->

    </div>


    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">

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
                <a href="{{route('register')}}" class="btn btn-outline-white btn-rounded" data-aos="zoom-in">Sign
                    up!</a>
                @endif
                @if(!empty(Auth::user()))
                <a href="{{route('logout')}}" class="btn btn-outline-white btn-rounded" data-aos="zoom-in">Log Out</a>
                @endif
            </li>
        </ul>
        <!-- Call to action -->

        <hr>

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> Pamungkas</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>
