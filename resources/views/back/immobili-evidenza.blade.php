@extends('app')

@section('content')
  @include('front.partials.nav')
  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="eliano-red"><a href="{{route('dash')}}" class="btn btn-info mb-3 mr-3"><i class="fas fa-home"></i></a>Immobili in evidenza</h1>

        <form class="mt-5" method="post" action="{{route('store.evidenza')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="annuncio">Scegli un annuncio da mettere in evidenza:</label>
              <select id="annuncio" class="form-control" name="immobile_id">
                <option selected>Scegli immobile...</option>
                @foreach ($immobili as $immobile)
                  <option value="{{$immobile->id}}">{{$immobile->titolo}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Inserisci</button>
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

                @foreach ($highlights as $highlight)
                  <tr>
                    <td>{{$highlight->immobile->titolo}}</td>
                    <td>{{$highlight->immobile->stato->name}}</td>
                    <td>{{$highlight->immobile->category->name}}</td>
                    <td>{{$highlight->$immobile['city']['name'] }}</td>
                    <td>
                      <a href="{{route('show.immobile', ['slug' => $highlight->immobile->slug, 'immobile_id' => $highlight->immobile_id])}}" class="btn btn-info"><i class="fa fa-search-plus"></i></a>
                      <a href="{{ route('destroy.evidenza', $highlight->id) }}"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a>
                    </td>
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
