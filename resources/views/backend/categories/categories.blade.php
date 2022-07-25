@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Categories</h3>
            <p class="card-description">  <a href="{{ route('add_category') }}"><button type="button" class="btn btn-primary btn-sm">Add Category</button></a>
            </p>
            <table class="table">
              <thead>
                <tr>
                  <th>Category</th>
                  <th>ID</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->category }}</td>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        <a href="/admin/categories/edit/{{$category->id}}"><label class="badge badge-success">Edit</label></a>
                        <a href="/admin/categories/delete/{{$category->id}}" onclick="return confirm('Are you sure?')"><label class="badge badge-danger">Delete</label></a>
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
