@extends('backend.master')
@section('content')
<div class="row">

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Contact settings</h4>
        <form action="{{ route('contact_submit') }}" class="forms-sample" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Location</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{ $contact->location }}" name="location">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Phone</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{ $contact->phone }}" name="phone">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Email</label>
            <input type="email" class="form-control" id="exampleInputName1" value="{{ $contact->email }}" name="email">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Save</button>
        </form>
      </div>
    </div>
  </div>

</div>
@endsection
