@extends('app')

@section('content')
  @include('front.partials.nav')
  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-lg-12">
        {{-- <a href="{{route('dash')}}" class="btn btn-info stretched-link mb-3">Indietro</a> --}}
        <a href="{{route('dash')}}" class="btn btn-info mb-3"><i class="fas fa-home"></i> Indietro</a>
        <h1 class="eliano-red">Gestisci News</h1>

        <form class="mt-5" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-row ">
            <div class="form-group col-md-8">
              <label for="news">Testo news</label>
              <textarea class="form-control" id="news" rows="6"></textarea>
            </div>
            <div class="form-group col-md-4">
              <label for="Product Name">Immagine</label>
              <input type="file" class="form-control" name="photos[]" multiple/>
              <br>
            </div>

          </div>
          <button type="submit" class="btn btn-primary">Inserisci news</button>
        </form>
        <div class="row mt-5">
          <div class="col-lg-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titolo</th>
                  <th scope="col">Data inserimento</th>
                  <th scope="col">Elimina</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
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
