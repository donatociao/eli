<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eliano Immobiliare</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link type="text/css" rel="stylesheet" href="/css/lightslider.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/src/css/lightgallery.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="/js/lightslider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/js/lightgallery.min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#imageGallery').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:9,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
          el.lightGallery({
            selector: '#imageGallery .lslide'
          });
        }
      });
    });
  </script>

  <!-- Styles -->
  <link rel="stylesheet" href="/css/app.css">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  </head>
  <body>
    {{-- <ul class="nav justify-content-between bg-eliano h-60 d-flex align-items-center sticky-top">
      <li class="nav-item">
        <a class="nav-link menu-open" href="#"><i class="fi-xwlux2-three-bars-solid text-white"></i></a>
      </li>
        @if (Route::has('login'))
          @auth
            <li class="nav-item">
              <a class="nav-link text-white bold-20" href="{{ route('dash') }}">PANNELLO</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link text-white bold-20" href="{{ route('login') }}">LOGIN</a>
            </li>

            @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link text-white bold-20" href="{{ route('register') }}">REGISTRATI</a>
              </li>
            @endif
          @endauth
        @endif
      </ul> --}}

      <div class="masthead position-absolute">
        @yield('content')
      </div>

    </div>
    @include('front.partials.menu')
    <!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    <script src="https://kit.fontawesome.com/b5688ce634.js" crossorigin="anonymous"></script>

  </body>
</html>
