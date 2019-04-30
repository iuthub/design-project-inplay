@extends('layouts.main')

@section('content')

@include('partials.admin-header')

<br>
<br>
<br>
<form action="/admin/save" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <select class="form-control" id="genre" name="genre">
          <option>Action</option>
          <option>Adventure</option>
          <option>Fighting</option>
          <option>Platform</option>
          <option>Racing</option>
          <option>Role-playing</option>
          <option>Shooter</option>
          <option>Simulation</option>
          <option>Sports</option>
          <option>Strategy</option>
          <option>Misc</option>

        </select>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price"  placeholder="Enter price">
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date"  placeholder="Enter date">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="image">image</label>
        <input type="text" class="form-control" id="image" name="imageSource"  placeholder="Enter image">
    </div>
    {{-- <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" id="image" name="imageSource">
    </div> --}}
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection