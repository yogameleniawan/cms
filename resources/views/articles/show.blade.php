@extends('articles.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <hr>
   <div class="container">

<div class="row">

    <!-- Post Content Column -->
    <div class="col-md-8">

        <!-- Title -->
        @if($article)
        <h1 class="mt-1">{{$article->title}}</h1>

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
        <img class="img-fluid rounded" src="{{$article->featured_image}}" alt="">

        <hr>

        <!-- Post Content -->

        <p>{{$article->content}}</p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut,
            error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni
            recusandae laborum minus inventore?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos
            iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat.
            Temporibus, voluptatibus.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis
            unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat
            perspiciatis. Enim, iure!</p>
        <hr>
        @endif

    </div>
    <!-- Sidebar Widgets Column -->

</div>
<!-- /.row -->

</div>

@endsection