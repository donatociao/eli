<header>
  <!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->

        @foreach ($sliders as $slider)
          <div class="swiper-slide">
            <div class="container d-flex justify-content-center">
              <img src="{{asset('img/logo_w.png')}}" class="logo position-absolute" alt="">
            </div>
            <img src="{{asset('storage/'.$slider->immobile->img_preview)}}" class="d-block w-100" alt="">
            <div class="carousel-caption text-left d-none d-md-block">
              <div class="status text-center"><p class="text-uppercase text-dark">{{$slider->immobile->stato->name}}</p></div>
              <div class="container pr-0">
                <h4 class="text-dark text-uppercase">{{$slider->immobile->titolo}}</h4>
                <div class="go-to d-flex flex-row justify-content-between p-0">
                  <h4 class="text-dark">€ {{$slider->immobile->price}}</h4>
                  <a href="#" class="text-center">
                    <i class="fa fa-2x fa-arrow-right text-white"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
  {{-- <div id="carouselExampleIndicators" class="carousel slide d-flex flex-column" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    @foreach ($sliders as $slider)
      <div class="carousel-item active">
        <img src="{{asset('storage/'.$slider->immobile->img_preview)}}" class="d-block w-100" alt="">
        <div class="carousel-caption text-left d-none d-md-block">
          <div class="status text-center "><p class="text-uppercase text-dark">{{$slider->immobile->stato->name}}</p></div>
          <div class="container pr-0">
            <h4 class="text-dark text-uppercase">{{$slider->immobile->titolo}}</h4>
            <div class="go-to d-flex flex-row justify-content-between p-0">
              <h4 class="text-dark">€ {{$slider->immobile->price}}</h4>
              <a href="#" class="text-center">
                <i class="fa fa-2x fa-arrow-right text-white"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> --}}

  {{-- <div id="carouselExampleIndicators" class="carousel slide d-flex flex-column" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="container d-flex justify-content-center">
      <img src="{{asset('img/logo_w.png')}}" class="logo position-absolute" alt="">
    </div>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      @foreach ($sliders as $slider)
        <div class="carousel-item active">
          <img src="{{asset('storage/'.$slider->immobile->img_preview)}}" class="d-block w-100" alt="">
          <div class="carousel-caption text-left d-none d-md-block">
            <div class="status text-center "><p class="text-uppercase text-dark">{{$slider->immobile->stato->name}}</p></div>
            <div class="container pr-0">
              <h4 class="text-dark text-uppercase">{{$slider->immobile->titolo}}</h4>
              <div class="go-to d-flex flex-row justify-content-between p-0">
                <h4 class="text-dark">€ {{$slider->immobile->price}}</h4>
                <a href="#" class="text-center">
                  <i class="fa fa-2x fa-arrow-right text-white"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> --}}
</header>
