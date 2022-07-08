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
            <form action="" name = "data" method="get">
                <input type="date" name="to" />
                <input type="date" name="form" />

                <button type="submit">Search</button>
            </form>
            @foreach ($user as $users)
            <tr>
                <th>{{$users->title}}</th>
               <td><img height = "50" width = "50" margin = "12"src = "{{$users->poster}}"></td>
                <th>{{$users->releasedate}}</th>
                <th>{{$users->description}}</th>
                <td>{{$users->userName}}</td>
                 <td><button type="submit" class="btn btn-warning" style ="background: red;max-width: 100px;padding: 2px;margin: 2px;width: 100%; color:white; ">Delete</button>
                </tr>
            @endforeach
        
        </tbody>
 @endsection
 