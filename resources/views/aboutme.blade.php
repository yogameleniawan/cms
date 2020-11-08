<html>
@extends('layouts.template')

<body>
@section('content')

  <div class="col-md-8">

        <h1 class="my-4">About Me
          <small>Biodata Saya</small>
        </h1>

        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Biodata</h2>
            <p class="card-text">Nama : Yoga Meleniawan Pamungkas</p>
            <p class="card-text">NIM : 1931710083</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on September 17, 2020 by
            <a href="#">Yoga Meleniawan Pamungkas</a>
          </div>
        </div>
    </div>

    @endsection
  @section('about')
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Pamungkas 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  @endsection  
    </body>
</html>