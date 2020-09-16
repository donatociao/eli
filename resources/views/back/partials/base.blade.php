<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">Benvenuto {{ Auth::user()->name }}.</div>
        <div class="card-body ">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif
        <a href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" class="logo" alt="logo"></a>
        @if ($newMessages)
          <div class="mt-4 alert alert-primary" role="alert">
            Hai un nuovo messaggio!
          </div>
        @endif
        <a href="{{route('messages')}}"><button class="mt-4 btn btn-info d-flex justify-content-center"type="button" name="button"><h5>Messaggi</h5><i class="ml-2 far fa-2x fa-envelope"></i></button></a>
      </div>
    </div>
  </div>
</div>
