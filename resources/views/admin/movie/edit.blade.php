@extends('admin.dashboard')
@section('content')
<form method = "post" action = "{{route('update.movie',$Movie->id)}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputTitle">Title</label>
        <input type="title" name = "title" class="form-control" value = "{{$Movie->title}}" id="inputEmail4" placeholder="Title">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Released Date</label>
        <input type="date" name = "releasedate" value = "{{$Movie->releasedate}}" class="form-control" id="inputPassword4" placeholder="releasedate">
      </div>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name = "description" id="exampleFormControlTextarea1" rows="3">{{$Movie->description}}</textarea>
  </div>
  <div class = "form-group">
           <label for="img">Image:</label>
           <img style = "height: 150px;padding: 20px 20px; text-align: center;" src = "{{$Movie->poster}}">
    </div>
    <div class = "form-group">
               <label for="img">Poster:</label>
               <input type="file" id="img" name="poster" accept="image/*">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection