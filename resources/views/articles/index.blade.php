@extends('articles.layout')

@section('content')

<h1 class="mt-4">Edit Article</h1>

<div class="card mb-4">

    <div class="card-body">
        <div id="table_data">
        @include('articles.tables')
        </div>
    </div>
</div>

@endsection

<script>
    $(document).ready(function () {

        $(document).on('click', '.pagination a', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url: "/articles?page=" + page,
                success: function (article) {
                    $('#table_data').html(article);
                }
            });
        }

    });

</script>
