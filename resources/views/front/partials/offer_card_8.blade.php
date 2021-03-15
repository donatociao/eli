<div class="card mt-5">
  @if ($single_offer->venduto == "on")
      <span class="position-absolute py-2 ml-2 mt-2 label-card badge rounded-pill bg-danger text-light">VENDUTO</span>
  @endif
  <div class="row no-gutters">
    <div class="col-md-8">
      <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title text-uppercase font-weight-bold">{{ $single_offer->titolo }}</h5>
          <div class="card-body d-flex">
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/vani.png')}}" alt="area" class="icona-card"><span class="ml-2">{{ $single_offer->vani }} vani</span></div>
            </div>
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/wc.png')}}" alt="area" class="icona-card"><span class="ml-2">{{ $single_offer->wc }} wc</span></div>
            </div>
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/area.png')}}" alt="area" class="icona-card"><span class="ml-2">{{ $single_offer->mq }} mq</span></div>
            </div>
          </div>
          {{-- <p class="card-text">{!! $single_offer->description !!}</p> --}}
          <div class="d-flex justify-content-between mt-4">
            <a href="{{route('show.immobile', ['slug' => $single_offer->slug, 'immobile_id' => $single_offer->immobile_id])}}" class="btn bg-yellow">Apri <i class="fa fa-search"></i></a>
            <h3 class="card-text red-eliano">€ {{ number_format($single_offer->price, 0, ',', '.') }}</h3>
          </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="{{ asset('storage/' . $single_offer->img_preview) }}" class="card-img img-fluid" alt="...">
    </div>
  </div>
</div>
