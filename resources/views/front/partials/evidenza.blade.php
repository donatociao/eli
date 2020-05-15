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
      @foreach ($highlights as $highlight)
        {{-- @php
          dd($immobile->img_preview);
        @endphp --}}
      <div class="col-md-4 mb-4">
        <div class="card mr-0">
          <img src="{{ asset('storage/'.$highlight->immobile->img_preview) }}" class="card-img-top" alt="...">
          <div class="card-body bg-eliano d-flex flex-row text-white">
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/vaniw.png')}}" alt="area" class="icona-card"><span class="ml-2">{{$immobile->detail->vani}} vani</span></div>
            </div>
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/wcw.png')}}" alt="area" class="icona-card"><span class="ml-2">{{$immobile->detail->wc}} wc</span></div>
            </div>
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/areaw.png')}}" alt="area" class="icona-card"><span class="ml-2">{{$immobile->detail->mq}} mq.</span></div>
            </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">{{$highlight->immobile->titolo}}</h5>
            {{-- <p class="card-text">{!! strip_tags($immobile->description) !!}</p> --}}
            <div class="container">
              <div class="row d-flex justify-content-between">
                <h5>€ {{$highlight->immobile->price}}</h5>
                <a href="{{route('immobile')}}" class="btn bg-yellow btn-sm">Apri <i class="fa fa-search"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach


    </div>
  </div>
</section>
