<section class="evidenza mb-5 pb-5 bg-eliano">
  <div class="container">
    <div class="row d-flex justify-content-center pt-5">
      <div class="col-lg-6 text-center">
        <h3 class="text-uppercase text-white">news & bacheca</h3>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <div class="col-lg-2 pr-0 pl-5">
        <hr class="bg-eliano">
      </div>
      <div class="pl-2 pr-2 text-center">
        <i class="fi-xnsuxx-bell-solid color-yellow"></i>
      </div>
      <div class="col-lg-2 pl-0 pr-5">
        <hr class="bg-eliano">
      </div>
    </div>
  </div>
  <div class="text-center">
    <p class="under-title text-white"><em>Scopri subito le ultime news in bacheca!</em></p>
  </div>
  <div class="container mt-5 pb-5">
    <div class="row">

        @foreach ($news as $single_news)
          @php
            $img_idx = $single_news->id;
          @endphp

        <div class="col-md-4">
          <div class="card mr-0">
            <img src="{{ asset('storage/'.$images[$img_idx]) }}" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $single_news->title }}</h5>
              <p class="card-text">{{ ! $single_news->body }}</p>
              <a href="{{ route('show.news', ['slug' => $single_news->slug, 'news_id' => $single_news->id]) }}" href="" class="btn bg-yellow">Leggi</a>
            </div>
          </div>
      </div>
      @endforeach

  </div>
</section>
