
<div class="row mt-4 justify-content-end">
  <div class="col-lg-4">
    <div class="input-group mb-3">
      <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group-prepend">
        <button class="btn btn-outline-info" type="button" id="button-addon1">Cerca</button>
      </div>
        <input type="text" class="form-control" placeholder="Cosa vuoi cercare?" aria-label="Cerca immobile..." aria-describedby="button-addon1">
      </form>
    </div>
  </div>
</div>
