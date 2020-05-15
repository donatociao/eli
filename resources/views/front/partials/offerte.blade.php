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

        @php
          $i = 0;
        @endphp
      @foreach ($offers as $single_offer)
        @php
          $i+1;
          if(($i % 2) == 0 ){
            $include = 'front.partials.offer_card_4';
          } else {
            $include = 'front.partials.offer_card_8';
          }
          $i++;
        @endphp

        @include($include)

        @endforeach
      </div>
    </div>
  </div>
</section>
