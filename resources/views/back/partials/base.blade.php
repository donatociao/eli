<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">Benvenuto {{ Auth::user()->name }}.</div>
        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif
        <a href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" class="logo" alt="logo"></a> 
      </div>
    </div>
  </div>
</div>
