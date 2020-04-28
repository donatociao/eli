@extends('app')

@section('content')
  @include('front.partials.nav')
  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-lg-12">
        {{-- <a href="{{route('dash')}}" class="btn btn-info stretched-link mb-3">Indietro</a> --}}
        <a href="{{route('dash')}}" class="btn btn-info mb-3"><i class="fas fa-home"></i> Indietro</a>
        <h1 class="eliano-red">Gestisci Offerte</h1>

        <form class="mt-5" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="annuncio">Scegli un annuncio da mettere in offerta:</label>
              <select id="annuncio" class="form-control">
                <option selected>Scegli immobile</option>
                <option>Immobile 1</option>
                <option>Immobile 2</option>
                <option>Immobile 3</option>
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
                  <th scope="col">#</th>
                  <th scope="col">Immobile</th>
                  <th scope="col">Stato</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Città</th>
                  <th scope="col">Immagine</th>
                  <th scope="col">Elimina</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></td>
                </tr>
                <tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
