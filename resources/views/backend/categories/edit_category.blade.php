@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Category</h4>
            <p class="card-description"> Edit the category name. </p>
            <form class="forms-sample" action="{{ route('edit_category_handler') }}" method="POST" >
                @csrf
              <div class="form-group">
                <input type="hidden" name="id" value="{{ $category->id }}">
                <label for="exampleInputUsername1">Category name:</label>
                <input type="text" class="form-control" id="exampleInputUsername1" name="category"  value="{{ $category->category }}">
              </div>
              <button type="submit" class="btn btn-primary mr-2">Save</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>

</div>
@endsection
