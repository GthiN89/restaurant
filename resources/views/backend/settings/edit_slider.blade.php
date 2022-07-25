@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit slide</h4>
            <p class="card-description"> Here, you can edit slide</p>
            <form action="{{ route('edit_slider_submit') }}" method="POST" class="forms-sample">
                @csrf
                <input type="hidden" name="id" value="{{ $slide->id }}">
              <div class="form-group">
                <label for="exampleInputUsername1">Header</label>
                <input type="text" class="form-control" id="exampleInputUsername1" value="{{ $slide->header }}" name="header">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Paragraph</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4" name="paragraph">{{ $slide->paragraph }}</textarea>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Save</button>
              <a href="{{ route('slider') }}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>

</div>
@endsection
