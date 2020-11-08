<!DOCTYPE html>
<html lang="en">
@extends('layouts.template')

<body>

  <!-- Navigation -->
  @section('content')
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top "
  >
    <div class="container ">
      <a class="navbar-brand" href="#">LaravelProject</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          @if(Auth::id())
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout')}}">Logout</a>
          </li>
          @endif
          @if(empty(Auth::id()))
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/register')}}">Register</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Page Content -->
  <div class="container">

    <div class="row">
    
      <!-- Post Content Column -->
      <div class="col-lg-8">
      
        <!-- Title -->
        <!-- Author -->
        <p class="lead">
        <h1>Edit Data</h1>
        </p>

        <hr>

        <!-- Post Content -->
        
            <form action="/article/update/{{$article->id}}" method="post">
                @csrf
                <label for="title">Id</label>
                <input type="text" class="form-control" name="id" value="{{$article->id}}" readonly></br>
                <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"></br>
                </div>
                <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control"
                required="required" name="content" value="{{$article->content}}"></br>
                </div>
                <div class="form-group">
                <label for="image">Feature Image</label>
                <input type="text" class="form-control"
                required="required" name="image" value="{{$article->featured_image}}"></br>
                </div>
                <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
            </form>

      </div>

    </div>
    <!-- /.row -->
    <hr>

  </div>
  <!-- /.container -->
  @endsection
  @section('about')
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Pamungkas 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  @endsection

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
