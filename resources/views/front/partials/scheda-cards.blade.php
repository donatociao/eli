<section class="mb-5">
  <div class="container">
    <div class="row">
      @php
        if($matches->isEmpty())
          echo '<div class="text-center"><h1>Non ci sono risultati per questa ricerca.</h1></div>';
      @endphp
      @foreach ($matches as $single_match)
      <div class="col-md-4">
        <div class="card mr-0 mt-3">
          <img src="{{ asset('storage/' . $single_match->img_preview) }}" class="card-img-top" alt="...">
          <div class="card-body bg-eliano d-flex flex-row text-white">
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/vaniw.png')}}" alt="area" class="icona-card"><span class="ml-2">{{ $single_match->detail->vani }} vani</span></div>
            </div>
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/wcw.png')}}" alt="area" class="icona-card"><span class="ml-2">{{ $single_match->detail->wc }} wc</span></div>
            </div>
            <div class="p-0 col-md-4 text-center">
              <div class="d-flex align-items-center justify-content-center"><img src="{{asset('img/areaw.png')}}" alt="area" class="icona-card"><span class="ml-2">{{ $single_match->detail->mq }} mq</span></div>
            </div>
          </div>
          <div class="card-body">
            <div class="card-height">
              <h5 class="card-title font-weight-bold">{!!$single_match->titolo!!} </h5>
            </div>

            {{-- <p class="card-text">{!! $single_match->description !!}</p> --}}
            <div class="container">
              <div class="row d-flex justify-content-between">
                <h5 class="red-eliano">€ {{ number_format($single_match->price, 0, ',', '.') }}</h5>
                <a href="{{route('show.immobile', ['slug' => $single_match->slug, 'immobile_id' => $single_match->id])}}" class="btn bg-yellow btn-sm">Apri <i class="fa fa-search"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
