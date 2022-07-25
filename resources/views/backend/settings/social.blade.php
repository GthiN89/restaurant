@extends('backend.master')
@section('content')
<div class="row">

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">About settings</h4>
        <form action="{{ route('social_submit') }}" class="forms-sample" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleTextarea1">Paragraph</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4" name="paragraph">{{ $social->paragraph }}</textarea>
              </div>
          <div class="form-group">
            <label for="exampleInputName1">Facebook</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{ $social->facebook }}" name="facebook">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Twitter</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{ $social->twitter }}" name="twitter">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Linkedin</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{ $social->linkedin }}" name="linkedin">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Instagram</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{ $social->instagram }}" name="instagram">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Pinterest</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{ $social->pinterest }}" name="pinterest">
          </div>

          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>
    </div>
  </div>

</div>
@endsection
