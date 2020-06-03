<script type="text/javascript">
    $(document).ready(function() {
        $('#search').on('keyup', function () {
            value = $(this).val();
            $.ajax({
                type: 'post',
                url: '{{ URL::to('immobile/search') }}',
                data: {'search': value},
                success: function (data) {
                    $('#content').html(data);
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<div class="row mt-4 justify-content-end">
  <div class="col-lg-4">
    <div class="input-group mb-3">
      <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <input id="search" type="text" class="form-control" placeholder="Cosa vuoi cercare?" aria-label="Cerca immobile..." aria-describedby="button-addon1">
      </form>
    </div>
  </div>
</div>
<div class="row mt-2">
  <div class="col-lg-12">
    <table class="table table-hover">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Immobile</th>
        <th scope="col">Stato</th>
        <th scope="col">Categoria</th>
        <th scope="col">Città</th>
        <th scope="col">Azioni</th>
      </tr>
      </thead>
      <tbody id="content">
      @foreach ($immobili as $immobile)
        <tr>
          <th scope="row">{{$immobile->id}}</th>
          <td>{{$immobile->titolo}}</td>
          <td>{{$immobile->stato->name}}</td>
          <td>{{$immobile->category->name }}</td>
          <td>{{ $immobile['city']['name'] }}</td>
          <td>
            <button type="button" class="btn btn-info"><i class="fas fa-search-plus"></i></button>
            <a href="{{ route('destroy.immobile', $immobile->id) }}"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a>
            <a href="{{ route('edit.immobile', $immobile->id) }}"><button type="button" class="btn btn-warning"><i class="far fa-edit"></i></button></a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>

