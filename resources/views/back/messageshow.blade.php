@extends('app')
@section('content')
  @include('front.partials.nav')
  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-lg-12">
        {{-- <a href="{{route('dash')}}" class="btn btn-info stretched-link mb-3">Indietro</a> --}}
        <h1 class="eliano-red"><a href="{{route('messages')}}" class="btn btn-info mb-3 mr-3"><i class="far fa-envelope"></i></a>Messaggi ricevuti</h1>
        <div class="row mt-5">
          <div class="col-lg-12">
            <h4>Ciao Enrico, hai ricevuto una richiesta!</h4>
            <br>
            <p>Ecco i dettagli:</p>
            <b>Nome:</b> {{ $messageToshow->name }} <br>
            <b>Email:</b> {{ $messageToshow->email }} <br>
            <b>Telefono:</b> {{ $messageToshow->phone}} <br>
            <b>Messaggio:</b> {{ $messageToshow->message }} <br>
            <br>
            <p>Buona giornata :)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
