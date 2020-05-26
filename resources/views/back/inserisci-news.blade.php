@extends('app')

@section('content')
  @include('front.partials.nav')
  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-lg-12">
        {{-- <a href="{{route('dash')}}" class="btn btn-info stretched-link mb-3">Indietro</a> --}}
        <h1 class="eliano-red"><a href="{{route('dash')}}" class="btn btn-info mb-3 mr-3"><i class="fas fa-home"></i></a>Gestisci News</h1>

        <form class="mt-3" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-row ">
            <div class="form-group col-md-8">
              <label for="title">Titolo annuncio</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group col-md-8">
              <label for="body">Testo news</label>
              <textarea name="body" class="form-control" id="news-editor" rows="6"></textarea>
            </div>
            <div class="form-group col-md-4">
              <label for="img_news[]">Immagine</label>
              <input type="file" class="form-control" name="img_news[]" multiple/>
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
                  <th scope="col">id</th>
                  <th scope="col">Titolo</th>
                  <th scope="col">Data inserimento</th>
                  <th scope="col">Elimina</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($news as $single_news)
                <tr>
                  <th scope="row">{{ $single_news->id }}</th>
                  <th scope="row">{{ $single_news->title }}</th>
                  <th scope="row">{{ $single_news->created_at }}</th>
                  <td><a href="{{ route('destroy.news', ['id' => $single_news->id ]) }}"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
  $(document).ready(function() {
      $('#news-editor').summernote({
        placeholder: "Scrivi qui il tuo testo",
        height: 120
      });

  });
</script>

@endsection
