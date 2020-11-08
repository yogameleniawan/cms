<!DOCTYPE html>
<html lang="en">
@extends('layouts.template')

<body>
@section('content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">
    
      <!-- Post Content Column -->
      <div class="col-lg-8">
      
        <!-- Title -->
        <!-- Author -->
        <p class="lead">
        <h1>Add Data</h1>
        </p>

        <hr>

        <!-- Post Content -->
        
        <form action="create" method="post">
            @csrf
            <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title"></br>
            </div>
            <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" required="required" name="content"></br>
            </div>
            <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="text" class="form-control" required="required" name="image"></br>
            </div>
            <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
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
