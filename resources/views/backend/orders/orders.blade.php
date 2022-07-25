@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Orders</h4>
            </p>
            <table class="table">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order )
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->cost}}</td>
                    <td>{{$order->status}}</td>
                    <td><a href="/admin/orders/{{$order->id}}"><label class="badge badge-success">View</label></a>
                    <a href="/admin/orders/delete/{{$order->id}}" onclick="return confirm('Are you sure?')" ><label class="badge badge-danger">Delete</label></a>
                </td>
                  </tr>
                @endforeach
                {{ $orders->links() }}
              </tbody>
            </table>
          </div>
        </div>
      </div>

</div>
@endsection
