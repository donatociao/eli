<div class="search-home position-absolute bg-eliano d-flex flex-row justify-content-center">
  <div class="container d-flex flex-row align-items-center justify-content-center">
    <h2 class="text-white">Cerco</h2>
    <select class="search-sel custom-select-sm ml-3 text-white">
      <option selected>Cosa cerchi?</option>
      @foreach ($cat as $single_cat)
            <option value="{{ $single_cat->id }}">{{ $single_cat->name }}</option>
      @endforeach
    </select>
    <h2 class="text-white ml-3">in</h2>
    <select class="search-sel custom-select-sm ml-2 text-white ml-3">
      <option selected>Vendita o affitto?</option>
	  @foreach ($statos as $single_state)
		<option value="{{ $single_state->id }}">{{ $single_state->name }}</option>
	  @endforeach
    </select>
    <h2 class="text-white ml-3">a</h2>
    <select class="search-sel custom-select-sm ml-2 text-white ml-3">
      <option selected>Dove?</option>
      @foreach ($cities as $city)
        <option value="{{ $city->id }}">{{ $city->name }}</option>
      @endforeach
    </select>
    <button type="button" class="ml-5 text-uppercase btn btn-light">Vai ai risultati!</button>
  </div>
</div>
