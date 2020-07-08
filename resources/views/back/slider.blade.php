@extends('app')

@section('content')
  @include('front.partials.nav')
  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-lg-12">
        {{-- <a href="{{route('dash')}}" class="btn btn-info stretched-link mb-3">Indietro</a> --}}

        <h1 class="eliano-red"><a href="{{route('dash')}}" class="btn btn-info mb-3 mr-3"><i class="fas fa-home"></i></a>Gestisci Slider</h1>

        <form class="mt-5" action="{{route('store.slider')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="slider">Immobile</label>
              <select id="slider" class="form-control" name="immobile_id">
                <option selected>Scegli immobile</option>
                @foreach ($immobili as $immobile)
                  <option value="{{$immobile->id}}">{{$immobile->titolo}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <button type="submit" class=" btn btn-primary">Carica</button>
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
                  <th scope="col">Azione</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sliders as $slider)
                  <tr>
                    <td>{{$slider->immobile->titolo}}</td>
                    <td>{{$slider->immobile->stato->name}}</td>
                    <td>{{$slider->immobile->category->name}}</td>
                    <td>{{$slider->$immobile['city']['name'] }}</td>
                    <td>
                      <a href="{{route('show.immobile', ['slug' => $slider->immobile->slug, 'immobile_id' => $slider->immobile_id])}}" class="btn btn-info"><i class="fa fa-search-plus"></i></a>
                      <a href="{{ route('destroy.slider', $slider->id) }}"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a>
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
