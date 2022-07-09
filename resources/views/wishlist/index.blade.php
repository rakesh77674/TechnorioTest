<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<h1>The list of wishlist</h1>
<a href="/">
  <span class="btn btn-success col fileinput-button" style = "width: 178px;">
      <i class="fas fa-plus"></i>
      <span>Add More wishlist</span>
  </span>
</a>  
<table class="table table-bordered">
    <thead>
      <tr class = "table-primary">
        <th scope="col">title</th>
        <th scope="col">poster</th>
        <th scope="col">description</th>
        <th scope="col">releasedate</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($wishlist as $wish)
      <tr>
        <th>{{$wish->movie->title}}</th>
        <td><img height = "50" width = "50" margin = "12"src = "{{$wish->movie->poster}}"></td>
        <td>{{$wish->movie->description}}</td>
        <td>{{$wish->movie->releasedate}}</td>
        <td>
          <button type="submit" class="btn btn-warning" style ="background: red;max-width: 100px;padding: 2px;margin: 2px;width: 100%; color:white; ">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
