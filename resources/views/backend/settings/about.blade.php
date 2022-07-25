@extends('backend.master')
@section('content')
<div class="row">

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">About settings</h4>
        <form action="{{ route('about_submit') }}" class="forms-sample" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Header</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{$about->header}}" name="header">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Paragraph</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4" name="paragraph">{{$about->paragraph}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>
    </div>
  </div>

</div>
@endsection
