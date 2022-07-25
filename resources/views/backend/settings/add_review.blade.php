@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Customer Feedback</h4>
            <p class="card-description"> Here you can add Customer Feedback</p>
            <form action="{{ route('review_submit') }}" class="forms-sample" method="POST" enctype="multipart/form-data" >
                @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputUsername1" >
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputUsername1" >
                @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
              </div>


              {{-- image --}}
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" class="form-control file-upload-info" name="image">
                </div>
                @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
                @else
                <br>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Feedback</label>
                <textarea name="paragraph" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                @if ($errors->has('paragraph'))
                <span class="text-danger">{{ $errors->first('paragraph') }}</span>
                @endif
              </div>

              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{ route('reviews') }}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
