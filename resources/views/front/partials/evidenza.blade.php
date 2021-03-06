<section class="evidenza mb-5">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-2 text-center">
        <h3 class="text-uppercase">In Evidenza</h3>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <div class="col-lg-2 pr-0 pl-5">
        <hr class="bg-eliano">
      </div>
      <div class="pl-2 pr-2 text-center">
        <i class="fi-xnluxx-home-thin color-yellow"></i>
      </div>
      <div class="col-lg-2 pl-0 pr-5">
        <hr class="bg-eliano">
      </div>
    </div>
  </div>
  <div class="text-center">
    <p class="under-title"><em>Scopri gli immobili in evidenza e trova subito la miglior soluzione per te!</em></p>
  </div>
</section>

<section class="mb-5">
  <div class="container">
    <div class="row">
      @foreach($highlights as $highlight)

      <div class="col-md-4 mb-4">
        <div class="card mr-0">
        @if ($highlight->venduto == "on")
          <img class="position-absolute w-100" src="{{asset('img/venduto.png')}}" alt="">
            {{-- <span class="position-absolute py-2 ml-2 mt-2 label-card badge rounded-pill bg-danger text-light">VENDUTO</span> --}}
        @endif
          <a href="{{route('show.immobile', ['slug' => $highlight->slug, 'immobile_id' => $highlight->immobile_id])}}">
            <img src="{{ asset('storage/'.$highlight->img_preview) }}" class="card-img-top" alt="...">
          </a>
          <div class="card-body bg-eliano d-flex flex-row text-white">
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/vaniw.png')}}" alt="area" class="icona-card"><span class="ml-2">{{$highlight->vani}} vani</span></div>
            </div>
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/wcw.png')}}" alt="area" class="icona-card"><span class="ml-2">{{$highlight->wc}} wc</span></div>
            </div>
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/areaw.png')}}" alt="area" class="icona-card"><span class="ml-2">{{$highlight->mq}} mq.</span></div>
            </div>
            </div>
          <div class="card-body">
            <h5 class="card-title font-weight-bold">{{$highlight->titolo}}</h5>
            <div class="container">
              <div class="row d-flex justify-content-between">
                <h5 class="red-eliano">€ {{number_format($highlight->price, 0, ',', '.')}}</h5>
                <a href="{{route('show.immobile', ['slug' => $highlight->slug, 'immobile_id' => $highlight->immobile_id])}}" class="btn bg-yellow btn-sm">Apri <i class="fa fa-search"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach

    </div>
  </div>
</section>
