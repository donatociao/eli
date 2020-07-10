@extends('app')

@section('content')
  @include('front.partials.nav')
  @include('front.partials.subnav')

  @php
  @endphp
  <div class="subnav container mt-5 mb-5">
    <div class="row d-flex align-items-center">
      <div class="col-lg-3">
        <h1 class="eliano-red font-50 text-uppercase">{{ $stato[0] }}<i class="bg-chev fa ml-3 fa-angle-right"></i></h1>
      </div>
      <div class="col-lg-9">
        <div class="bg-eliano search-scheda d-flex flex-row justify-content-center">
          <div class="container d-flex flex-row align-items-center justify-content-center">
            <form class="container d-flex flex-row align-items-center justify-content-center" method="post" action="{{route('search.immobile')}}" enctype="multipart/form-data">
              @csrf
            <h2 class="text-white">Cerco</h2>
            <select name="category_id" class="search-sel custom-select-sm ml-3 text-white">
              <option selected value="">Cosa cerchi?</option>
              @foreach ($cat as $single_cat)
                <option  value="{{ $single_cat->id }}">{{ $single_cat->name }}</option>
              @endforeach
            </select>
            <h2 class="text-white ml-3">a</h2>
            <select name="city_id" class="search-sel custom-select-sm ml-2 text-white ml-3">
              <option selected value="">Dove?</option>
              @foreach ($cities as $city)
                <option  value="{{ $city->id }}">{{ $city->name }}</option>
              @endforeach
            </select>
            <button type="submit" class="ml-5 text-uppercase btn btn-light">Cerca</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('front.partials.scheda-cards')
  @include('front.partials.contatti')
  @include('front.partials.footer')
@endsection
