@extends('app')

@section('content')
  @include('front.partials.nav')

  <div class="container mt-5">
    @include('back.partials.base')
    @include('back.partials.buttons')
    @include('back.partials.search-back')
    @include('back.partials.table')
  </div>
@endsection
