@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-lg-12 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Order number: {{ $order['id'] }}</h4>
            <p class="card-description"> Date: {{ $order['date'] }}</code>
            </p>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> Product </th>
                  <th> Quantity </th>
                  <th> Price </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr class="table-warning">
                    <td> {{$product->product_name}} </td>
                    <td> {{$product->product_quantity}} </td>
                    <td> ${{$product->product_price}} </td>
                  </tr>
                @endforeach



              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Adress</h4>
            <h6>Name:  {{ $order->name }}</h6>
            <h6>E-mail: {{ $order->email }}</h6>
            <h6>City: {{ $order->city }}</h6>
            <h6>Phone: {{ $order->phone }}</h6>
            <h6>Adress: {{ $order->address }} </h6>
            <h5>Price: ${{ $order->cost }}</h5>
          </div>
        </div>
      </div>

      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Order Status : {{ $order->status }}</h4>
            <a href="/admin/orders/status/ready/{{$order->id}}"><button type="button" class="btn btn-primary btn-fw">Is Ready to delivery</button></a>
            <a href="/admin/orders/status/delivered/{{$order->id}}"><button type="button" class="btn btn-success btn-fw">Is Delivered</button></a>
          </div>
        </div>
      </div>


    </div>
@endsection
