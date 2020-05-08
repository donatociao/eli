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
          <th scope="col">Apri</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($immobili as $immobile)
          <tr>
            <th scope="row">{{$immobile->id}}</th>
            <td>{{$immobile->titolo}}</td>
            <td>{{$immobile->stato->name}}</td>
            <td>{{$immobile->city->name}}</td>
            <td>Città</td>
            <td><button type="button" class="btn btn-info"><i class="fas fa-search-plus"></i></button></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
