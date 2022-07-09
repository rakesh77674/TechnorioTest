@extends('admin.dashboard')
@section('content')
       <a href="/admin/addMovie">
            <span class="btn btn-success col fileinput-button" style = "width: 178px;">
                <i class="fas fa-plus"></i>
                <span>Add Movie</span>
            </span>
        </a>   
    <table class="table table-bordered">
        <thead>
        <tr class = "table-primary">
            <th scope="col">Title</th>
            <th scope="col">Poster</th>
            <th scope="col">Release Date</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($Movie as $Movies)
            <tr>
                <th>{{$Movies->title}}</th>
                <td><img height = "50" width = "50" margin = "12"src = "{{$Movies->poster}}"></td>
                <td>{{$Movies->releasedate}}</td>
                <td>{{$Movies->description}}</td>
                <form method = "post" action = "{{route('destroy.index',$Movies->id)}}">
                 @csrf
                 @method('delete')
                <td><button type="submit" class="btn btn-warning" style ="background: red;max-width: 100px;padding: 2px;margin: 2px;width: 100%; color:white; ">Delete</button>
                </form>
                <form method = "post" action = "{{route('edit.index',$Movies->id)}}">
                @csrf
                <button type="submit" class="btn btn-primary" style = "width: 100%; padding: 2px; margin: 2px;max-width: 100px; ">Edit</button></td>
                </form>
            </tr>
            @endforeach
        
        </tbody>
    </table>
  @endsection