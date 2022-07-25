@extends('layout.main')
@section('content')
  </div>

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
      </div>

      <ul class="filters_menu">
        <li><a href="/menu" style="color: #222831;">All</li></a>
        @foreach ($categories as $category)
        <li><a href="/menu/{{$category->category}}" style="color: #222831;">{{$category->category}}</li></a>
        @endforeach
      </ul>

      <div class="filters-content">
        <div class="row grid">

            @foreach ($products_all as $product)
            <div class="col-sm-6 col-lg-4 all pizza">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <img src="{{ asset($product->image) }}" alt="">
                    </div>
                    <div class="detail-box">
                      <h5>
                        {{ $product->name }}
                      </h5>
                      <p>
                        {{ $product->description }}
                      </p>
                      <div class="options">
                        <h6>
                          ${{ $product->price }}
                        </h6>
                        <form action="{{ route('add_to_cart') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="name" value="{{$product->name}}">
                            <input type="hidden" name="price" value="{{$product->price}}">
                            <input type="hidden" name="sale_price" value="{{$product->sale_price}}">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="image" value="{{$product->image}}">
                            <input type="submit" value="Order" class="btn btn-warning">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

        </div>
      </div>

    </div>
  </section>

  <!-- end food section -->




@endsection
