@extends('dashboard')
@section('content')

    <table class="table table-bordered"id ="records">
        <thead>
        <tr class = "table-primary">
            <th scope="col">Movie Name</th>
            <th scope="col">poster</th>
            <th scope="col">released date</th>
            <th scope="col">description</th>
            <th scope="col">User Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($user as $users)
            <tr>
                <th>{{$users->Movie->title}}</th>
               <td><img height = "50" width = "50" margin = "12"src = "{{$users->Movie->poster}}"></td>
                <th>{{$users->Movie->releasedate}}</th>
                <th>{{$users->Movie->description}}</th>
                <td>{{$users->User->name}}</td>
                 <td><button type="submit" class="btn btn-warning" style ="background: red;max-width: 100px;padding: 2px;margin: 2px;width: 100%; color:white; ">Delete</button>
                </tr>
            @endforeach
        
        </tbody>
 @endsection
 