@extends('app')

@section('content')
  @include('front.partials.nav')
  @include('front.partials.slider')
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
  @endif

  @include('front.partials.contatti')
  @include('front.partials.footer')
@endsection
