<div id="subnav-mobile" class="subnav container mt-3 mb-2">
  <div class="row d-flex align-items-center">
    <div class="col-lg-2 text-center mt-5 mb-5">
      <a href="/"><img src="{{asset('img/logo.png')}}" class="img-fluid w-50" alt="logo-eliano"></a>
    </div>
  </div>
</div>
<div id="ricerca-mobile" class="bg-eliano">
  <div class="container d-flex flex-row align-items-center justify-content-center">

    <form class="container text-center" method="post" action="{{route('search.immobile')}}" enctype="multipart/form-data">
      <h2 class="text-white mt-5">Trova il tuo immobile</h2>
      {{ csrf_field() }}

    <select name="category_id" class="search-sel custom-select-lg text-white mt-5">
      <option selected value="">Cosa cerchi?</option>
      @foreach ($cat as $single_cat)
            <option  value="{{ $single_cat->id }}">{{ $single_cat->name }}</option>
      @endforeach
    </select>
    <select name="state_id" id="search_type" class="search-sel custom-select-lg text-white mt-5">
      <option selected value="">Vendita o affitto?</option>
	  @foreach ($statos as $single_state)
		<option value="{{ $single_state->id }}">{{ $single_state->name }}</option>
	  @endforeach
    </select>
    <select name="city_id" class="search-sel custom-select-lg ml-2 text-white mt-5">
      <option selected value="">Dove?</option>
      @foreach ($cities as $city)
        <option  value="{{ $city->id }}">{{ $city->name }}</option>
      @endforeach
    </select>
    <button type="submit" class="mb-5 mt-5 text-uppercase btn btn-light ">Vai ai risultati!</button>
    </form>
  </div>
</div>
