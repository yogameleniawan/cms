<!DOCTYPE html>
<html lang="en">
@extends('layouts.template')

<body>

  
  <!-- Page Content -->
  @section('content')
  <div class="container">

    <div class="row">
    
      <!-- Post Content Column -->
      <div class="col-lg-8">
      
        <!-- Title -->
        <!-- Author -->
        <p class="lead">
        <h1>Manage</h1>
        </p>

        <hr>

        <!-- Post Content -->
        
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Edit</th>
            <th>Hapus</th>
            </tr>
            </thead>
            <tbody>
            @foreach($article as $a)
            <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->title}}</td>
            <td>{{$a->created_at}}</td>
            <td><a href="article/edit/{{ $a->id }}" class="badge badge-warning">Edit</a></td>
            <td><a href="article/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a></td>
            </tr>
            @endforeach
            </tbody>
            </table>

      </div>

    </div>
    <!-- /.row -->
    <a href="manage/article/add" class="btn btn-primary">Tambah Data</a>
    
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
