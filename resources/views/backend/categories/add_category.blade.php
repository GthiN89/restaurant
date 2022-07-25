@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Category</h4>
            <p class="card-description"> Enter the category name. </p>
            <form class="forms-sample" action="{{ route('submit_category') }}" method="POST" >
                @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Category name:</label>
                <input type="text" class="form-control" id="exampleInputUsername1" name="category" placeholder="Category">
              </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{ route('categories') }}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
