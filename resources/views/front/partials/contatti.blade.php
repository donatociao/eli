<section id="cont" class="mb-5 mt-3">
  @if(Session::get('success'))
    <script>
    $(function() {
      $('#ok-invio').modal('show');
    });
  </script>
  @endif
  <div id="ok-invio" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Grazie!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Il tuo messaggio è stato inviato correttamente!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Continua a navigare</button>
      </div>
    </div>
  </div>
</div>

  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-2 text-center">
        <h3 class="text-uppercase">Contatti</h3>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <div class="col-lg-2 pr-0 pl-5">
        <hr class="bg-eliano">
      </div>
      <div class="pl-2 pr-2 text-center">
        <i class="fi-xnluxx-envelope color-yellow"></i>
      </div>
      <div class="col-lg-2 pl-0 pr-5">
        <hr class="bg-eliano">
      </div>
    </div>
  </div>
  <div class="text-center">
    <p class="under-title"><em>Da 25 anni al fianco di chi cerca o vende un immobile!</em></p>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <img src="{{asset('img/logo.png')}}" class="w-50 mb-5" alt="">
      <address class="mb-5">
        <p><i class="fi-xnluxx-map-marker mr-2"></i>Via B. Buozzi, 41 - Eboli (SA)</p>
        <p><i class="fi-xnluxx-envelope mr-2"></i><a class="text-dark" href="mailto:info@eliano.it">info@eliano.it</a></p>
        <p><i class="fi-xnluxx-phone mr-2"></i><a class="text-dark" href="tel:+390828367378">+39 0828 367378</a></p>
        <p><i class="fi-xnsuxx-smartphone-solid mr-2"></i><a class="text-dark" href="tel:+393939648916">+39 393 9648916</a></p>
      </address>
      <div class="mt-5 mb-5">
        <h3>Seguici sui social!</h3>
        <a class="mr-3" href="https://www.facebook.com/elianoimmobiliare/"><i class="fi-xnsuxx-facebook red-eliano "></i></a>
        <a href="https://twitter.com/elianoinfo" class="mt-1"><i class="fi-xnsuxx-twitter red-eliano"></i></a>
      </div>
    </div>
    <div class="col-lg-6 mb-5">
      @if(Session::has('success'))
        <div class="alert alert-success">
          {{ Session::get('success') }}
        </div>
      @endif
      <form method="post" action="{{route('invio.richiesta')}}">
        @csrf
        @if (Route::current()->getName() == 'show.immobile')
          <h5 class="mb-3">Sei interessato a questo immobile?</h5>
        @else
          <h5 class="mb-3">Come possiamo aiutarti?</h5>
        @endif
        <div class="form-group">
          <input name="name" type="text" class="form-control" id="name" placeholder="Nome e Cognome">
        </div>
        <div class="form-group">
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <input name="phone" type="text" class="form-control" id="mobile" placeholder="Telefono">
        </div>
        <div class="form-group">
          <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Scrivi qui il tuo messaggio...">@if (Route::current()->getName() == 'show.immobile')Salve, sono interessato a questo immobile: {{$immobile_show->titolo}}
            @endif</textarea>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Accetto l'informativa sulla Privacy.</label>
        </div>
        <button type="submit" class="btn bg-yellow">Invia</button>
      </form>
    </div>
  </div>
</div>
