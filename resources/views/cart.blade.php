@extends('layout.main')
@section('content')

</div>

<section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Your Cart
        </h2>
      </div>
      <table class="pt-5" style="width: 100%">
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>

        @if(Session::has('cart'))
      @foreach (Session::get('cart') as $product)

      <tr>
        <td>
          <div class="product-info">
            <img src="{{ asset($product['image'] )}}" style="width: 150px;">
            <div>
              <p>{{ $product['name'] }}</p>
              <small><span>$</span>{{ $product['price'] }}</small>
              <br>
              <form method="POST" action="{{ route('remove_from_cart') }}">
                @csrf
                <input type="hidden" name="id" value="{{$product['id']}}">
                <input type="submit" name="remove_btn" class="btn btn-warning" value="remove">
              </form>
            </div>
          </div>
        </td>

        <td>
          <form method="POST" action="{{ route('edit_product_quantity') }}" >
            @csrf
            <input type="submit" value="-" class="btn btn-warning" name="decrease_product_quantity_btn">
            <input type="hidden" name="id" value="{{ $product['id'] }}">
            <input type="text" name="quantity" value="{{ $product['quantity'] }}" readonly>
            <input type="submit" value="+" class="btn btn-warning" name="increase_product_quantity_btn">
          </form>
        </td>

        <td>
          <span class="product-price">$ {{   $product['quantity'] * $product['price'] }}</span>
        </td>
      </tr>
      @endforeach
      @endif

</table>


<div class="cart-total">
  <table>
    @if(Session::has('cart'))
    <tr>
      <td>Total</td>

        @if(Session::has('total'))
        <td>${{ Session::get('total') }}</td>
        @endif

    </tr>
    @endif




      </table>


    </div>
    <div class="checkout-container">
        @if(Session::has('total') && Session::get('total') != NULL)
      <form method="GET" action="{{ route('checkout') }}">
        <input type="submit" class="btn btn-warning" value="Checkout" name="">
      </form>
      @endif

    </div>

  </section>




@endsection
