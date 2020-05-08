<div class="row mt-4">
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <p class="mb-0">Oggi è il {{now()->format('d-m-Y')}}</p>
        <h2 class="card-title">Immobili inseriti: </h2>
      </div>
    </div>
  </div>
  <div class="col-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Immobili</h5>
        <a href="{{route('inserisci')}}"><button type="button" class="btn btn-primary">Inserisci</button></a>
      </div>
    </div>
  </div>
  <div class="col-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Slider</h5>
        <a href="{{route('slider')}}"><button type="button" class="btn btn-success">Gestisci</button></a>
      </div>
    </div>
  </div>
  <div class="col-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Offerte</h5>
        <a href="{{route('offerte')}}"><button type="button" class="btn btn-warning">Gestisci</button></a>
      </div>
    </div>
  </div>
  <div class="col-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">News</h5>
        <a href="{{route('news')}}"><button type="button" class="btn btn-danger">Gestisci</button></a>
      </div>
    </div>
  </div>
</div>
