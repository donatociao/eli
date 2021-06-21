<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="description" lang=”it” content="Eliano Servizi Immobiliari a Eboli">
    <link rel="canonical" href="https://eliano.it"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta lang=”it” content="Eliano immobiliare, immobiliare eboli, affitto eboli, appartamento eboli, vendita eboli, immobile eboli, immobiliare eboli" name="keywords">
    <meta http-equiv=”content-language” content=”it”>
    <meta name="google-site-verification" content="VjG8DabjcLd9uGCtAyyrSZ06Z6KEIxoQgf8RcwHRrPg" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <title>Eliano Immobiliare a Eboli</title>
    <!-- Web Application Manifest -->
<link rel="manifest" href="/manifest.json">
<!-- Chrome for Android theme color -->
<meta name="theme-color" content="#000000">

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="Eliano">
<link rel="icon" sizes="512x512" href="/images/icons/icon-512x512.png">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Eliano">
<link rel="apple-touch-icon" href="/images/icons/icon-512x512.png">

<link href="/images/icons/splash-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-750x1334.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1242x2208.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-828x1792.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1242x2688.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1536x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1668x2224.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1668x2388.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-2048x2732.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

{{-- Animate --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
<!-- Tile for Win8 -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/images/icons/icon-512x512.png">

<script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.'
        }).then(function (registration) {
            // Registration was successful
            console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    }

    // Detects if device is on iOS
    const isIos = () => {
      const userAgent = window.navigator.userAgent.toLowerCase();
      return /iphone|ipad|ipod/.test( userAgent );
    }
    // Detects if device is in standalone mode
    const isInStandaloneMode = () => ('standalone' in window.navigator) && (window.navigator.standalone);

    // Checks if should display install popup notification:
    if (isIos() && !isInStandaloneMode()) {
      this.setState({ showInstallMessage: true });
    }
  </script>
    <!-- Hotjar Tracking Code for https://eliano.it -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1897188,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
    @if(Route::current()->getName() == 'show.immobile')
      <!-- Open Graph -->
      <meta property="og:type" content="website">
      <meta property="og:title" content="{{$immobile_show->titolo}}">
      <meta property="og:site_name" content="Eliano Immobiliare"  >
      <meta property="og:image" content="{{ asset('storage/'.$immobile_show->img_preview) }}">
      <meta property="og:url" content="{{ URL::current() }}">
      <meta property="og:description" content="Scopri questo immobile in {{$immobile_show->stato->name}} a {{$immobile_show->price}} €">
      <meta property="og:locale" content="it_IT">
    @endif
{{-- Dati strutturati --}}
    <script type="application/ld+json">
    {
  "@context": "http://www.schema.org",
  "@type": "LocalBusiness",
  "name": "Eliano Servizi Immobiliari a Eboli | Salerno",
  "description": "Agenzia immobiliare a Eboli per vendite e locazioni residenziali e commerciali.",
  "url": "https://eliano.it",
  "sameAs": [
    "https://www.facebook.com/elianoimmobiliare/",
    "https://twitter.com/elianoinfo"
  ],
  "hasMap": "https://goo.gl/maps/QojGtMSQ6FiyT2ga6",
  "logo": "https://eliano.it/img/logo.png",
  "image": "https://eliano.it/img/logo.png",
  "priceRange" : "$ - $$$",
  "telephone": "+390828367378",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Via B. Buozzi, 41",
    "addressLocality": "Eboli",
    "addressRegion": "Salerno",
    "postalCode": "84025",
    "addressCountry": "IT"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "40.6151593",
    "longitude": "15.0538478"
  },
  "openingHours": "Mo, Tu, We, Th, Fr, 09:00-19:00",
  "contactPoint": {
    "@type": "ContactPoint",
    "email": "info@eliano.it",
    "telephone": "+390828367378"
  },
  "aggregateRating": {
  "@type": "AggregateRating",
  "ratingValue": "5",
  "reviewCount": "108"
  }
}
</script>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link type="text/css" rel="stylesheet" href="/css/lightslider.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/src/css/lightgallery.css"/>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    {{-- Toogle bootstrap4 --}}
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

    {{-- Editor WYSIWYG --}}
    <!-- include libraries(jQuery, bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>

    <script src="/js/lightslider.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/js/lightgallery.min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
            selector: '#imageGallery .lslide',
            mode: "lg-fade",
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
    {{-- PRELOADER --}}
    {{-- <div id="preloader" class="text-center">
      <div class="spinner-border text-light" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div> --}}
    {{-- END PRELOADER --}}

    @isset($messages)
      <script>Swal.fire({
              icon: '{{ $messages->msgType }}',
              title: 'Avviso',
              text: '{{ $messages->message }}',
          })</script>
    @endif
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
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },

          autoplay: {
            delay: 5000,
          },
        })
  </script>
  </body>
</html>
