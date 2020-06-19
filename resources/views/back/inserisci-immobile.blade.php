@extends('app')

@section('content')
  @include('front.partials.nav')
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="eliano-red"><a href="{{route('dash')}}" class="btn btn-info mb-3 mr-3"><i class="fas fa-home"></i></a>Inserisci immobile</h1>
        <form class="mt-4" method="post" action="{{route('immobili.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="stato_id">Status</label>
              <select id="stato_id" name="stato_id" class="form-control" value="{{ old('stato_id') }}">
                @foreach ($status as $stato)
                  <option value="{{$stato->id}}">{{$stato->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="category_id">Categoria</label>
              <select id="category_id" name="category_id" class="form-control" value="{{ old('category_id') }}" >
                <option>Scegli...</option>
                @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="city">Città</label>
              <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" >
            </div>
            <div class="form-group col-md-3">
              <label for="address">Indirizzo</label>
              <input type="text" class="form-control" id="address" name="address" >
            </div>
            <div class="form-group col-md-2">
              <label for="price">Richiesta</label>
              <input type="number" class="form-control" id="price" name="price" >
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="title">Titolo annuncio</label>
              <input type="text" class="form-control" id="title" name="titolo" >
            </div>
            <div class="form-group col-md-1">
              <label for="mq">MQ</label>
              <input type="text" class="form-control" id="mq" placeholder="Valore" name="mq" >
            </div>
            <div class="form-group col-md-1">
              <label for="vani">Vani</label>
              <input type="text" class="form-control" id="vani" placeholder="Numero" name="vani" >
            </div>
            <div class="form-group col-md-1">
              <label for="wc">WC</label>
              <input type="text" class="form-control" id="wc" placeholder="Numero" name="wc" >
            </div>
            <div class="form-group col-md-1">
              <label for="box">Box</label>
              <input type="text" class="form-control" id="box" placeholder="Numero" name="box" >
            </div>
            <div class="form-group col-md-1">
              <label for="ape">APE</label>
              <select id="ape" name="ape" class="form-control" value="{{ old('stato_id') }}">
                <option value="G">G</option>
                <option value="F">F</option>
                <option value="E">E</option>
                <option value="D">D</option>
                <option value="C">C</option>
                <option value="B">B</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="A3">A3</option>
                <option value="A4">A4</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="title">Link video YouTube</label>
              <input type="text" class="form-control" id="title" name="video_link">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="exampleFormControlTextarea1">Descrizione</label>
              <textarea id="text-editor" class="form-control" id="exampleFormControlTextarea1" rows="6" name="description"></textarea>
            </div>
            <div class="form-group col-md-4">
              <label for="Product Name">Immagine di anteprima</label>
              <br/>
              <input type="file" class="form-control" name="img_preview[]" multiple />
            </div>
            <div class="form-group col-md-4">
              <label for="Product Name">Foto immobile</label>
              <br/>
              <input type="file" class="form-control" name="photos[]" multiple />
            </div>

          </div>


            <div id="label"class="form-group d-flex flex-row col-lg-12 mt-4">
              <div class="col-lg-1 align-items-center">
                <label for="ristutturato">Ristrutturato</label>
                <input id="ristrutturato" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="ristrutturato">
              </div>
              <div class="col-lg-1 ml-3">
                <label for="riscaldamento">Riscaldamento</label>
                <input id="riscaldamento" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="riscaldamento">
              </div>
              <div class="col-lg-1 ml-3">
                <label for="terrazzo">Terrazzo</label>
                <input id="terrazzo" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="terrazzo">
              </div>
              <div class="col-lg-1 ml-3">
                <label for="balconi">Balconi</label>
                <input id="balconi" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="balconi">
              </div>
              <div class="col-lg-1 ml-3">
                <label for="posto-auto">Posto auto</label>
                <input id="posto_auto" type="checkbox" checked data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="posto_auto">
              </div>
              <div class="col-lg-1 ml-5">
                <label for="evidenza"><b>Evidenza</b></label>
                <input id="evidenza" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="evidenza">
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
