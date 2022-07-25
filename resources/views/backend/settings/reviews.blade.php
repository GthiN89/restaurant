@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Customer feedback</h4>
            <p class="card-description">  <a href="{{ route('add_review') }}"><button type="button" class="btn btn-primary btn-sm">Add Customer feedback</button></a>
            </p>
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>title</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($reviews as $review )
                <tr>
                    <td>{{ $review->name }}</td>
                    <td>{{ $review->title }}</td>
                    <td>
                        <a href="/admin/reviews/edit/{{ $review->id }}"><label class="badge badge-success">Edit</label></a>
                        <a href="/admin/reviews/delete/{{ $review->id }}" onclick="return confirm('Are you sure?')"><label class="badge badge-danger">Delete</label></a>
                    </td>
                  </tr>
                  @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>

</div>
@endsection
