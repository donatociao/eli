<div class="card mt-5 mb-3">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $single_offer->img_preview) }}" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title text-uppercase">{{ $single_offer->titolo }}</h5>
                <p class="card-text">{!! $single_offer->description !!}</p>
                <p class="card-text"><small class="text-muted">{{ $single_offer->price }} €</small></p>
                <a href="{{route('show.immobile', ['slug' => $single_offer->slug, 'immobile_id' => $single_offer->id])}}" class="btn bg-yellow btn-sm">Apri <i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>
</div>
