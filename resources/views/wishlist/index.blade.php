<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<h1>The list of wishlist</h1>
<table class="table table-bordered">
    <thead>
      <tr class = "table-primary">
        <th scope="col">title</th>
        <th scope="col">poster</th>
        <th scope="col">description</th>
        <th scope="col">releasedate</th>
      </tr>
    </thead>
    <tbody>
    @foreach($wishlist as $wish)
      <tr>
        <th></th>
        <td><img height = "50" width = "50" margin = "12"src = "{{$wish->poster}}"></td>
        <td>{{$wish->description}}</td>
        <td>{{$wish->releasedate}}</td>
      </tr>
      </tr>
      @endforeach
    </tbody>
  </table>
