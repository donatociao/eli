@extends('app')

@section('content')
  @include('front.partials.nav')
  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-lg-12">
        {{-- <a href="{{route('dash')}}" class="btn btn-info stretched-link mb-3">Indietro</a> --}}
        <h1 class="eliano-red"><a href="{{route('dash')}}" class="btn btn-info mb-3 mr-3"><i class="fas fa-home"></i></a>Gestisci Offerte</h1>

        <form class="mt-5" method="post" action="{{ route('store.offerte') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="annuncio">Scegli un annuncio da mettere in offerta:</label>
              <select id="annuncio" class="form-control" name="immobile_id">
                <option selected>Scegli immobile</option>
              @foreach($immobili as $immobile)
                <option value="{{ $immobile->id }}">{{ $immobile->titolo }}</option>
              @endforeach
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Inserisci offerta</button>
        </form>
        <div class="row mt-5">
          <div class="col-lg-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Immobile</th>
                  <th scope="col">Stato</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Città</th>
                  <th scope="col">Azioni</th>
                </tr>
              </thead>
              <tbody>
              @foreach($offers as $single_offer)
                <tr>
                  <td>{{ $single_offer->immobile->titolo }}</td>
                  <td>{{ $single_offer->immobile->stato->name }}</td>
                  <td>{{ $single_offer->immobile->category->name }}</td>
                  <td>{{ $single_offer->immobile->city->name }}</td>
                  <td>
                    <a href="{{route('show.immobile', ['slug' => $single_offer->immobile->slug, 'immobile_id' => $single_offer->immobile_id])}}" class="btn btn-info"><i class="fa fa-search-plus"></i></a>
                    <a href="{{ route('destroy.offerte', $single_offer->id) }}"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a></td>
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
