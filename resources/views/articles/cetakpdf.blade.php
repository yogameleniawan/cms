<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b>Title</b></td>
        <td><b>Content</b></td>
        <td><b>Featured Image</b></td>     
      </tr>
      </thead>
      <tbody>
      @foreach ($article as $a)
      <tr>
        <td>
          {{$a->title}}
        </td>
        <td>
          {{$a->content}}
        </td>
        <td>
          {{$a->featured_image}}
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </body>
</html>