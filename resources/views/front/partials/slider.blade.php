<header>
  <!-- Slider main container -->
  <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        @if($sliders->count()== 0)
            <div>
                <div class="container d-flex justify-content-center">
                    <img src="{{asset('img/logo_w.png')}}" class="logo position-absolute" alt="logo-eliano">
                </div>
                <img src="{{asset('images/default.jpg')}}" class="d-block w-100">
            </div>

        @else
        @foreach ($sliders as $slider)
          <div class="swiper-slide">
            <div class="container d-flex justify-content-center">
              <img src="{{asset('img/logo_w.png')}}" class="logo position-absolute" alt="">
            </div>
            <img src="{{asset('storage/'.$slider->immobile->img_preview)}}" class="d-block w-100 " alt="{{$slider->immobile->titolo}}">
            <div class="carousel-caption text-left d-none d-md-block">
              <div class="status text-center"><p class="text-uppercase text-dark">{{$slider->immobile->stato->name}}</p></div>
              <div class="container pr-0">
                <h4 class="text-dark text-uppercase">{{$slider->immobile->titolo}}</h4>
                <div class="go-to d-flex flex-row justify-content-between p-0">
                  <h4 class="text-dark">€ {{ number_format($slider->immobile->price, 0, ',', '.') }}</h4>
                  <a href="{{route('show.immobile', ['slug' => $slider->immobile->slug, 'immobile_id' => $slider->immobile_id])}}" class="text-center">
                    <i class="fa fa-2x fa-arrow-right text-white"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
    @endif
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
</header>
