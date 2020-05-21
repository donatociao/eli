@extends('app')

@section('content')
  @include('front.partials.nav')
  @include('front.partials.subnav')
  <div class="container mb-4">
    <div class="row mt-5">
      <div class="col-lg-12">
        <h1 class="text-uppercase"><div class="status-scheda text-center "><p class="text-uppercase text-dark">Bacheca</p></div>{{ ! $show_news->title }}</h1>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-6">
        <h3>Descrizione</h3>
        <p>{!!$show_news->body!!}</p>
        <img src="{{ asset('storage/'. $news_image[0]['path']) }}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 mb-5">
        <form>
          <h3 class="mb-2">Contattaci subito!</h3>
          <div class="form-group">
            <input type="name" class="form-control" id="name" placeholder="Nome e Cognome">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <input type="mobile" class="form-control" id="mobile" placeholder="Cellulare">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Scrivi qui il tuo messaggio..."></textarea>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Accetto l'informativa privacy</label>
          </div>
          <button type="submit" class="btn btn-success">Invia</button>
        </form>
      </div>
    </div>
  </div>
@include('front.partials.footer')
@endsection
