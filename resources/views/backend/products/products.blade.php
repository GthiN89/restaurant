@extends('backend.master')
@section('content')
<div class="row">

    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Products</h4>
            <p class="card-description">  <a href="{{ route('add_product') }}"><button type="button" class="btn btn-primary btn-sm">Add Product</button></a>
            </p>
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product )
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->categories->category}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>
                        <a href="/admin/products/edit/{{$product->id}}"><label class="badge badge-success">Edit</label></a>
                        <a href="/admin/products/delete/{{$product->id}}" onclick="return confirm('Are you sure?')"><label class="badge badge-danger">Delete</label></a>
                    </td>
                  </tr>
                @endforeach
                {{ $products->links() }}

              </tbody>
            </table>
          </div>
        </div>
      </div>

</div>
@endsection
