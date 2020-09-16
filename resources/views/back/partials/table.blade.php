<div class="row mt-2">
  <div class="col-lg-12">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Immobile</th>
          <th scope="col">Stato</th>
          <th scope="col">Categoria</th>
          <th scope="col">Città</th>
          <th scope="col">Azioni</th>
          <th scope="col">Visibilità</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($immobili as $immobile)
          <tr>
            <th scope="row">{{$immobile->id}}</th>
            <td>{{$immobile->titolo}}</td>
            <td>{{$immobile->stato->name}}</td>
            <td>{{$immobile->category->name }}</td>
            <td>{{ $immobile['city']['name'] }}</td>
            <td>
              <a href="{{ route('destroy.immobile', $immobile->id) }}"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a>
              <a href="{{ route('edit.immobile', $immobile->id) }}"><button type="button" class="btn btn-warning"><i class="far fa-edit"></i></button></a>
              <a href="{{route('show.immobile', ['slug' => $immobile->slug, 'immobile_id' => $immobile->id])}}"><button type="button" class="btn btn-info"><i class="fas fa-search-plus"></i></button></a>
            </td>
            <td>on off</td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
