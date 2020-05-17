@extends('app')

@section('content')
  @include('front.partials.nav')
  @include('front.partials.subnav')
  <div class="container mb-4">
    <div class="row mt-5">
      <div class="col-lg-12">
        <h1 class="text-uppercase"><div class="status-scheda text-center "><p class="text-uppercase text-dark">{{$immobile_show->stato->name}}</p></div>{{$immobile_show->titolo}}</h1>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-8">
        <ul id="imageGallery">
          <li data-thumb="{{ asset('storage/'.$immobile_show->img_preview) }}" data-src="{{ asset('storage/'.$immobile_show->img_preview) }}">
            <img class="img-fluid" src="{{ asset('storage/'.$immobile_show->img_preview) }}" />
          </li>
          @foreach ($images as $image)
            <li data-thumb="{{ asset('storage/'.$image->filepath) }}" data-src="{{ asset('storage/'.$image->filepath) }}">
              <img class="img-fluid" src="{{ asset('storage/'.$image->filepath) }}" />
            </li>
          @endforeach
        </ul>
        <h4 class="mt-3">Descrizione</h4>
        <p>{!!$immobile_show->description!!}</p>
      </div>
      <div class="col-lg-4 mb-5">
        <h4 class="">Dettagli immobile</h4>
        <div class="row">
          <div class="col-lg-6">
            <div class="mt-4 d-flex align-items-center"><img src="http://localhost:8000/img/area.png" alt="area" class="icona"><span class="ml-3">{{$immobile_show->detail->mq}} mq.</span></div>
            <div class="mt-4 d-flex align-items-center"><img src="http://localhost:8000/img/vani.png" alt="vani" class="icona"><span class="ml-3">{{$immobile_show->detail->vani}} Vani</span></div>
            <div class="mt-4 d-flex align-items-center"><img src="http://localhost:8000/img/wc.png" alt="wc" class="icona"><span class="ml-3">{{$immobile_show->detail->wc}} Bagni</span></div>
            <div class="mt-4 d-flex align-items-center"><img src="http://localhost:8000/img/box.png" alt="box" class="icona"><span class="ml-3">{{$immobile_show->detail->box}} box</span></div>
            <div class="mt-4 d-flex align-items-center"><img src="http://localhost:8000/img/ape.png" alt="ape" class="icona"><span class="ml-3">Classe {{$immobile_show->detail->ape}}</span></div>
          </div>
          <div class="col-lg-6">
            <div class="mt-4 d-flex align-items-center">
              @if ($immobile_show->feature->ristrutturato == 'on')
                <i class="text-success fas fa-2x fa-check-circle"></i>
              @else
                <i class="text-danger fas fa-2x fa-times-circle"></i>
              @endif
              <span class="ml-3">Ristrutturato</span>
            </div>
            <div class="mt-4 d-flex align-items-center">
              @if ($immobile_show->feature->riscaldamento == 'on')
                <i class="text-success fas fa-2x fa-check-circle"></i>
              @else
                <i class="text-danger fas fa-2x fa-times-circle"></i>
              @endif
              <span class="ml-3">Riscaldamento</span>
            </div>
            <div class="mt-4 d-flex align-items-center">
              @if ($immobile_show->feature->terrazzo == 'on')
                <i class="text-success fas fa-2x fa-check-circle"></i>
              @else
                <i class="text-danger fas fa-2x fa-times-circle"></i>
              @endif
              <span class="ml-3">Terrazzo</span>
            </div>
            <div class="mt-4 d-flex align-items-center">
              @if ($immobile_show->feature->posto_auto == 'on')
                <i class="text-success fas fa-2x fa-check-circle"></i>
              @else
                <i class="text-danger fas fa-2x fa-times-circle"></i>
              @endif
              <span class="ml-3">Posto auto</span>
            </div>
            <div class="mt-4 d-flex align-items-center">
              @if ($immobile_show->feature->balconi == 'on')
                <i class="text-success fas fa-2x fa-check-circle"></i>
              @else
                <i class="text-danger fas fa-2x fa-times-circle"></i>
              @endif
              <span class="ml-3">Balconi</span>
            </div>
          </div>
        </div>
        <div class="row">
          <p class="font-55 eliano-red mt-4">€ {{$immobile_show->price}}</p>
        </div>
      </div>
    </div>
  </div>
  @include('front.partials.contatti')
  @include('front.partials.footer')
@endsection
