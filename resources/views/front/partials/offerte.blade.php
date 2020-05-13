<section class="mt-5">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6 text-center">
        <h3 class="text-uppercase">Offerte del mese</h3>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <div class="col-lg-2 pr-0 pl-5">
        <hr class="bg-eliano">
      </div>
      <div class="pl-2 pr-2 text-center">
        <i class="fi-xnllxx-label color-yellow"></i>
      </div>
      <div class="col-lg-2 pl-0 pr-5">
        <hr class="bg-eliano">
      </div>
    </div>
  </div>
  <div class="text-center">
    <p class="under-title "><em>Scorpi subito le nostre offerte del mese in vendita o in affitto!</em></p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        @foreach ($offers as $single_offer)
        <div class="card mt-5 mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="https://source.unsplash.com/user/erondu/1600x900" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title text-uppercase">APPARTAMENTO TITOLO</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <!--<div class="card mt-5">
          <div class="row no-gutters">
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">APPARTAMENTO TITOLO</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-4">
              <img src="https://source.unsplash.com/user/erondu/1600x900" class="card-img" alt="...">
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </div>
</section>
