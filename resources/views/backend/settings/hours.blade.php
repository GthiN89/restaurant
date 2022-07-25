@extends('backend.master')
@section('content')
<div class="row">

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Contact settings</h4>
        <form action="{{ route('hours_submit') }}" class="forms-sample" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Days</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{ $hours->days }}" name="days">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Hours</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{ $hours->hours }}" name="hours">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>
    </div>
  </div>

</div>
@endsection
