@extends('app')
@section('content')
  @include('front.partials.nav')
  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-lg-12">
        {{-- <a href="{{route('dash')}}" class="btn btn-info stretched-link mb-3">Indietro</a> --}}
        <h1 class="eliano-red"><a href="{{route('dash')}}" class="btn btn-info mb-3 mr-3"><i class="fas fa-home"></i></a>Messaggi ricevuti</h1>
        <div class="row mt-5">
          <div class="col-lg-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Data ricezione</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Azioni</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($contacts as $contact)
                @if ($contact->is_read == 0)
                  <tr class="table-active font-weight-bold">
                    <td scope="row">{{ $contact->created_at }}</td>
                    <td scope="row">{{ $contact->name }}</td>
                    <td scope="row">{{ $contact->email }}</td>
                    <td>
                      {{-- <a href="{{ route('destroy.message', ['id' => $contact->id ]) }}"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a> --}}
                      <a href="{{route('show.message', ['id' => $contact->id])}}"><button type="button" class="btn btn-info"><i class="fas fa-search-plus"></i></button></a>
                    </td>
                  </tr>
                @else
                  <tr>
                    <td scope="row">{{ $contact->created_at }}</td>
                    <td scope="row">{{ $contact->name }}</td>
                    <td scope="row">{{ $contact->email }}</td>
                    <td>
                      {{-- <a href="{{ route('destroy.message', ['id' => $contact->id ]) }}"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a> --}}
                      <a href="{{route('show.message', ['id' => $contact->id])}}"><button type="button" class="btn btn-info"><i class="fas fa-search-plus"></i></button></a>
                    </td>
                  </tr>
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
