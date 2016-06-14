@extends('Dashboard/layouts/dashboarlayout')
@section('title')
category/all
@stop
@section('contents')
<h3>edit your product here</h3>
<hr>
@if(Session::has('failled'))
<div class="alert alert-warning ">
  <h4>{{ Session::get('failled') }}</h4>
</div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<?php $id=$editProduct->id; ?>
<form class="form-horizontal" action="{{ asset('product')."/".$id }}" method="post"  enctype="multipart/form-data" role="form">
  {!! csrf_field()!!}
    {!! method_field('PUT')!!}
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">product name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="product_name" value="{{ $editProduct->product_name }}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">product_quantity:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="pwd"  name="product_quantity" value="{{ $editProduct->product_quantity }}" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">total weight(gm):</label>
    <div class="col-sm-10">
      <input type="number"  class="form-control" id="pwd"  name="product_weight" value="{{ $editProduct->product_weight }}" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">first image:</label>
    <div class="col-sm-10">
       <div class="row">
    <div class="col-md-6">
    <input type="file" id="pwd"  name="product_firstImage" value="{{ $editProduct->product_firstImage }}">
    </div>
    <div class="col-md-6">
      <img src="{{ asset('uploads/product_images')."/".$editProduct->product_firstImage}}" height="150" width="150"/>
    </div>
    </div>
    </div>
    </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">second image:</label>
    <div class="col-sm-10">
    <div class="row">
    <div class="col-md-6">
    <input type="file" id="pwd"  name="product_secondImage" value="{{ $editProduct->product_secondImage }}">
    </div>
    <div class="col-md-6">
      <img src="{{ asset('uploads/product_images')."/".$editProduct->product_secondImage}}" height="150" width="150"/>
    </div>
    </div>
    </div>
    </div>
  
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">short notes:</label>
    <div class="col-sm-10">
      <textarea  class="form-control" name="product_note"  rows="5" style="width:100%;">
      {{ $editProduct->product_note }} </textarea>
    </div>
  </div>
  <div class="form-group">
  <label class="control-label col-sm-2"  for="sel1">Select category:</label>
    <div class="col-sm-10">
      <select class="form-control" name="category_id" id="sel1">
      <option>select category</option>
      @foreach($categoryList as $category)
        <option value="{{$category->id}} ">{{$category->category_name}}</option>
      @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Add products</button>
    </div>
  </div>
</form>
@stop
