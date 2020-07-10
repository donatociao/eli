<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="description" lang=”it” content="Eliano Servizi Immobiliari a Eboli">
    <link rel="canonical" href="https://eliano.it"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta lang=”it” content="Eliano immobiliare, immobiliare eboli, affitto eboli, appartamento eboli, vendita eboli, immobile eboli, immobiliare eboli" name="keywords">
    <meta http-equiv=”content-language” content=”it”>
     <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Eliano Immobiliare a Eboli</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- Toogle bootstrap4 --}}
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

    {{-- Editor WYSIWYG --}}
    <!-- include libraries(jQuery, bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->

    <script src="/js/lightslider.js"></script>
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

      <div class="masthead position-absolute">
        @include('front.partials.nav')
        @include('front.partials.subnav')
        <div class="container">
          <div class="row mt-5">
            <div class="col-lg-12">
              <h1 class="eliano-red">Ops, sembra che qualcosa sia andato storto.</h1>
              <h3>Aggiorna la pagina!</b></h4>
              <a href="{{route('home')}}"> <button class="btn btn-info mt-5">Vai alla Home Page</button></a>
            </div>
          </div>
        </div>
        @include('front.partials.contatti')
        @include('front.partials.footer')
      </div>

    </div>
    @include('front.partials.menu')
    <!-- Optional JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b5688ce634.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
  </body>
</html>
