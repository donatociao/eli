@extends('app')

@section('content')
  @include('front.partials.nav')
  @include('front.partials.subnav')

  <div class="subnav container mt-5 mb-5">
    <div class="row d-flex align-items-center">
      <div class="col-lg-3">
        <h1 class="eliano-red font-55">VENDESI<i class="bg-chev ml-2 fas fa-angle-right"></i></h1>
      </div>
      <div class="col-lg-9">
        <div class="bg-eliano search-scheda d-flex flex-row justify-content-center">
          <div class="container d-flex flex-row align-items-center justify-content-center">
            <h2 class="text-white">Cerco</h2>
            <select class="search-sel custom-select-sm ml-3 text-white">
              <option selected>cosa cerchi?</option>
              <option value="1">appartamento</option>
              <option value="2">villa</option>
              <option value="3">locale commerciale</option>
            </select>
            <h2 class="text-white ml-3">a</h2>
            <select class="search-sel custom-select-sm ml-2 text-white ml-3">
              <option selected>dove?</option>
              <option value="1">Eboli</option>
              <option value="2">Salerno</option>
              <option value="3">Roma</option>
            </select>
            <button type="button" class="ml-5 text-uppercase btn btn-light">Cerca</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('front.partials.scheda-cards')
  @include('front.partials.contatti')
  @include('front.partials.footer')
@endsection
