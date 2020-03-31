@extends('app')

@section('content')
  @include('front.partials.nav')
  @include('front.partials.subnav')
  <div class="container mb-4">
    <div class="row mt-5">
      <div class="col-lg-12">
        <h1 class="text-uppercase"><div class="status-scheda text-center "><p class="text-uppercase text-dark">Vendesi</p></div>Appartamento titolo</h1>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-8">
        <ul id="imageGallery">
          <li data-thumb="https://source.unsplash.com/user/erondu/1600x900" data-src="https://source.unsplash.com/user/erondu/1600x900">
            <img class="img-fluid" src="https://source.unsplash.com/user/erondu/1600x900" />
          </li>
          <li data-thumb="https://source.unsplash.com/user/priscilladupreez/1600x900" data-src="https://source.unsplash.com/user/priscilladupreez/1600x900">
            <img class="img-fluid" src="https://source.unsplash.com/user/priscilladupreez/1600x900" />
          </li>
          <li data-thumb="https://source.unsplash.com/user/henleydesign/1600x900" data-src="https://source.unsplash.com/user/henleydesign/1600x900">
            <img class="img-fluid" src="https://source.unsplash.com/user/henleydesign/1600x900" />
          </li>
          <li data-thumb="https://source.unsplash.com/user/gardiept/1600x900" data-src="https://source.unsplash.com/user/gardiept/1600x900">
            <img class="img-fluid" src="https://source.unsplash.com/user/gardiept/1600x900" />
          </li>
          <li data-thumb="https://source.unsplash.com/user/icons8/1600x900" data-src="https://source.unsplash.com/user/icons8/1600x900">
            <img class="img-fluid" src="https://source.unsplash.com/user/icons8/1600x900" />
          </li>
          <li data-thumb="https://source.unsplash.com/user/henleydesign/1600x900" data-src="https://source.unsplash.com/user/henleydesign/1600x900">
            <img class="img-fluid" src="https://source.unsplash.com/user/henleydesign/1600x900" />
          </li>
          <li data-thumb="https://source.unsplash.com/user/gardiept/1600x900" data-src="https://source.unsplash.com/user/gardiept/1600x900">
            <img class="img-fluid" src="https://source.unsplash.com/user/gardiept/1600x900" />
          </li>
          <li data-thumb="https://source.unsplash.com/user/icons8/1600x900" data-src="https://source.unsplash.com/user/icons8/1600x900">
            <img class="img-fluid" src="https://source.unsplash.com/user/icons8/1600x900" />
          </li>
          <li data-thumb="https://source.unsplash.com/user/henleydesign/1600x900" data-src="https://source.unsplash.com/user/henleydesign/1600x900">
            <img class="img-fluid" src="https://source.unsplash.com/user/henleydesign/1600x900" />
          </li>
          <li data-thumb="https://source.unsplash.com/user/gardiept/1600x900" data-src="https://source.unsplash.com/user/gardiept/1600x900">
            <img class="img-fluid" src="https://source.unsplash.com/user/gardiept/1600x900" />
          </li>
          <li data-thumb="https://source.unsplash.com/user/icons8/1600x900" data-src="https://source.unsplash.com/user/icons8/1600x900">
            <img class="img-fluid" src="https://source.unsplash.com/user/icons8/1600x900" />
          </li>
        </ul>
        <h4 class="mt-3">Descrizione</h4>
        <p>Proponiamo in vendita, Appartamento centralissimo composto da 3 vani cucina, bagno e posto auto.</p>
      </div>
      <div class="col-lg-4 mb-5">
        <h4 class="">Dettagli immobile</h4>
        <div class="row">
          <div class="col-lg-6">
            <div class="mt-4 d-flex align-items-center"><img src="http://localhost:8000/img/area.png" alt="area" class="icona"><span class="ml-3">120 mq.</span></div>
            <div class="mt-4 d-flex align-items-center"><img src="http://localhost:8000/img/vani.png" alt="vani" class="icona"><span class="ml-3">3 Vani</span></div>
            <div class="mt-4 d-flex align-items-center"><img src="http://localhost:8000/img/wc.png" alt="wc" class="icona"><span class="ml-3">2 Bagni</span></div>
            <div class="mt-4 d-flex align-items-center"><img src="http://localhost:8000/img/box.png" alt="box" class="icona"><span class="ml-3">1 box</span></div>
            <div class="mt-4 d-flex align-items-center"><img src="http://localhost:8000/img/ape.png" alt="ape" class="icona"><span class="ml-3">Classe G</span></div>
          </div>
          <div class="col-lg-6">
            <div class="mt-4 d-flex align-items-center"><i class="text-success fas fa-2x fa-check-circle"></i><span class="ml-3">Ristrutturato</span></div>
            <div class="mt-4 d-flex align-items-center"><i class="text-success fas fa-2x fa-check-circle"></i><span class="ml-3">Riscaldamento</span></div>
            <div class="mt-4 d-flex align-items-center"><i class="text-success fas fa-2x fa-check-circle"></i><span class="ml-3">Terrazzo</span></div>
            <div class="mt-4 d-flex align-items-center"><i class="text-success fas fa-2x fa-check-circle"></i><span class="ml-3">Posto auto</span></div>
            <div class="mt-4 d-flex align-items-center"><i class="text-success fas fa-2x fa-check-circle"></i><span class="ml-3">Balconi</span></div>
          </div>
        </div>
        <div class="row">
          <p class="font-55 eliano-red mt-4">€ 150.000</p>
        </div>
      </div>
    </div>
  </div>
  @include('front.partials.contatti')
  @include('front.partials.footer')
@endsection
