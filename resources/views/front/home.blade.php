@extends('app')

@section('content')
  @include('front.partials.nav')

  <div class="container">
    <div class="text-center mt-5 mb-5">
      <h1>Sito in manutenzione</h1>
      <h2>A breve saremo online con una nuova veste grafica!</h2>
    </div>
  </div>
  {{-- @include('front.partials.slider')
  @include('front.partials.search-mobile')
  @include('front.partials.search-home')

  @if(count($highlights) > 0)
    @include('front.partials.evidenza')
  @endif

  @include('front.partials.servizi')

  @if(count($offers) > 0)
    @include('front.partials.offerte')
  @endif

  @if(count($news) > 0)
    @include('front.partials.news')
  @endif --}}

  @include('front.partials.contatti')
  @include('front.partials.footer')
@endsection
