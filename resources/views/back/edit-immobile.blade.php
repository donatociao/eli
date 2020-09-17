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
    <script type="text/javascript">
        function delRequest(value) {
            $.ajax({
                type: 'get',
                url: '{{ URL::to('delimg/') }}/' + value,
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Foto cancellata!'

                    });
                    $('#'+value).hide();
                }
            });
        }

        function delRequestPreview(value) {
            $.ajax({
                type: 'get',
                url: '{{ URL::to('delfrompreview/') }}/' + value,
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Foto di anteprima eliminata!'

                    });
                    $('#'+value).hide();
                }
            });
        }

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

    </script>
    <div class="container mt-3 mb-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="eliano-red"><a href="{{route('dash')}}" class="btn btn-info mb-3 mr-3"><i class="fas fa-home"></i></a>Modifica immobile</h1>
                <form class="mt-4" method="post" action="{{route('update.immobile', $imm_to_edit->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="stato_id">Status</label>
                            <select id="stato_id" name="stato_id" class="form-control" value="{{ old('stato_id') }}">
                                @foreach ($status as $stato)
                                    <option value="{{$stato->id}}" {{ $stato->id == $imm_to_edit->stato_id ? 'selected' : '' }}>{{$stato->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="category_id">Categoria</label>
                            <select id="category_id" name="category_id" class="form-control" value="{{ old('category_id') }}" >
                                <option>Scegli...</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{ $category->id == $imm_to_edit->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="city">Città</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ $imm_to_edit->city->name }}" >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="address">Indirizzo</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $imm_to_edit->address }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="price">Richiesta</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ $imm_to_edit->price }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="title">Titolo annuncio</label>
                            <input type="text" class="form-control" id="title" name="titolo" value="{{ $imm_to_edit->titolo }}">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="mq">MQ</label>
                            <input type="text" class="form-control" id="mq" placeholder="Valore" name="mq" value="{{ $imm_to_edit->detail->mq }}">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="vani">Vani</label>
                            <input type="text" class="form-control" id="vani" placeholder="Numero" name="vani" value="{{ $imm_to_edit->detail->vani }}">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="wc">WC</label>
                            <input type="text" class="form-control" id="wc" placeholder="Numero" name="wc" value="{{ $imm_to_edit->detail->wc }}">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="box">Box</label>
                            <input type="text" class="form-control" id="box" placeholder="Numero" name="box" value="{{ $imm_to_edit->detail->box }}">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="ape">APE</label>
                            <select id="ape" name="ape" class="form-control" value="{{ $imm_to_edit->detail->ape }}">
                                <option value="in definizione" {{ $imm_to_edit->detail->ape == "in definizione" ? 'selected' : '' }}>in definizione</option>
                                <option value="G" {{ $imm_to_edit->detail->ape == "G" ? 'selected' : '' }}>G</option>
                                <option value="F" {{ $imm_to_edit->detail->ape == "F" ? 'selected' : '' }}>F</option>
                                <option value="E" {{ $imm_to_edit->detail->ape == "E" ? 'selected' : '' }}>E</option>
                                <option value="D" {{ $imm_to_edit->detail->ape == "D" ? 'selected' : '' }}>D</option>
                                <option value="C" {{ $imm_to_edit->detail->ape == "C" ? 'selected' : '' }}>C</option>
                                <option value="B" {{ $imm_to_edit->detail->ape == "B" ? 'selected' : '' }}>B</option>
                                <option value="A1" {{ $imm_to_edit->detail->ape == "A1" ? 'selected' : '' }}>A1</option>
                                <option value="A2" {{ $imm_to_edit->detail->ape == "A2" ? 'selected' : '' }}>A2</option>
                                <option value="A3" {{ $imm_to_edit->detail->ape == "A3" ? 'selected' : '' }}>A3</option>
                                <option value="A4" {{ $imm_to_edit->detail->ape == "A4" ? 'selected' : '' }}>A4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="title">Link video YouTube</label>
                            <input type="text" class="form-control" id="title" name="video_link" value="{{ $imm_to_edit->video_link}}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="exampleFormControlTextarea1">Descrizione</label>
                            <textarea id="text-editor" class="form-control" id="exampleFormControlTextarea1" rows="6" name="description">{!! $imm_to_edit->description !!}</textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Product Name">Immagine di anteprima</label>
                            <br/>
                            <input type="file" class="form-control" name="img_preview[]" multiple />
                            <div id="{{ $imm_to_edit->id }}" class="mt-3">
                                <img class="img-fluid" src="{{ asset('storage/'.$imm_to_edit->img_preview) }}" />
                                <div class="overlay justify-content-center d-flex align-items-center"><a class="text-white si" href="#" onclick="delRequestPreview({{ $imm_to_edit->id }}); return false;">CANCELLA</a></div>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="Product Name">Foto immobile</label>
                            <br/>
                            <input type="file" class="form-control" name="photos[]" multiple />
                        </div>
                    </div>

                    <div class="d-flex flex-row row">
                      @foreach ($immobile_images as $image)
                              <div id="{{ $image->id }}" class="col-lg-2 mt-2">
                                  <img class="img-thumbnail mr-3" src="{{ asset('storage/'.$image->filepath) }}" />
                                  <div class="overlay justify-content-center d-flex align-items-center"><a class="text-white si" href="#" onclick="delRequest({{ $image->id }}); return false;">CANCELLA</a></div>
                              </div>
                       @endforeach
                    </div>

                    <div class="form-row">
                      <h4 class="mt-5">Gestione Dettagli Immobile</h4>
                      <div id="label"class="form-group d-flex flex-row col-lg-12 mt-4">
                        <div class="col-lg-1 align-items-center">
                            <label for="ristutturato">Ristrutturato</label>
                            <input id="ristrutturato" type="checkbox" {{ $features->ristrutturato == 'on' ? 'checked' : '' }} data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="ristrutturato">
                        </div>
                        <div class="col-lg-1 ml-3">
                            <label for="riscaldamento">Riscaldamento</label>
                            <input id="riscaldamento" type="checkbox" {{ $features->riscaldamento == 'on' ? 'checked' : '' }} data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="riscaldamento">
                        </div>
                        <div class="col-lg-1 ml-3">
                            <label for="terrazzo">Terrazzo</label>
                            <input id="terrazzo" type="checkbox" {{ $features->terrazzo == 'on' ? 'checked' : '' }} data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="terrazzo">
                        </div>
                        <div class="col-lg-1 ml-3">
                            <label for="balconi">Balconi</label>
                            <input id="balconi" type="checkbox" {{ $features->balconi == 'on' ? 'checked' : '' }} data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="balconi">
                        </div>
                        <div class="col-lg-1 ml-3">
                            <label for="posto-auto">Posto auto</label>
                            <input id="posto_auto" type="checkbox" {{ $features->posto_auto == 'on' ? 'checked' : '' }} data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="posto_auto">
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <h4 class="mt-5">Gestione Visibilità</h4>
                      <div id="label" class="form-group d-flex flex-row col-lg-12 mt-4 ">
                            {{-- EVIDENZA --}}
                            {{-- <div class="col-lg-1">
                              <label for="evidenza">Evidenza</label>
                              <input id="evidenza" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="evidenza">
                            </div> --}}
                          <div class="col-lg-1 ml-3">
                            <label for="visible">Visibilità</label>
                            <input id="visible" type="checkbox" {{ $imm_to_edit->visible == 'on' ? 'checked' : '' }} data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="visible">
                          </div>
                        </div>
                      </div>

                        {{-- Evidenza --}}
                        {{-- <div class="col-lg-1 ml-5">
                            <label for="evidenza"><b>Evidenza</b></label>
                            <input id="evidenza" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="evidenza">
                        </div> --}}

                        {{-- <div class="col-lg-1 ml-3">
                            <label for="visible">Visibilità</label>
                            <input id="visible" type="checkbox" {{ $imm_to_edit->visible == 'on' ? 'checked' : '' }} data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger" name="riscaldamento">
                        </div> --}}
                    </div>

                    <button type="submit" class="mt-2 btn btn-primary">Modifica immobile</button>
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
