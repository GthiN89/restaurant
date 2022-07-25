@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Slider</h4>
            <p class="card-description">  <a href="{{route('add_slider')}}"><button type="button" class="btn btn-primary btn-sm">Add Slide</button></a>

            </p>
            <table class="table">
              <thead>
                <tr>
                  <th>Slade ID</th>
                  <th>Header</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($slides as $slide )
                <tr>
                    <td>{{$slide->id}}</td>
                    <td>{{$slide->header}}</td>

                    <td><a href="/admin/slider/edit/{{$slide->id}}"><label class="badge badge-success">Edit</label></a>
                    <a href="/admin/slider/delete/{{$slide->id}}" onclick="return confirm('Are you sure?')" ><label class="badge badge-danger">Delete</label></a>
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
