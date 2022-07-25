@extends('layout.main')
@section('content')

 <!-- slider section -->
 <section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @php
        $i = 0
        @endphp
        @foreach ($slides as $slide)
        @php
        $i = $i+1
        @endphp
        <div class="carousel-item @if ($i == 1) active @endif">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      {{$slide->header}}
                    </h1>
                    <p>
                      {{ $slide->paragraph }}
                    </p>
                    <div class="btn-box">
                      <a href="menu" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="container">
        <ol class="carousel-indicators">
            @php
            $i = -1
            @endphp
            @foreach ($slides as $slide)
            @php
                $i = $i+1
            @endphp
            <li data-target="#customCarousel1" data-slide-to="{{$i}}" @if($slide->id == 1) class="active" @endif ></li>
            @endforeach
        </ol>
      </div>
    </div>

  </section>
  <!-- end slider section -->
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
      <div class="btn-box">
        <a href="menu">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

<!-- about section -->

<section class="about_section layout_padding">
  <div class="container  ">

    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              {{$about->header}}
            </h2>
          </div>
          <p>
            {{$about->paragraph}}
          </p>
          <a href="about">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->



<!-- client section -->

<section class="client_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container heading_center psudo_white_primary mb_45">
      <h2>
        What Says Our Customers
      </h2>
    </div>
    <div class="carousel-wrap row ">
      <div class="owl-carousel client_owl-carousel">
        @foreach ($reviews as $review)
        <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  {{ $review->paragraph }}
                </p>
                <h6>
                    {{ $review->name }}
                </h6>
                <p>
                    {{ $review->title }}
                </p>
              </div>
              <div class="img-box">
                <img src="{{ $review->image }}" alt="" class="box-img">
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </div>
</section>

<!-- end client section -->
@endsection
