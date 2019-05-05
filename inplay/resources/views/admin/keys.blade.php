@extends('layouts.main')

@section('content')
    
@include('partials.header')

<br>
<br>
<br>
<form action="/admin/keysave" method="POST" class="col-9" style="margin-left: 25%">
    @csrf
   <div class="form-group">
    <input type="hidden" class="form-control" id="product_id" name="product_id" value="{{$product->id}}">
    </div>
   <div class="form-group">
        <label for="key">Key</label>
        <input type="text" class="form-control" id="id" name="id"  placeholder="Enter key">
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection