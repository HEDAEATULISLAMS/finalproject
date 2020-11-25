@extends('welcome')

@section('content')
	<div class="container">
		<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>
        <a href="{{ URL::to('/add_category')}}" class="btn btn-danger">Add Category</a>
        <a href="{{URL::to('/all_category')}}" class="btn btn-info">All Category</a>
        </p>
        <form action="{{URL::to('/store_post')}}" method="post" enctype="multipart/form-data">
        	@csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Title</label>
              <input type="text" class="form-control" placeholder="Please enter Post Title" name="title" >
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category</label>
              <select class="form-control" name="category_id">
              	<option>Select Post Category</option>
              	<option>Select Post Category</option>
              </select>
            </div>
          </div>
          <br>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Image</label>
              <input type="file" class="form-control" placeholder="" id="image" name="image" required >
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Details</label>
              <textarea rows="5" class="form-control" placeholder="Please enter post details." name="details" required></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" >Post</button>
        </form>
      </div>
    </div>
    </div>
@endsection