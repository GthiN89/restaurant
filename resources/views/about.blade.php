@extends('layout.main')
@section('content')

</div>
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
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
