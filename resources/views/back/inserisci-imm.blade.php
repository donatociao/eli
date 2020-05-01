@extends('app')

@section('content')
  @include('front.partials.nav')
  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="eliano-red"><a href="{{route('dash')}}" class="btn btn-info mb-3 mr-3"><i class="fas fa-home"></i></a>Inserisci immobile</h1>

        <form class="mt-4" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="status">Status</label>
              <select id="status" class="form-control">
                <option selected>Scegli...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="category">Categoria</label>
              <select id="category" class="form-control">
                <option selected>Scegli...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="city">Città</label>
              <input type="text" class="form-control" id="city">
            </div>
            <div class="form-group col-md-3">
              <label for="address">Indirizzo</label>
              <input type="text" class="form-control" id="address">
            </div>
            <div class="form-group col-md-2">
              <label for="address">Richiesta</label>
              <input type="number" class="form-control" id="address">
            </div>

          </div>

          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="title">Titolo annuncio</label>
              <input type="text" class="form-control" id="title">
            </div>
            <div class="form-group col-md-1">
              <label for="mq">MQ</label>
              <input type="text" class="form-control" id="mq" placeholder="Valore">
            </div>
            <div class="form-group col-md-1">
              <label for="vani">Vani</label>
              <input type="text" class="form-control" id="vani" placeholder="Numero">
            </div>
            <div class="form-group col-md-1">
              <label for="wc">WC</label>
              <input type="text" class="form-control" id="wc" placeholder="Numero">
            </div>
            <div class="form-group col-md-1">
              <label for="box">Box</label>
              <input type="text" class="form-control" id="box" placeholder="Numero">
            </div>
            <div class="form-group col-md-1">
              <label for="ape">APE</label>
              <input type="text" class="form-control" id="ape" placeholder="Classe">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="exampleFormControlTextarea1">Descrizione</label>
              <textarea id="text-editor" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
            </div>
            <div class="form-group col-md-4">
              <label for="Product Name">Foto immobile</label>
              <br />
              <input type="file" class="form-control" name="photos[]" multiple />
            </div>
          </div>
          <div id="label"class="form-group d-flex flex-row">
            <div class="col-lg-1 d-flex flex-column align-items-center">
              <label for="ristutturato">Ristrutturato</label>
              <input id="ristrutturato" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
            <div class="col-lg-1 ml-3">
              <label for="riscaldamento">Riscaldamento</label>
              <input id="riscaldamento" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
            <div class="col-lg-1 ml-3">
              <label for="terrazzo">Terrazzo</label>
              <input id="terrazzo" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
            <div class="col-lg-1 ml-3">
              <label for="balconi">Balconi</label>
              <input id="balconi" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
            <div class="col-lg-1 ml-3">
              <label for="posto-auto">Posto auto</label>
              <input id="posto-auto" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>
            <div class="col-lg-1 ml-5">
              <label for="posto-auto"><b>Evidenza</b></label>
              <input id="posto-auto" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
            </div>

          </div>
          <button type="submit" class="mt-2 btn btn-primary">Carica immobile</button>
        </form>
      </div>
    </div>
  </div>
  <script>
  $(document).ready(function() {
      $('#text-editor').summernote({
        placeholder: "Scrivi qui il tuo testo",
        height: 120
      });

  });
</script>
@endsection
