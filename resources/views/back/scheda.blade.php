<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body id='pdf'>
  <div class="container mb-4">
    <div class="row mt-5">
      <div class="col-lg-12">
        <h1 class="animate__animated animate__fadeIn text-uppercase">{{$immobile->stato->name}}: {{$immobile->titolo}}</h1>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-8 animate__animated animate__fadeIn">
        <img class="img-fluid" src="{{ asset('storage/'.$immobile->img_preview) }}" width="100%"/>
        <h3 class="mt-3">Descrizione</h3>
        <p>{!!$immobile->description!!}</p>
      </div>
      <div class="col-lg-4 mb-5">
        <h4 class="">Dettagli immobile</h4>
        <div class="row">
          <div class="col-lg-6">
            <div class="mt-4 d-flex align-items-center"><span class="ml-3">{{$immobile->detail->mq}} mq.</span></div>
            <div class="mt-4 d-flex align-items-center"><span class="ml-3">{{$immobile->detail->vani}} Vani</span></div>
            <div class="mt-4 d-flex align-items-center"><span class="ml-3">{{$immobile->detail->wc}} Bagni</span></div>
            <div class="mt-4 d-flex align-items-center"><span class="ml-3">{{$immobile->detail->box}} Box</span></div>
            <div class="mt-4 d-flex align-items-center"><span class="ml-3">Classe {{$immobile->detail->ape}}</span></div>
          </div>
          <div class="col-lg-6">
            <div class="mt-4 d-flex align-items-center">
              <span class="ml-3">Ristrutturato: </span>
              @if ($immobile->feature->ristrutturato == 'on')
                <span>SI</span>
              @else
                <span>NO</span>
              @endif
            </div>
            <div class="mt-4 d-flex align-items-center">
              <span class="ml-3">Riscaldamento: </span>
              @if ($immobile->feature->riscaldamento == 'on')
                <span>SI</span>
              @else
                <span>NO</span>
              @endif

            </div>
            <div class="mt-4 d-flex align-items-center">
              <span class="ml-3">Terrazzo: </span>
              @if ($immobile->feature->terrazzo == 'on')
                <span>SI</span>
              @else
                <span>NO</span>
              @endif
            </div>
            <div class="mt-4 d-flex align-items-center">
              <span class="ml-3">Posto auto: </span>
              @if ($immobile->feature->posto_auto == 'on')
                <span>SI</span>
              @else
                <span>NO</span>
              @endif
            </div>
            <div class="mt-4 d-flex align-items-center">
              <span class="ml-3">Balconi: </span>
              @if ($immobile->feature->balconi == 'on')
                <span>SI</span>
              @else
                <span>NO</span>
              @endif
            </div>
          </div>
        </div>
        <div class="row">
          <p class="font-55 eliano-red mt-4 ml-4"><b>Prezzo:</b> € {{ number_format($immobile->price, 0, ',', '.').',00'}}</p>
        </div>
        <div class="row">
          <div class="d-flex align-items-center">
            <span class="ml-3"><b>Inserito il:</b> {{$immobile->created_at->format('d/m/Y')}}</span>
          </div>
          <div class="d-flex align-items-center">
            <span class="ml-3"><b>Ultima modifica il:</b> {{$immobile->updated_at->format('d/m/Y')}}</span>
          </div>
          <div class="d-flex align-items-center">
            <span class="ml-3"><b>Visualizzazioni totali:</b> {{DB::table('views')->where(['viewable_id' => $immobile->id])->count() }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
    {{-- <table>
        <thead>
            <tr>
                <td><b>Titolo</b></td>
                <td><b>Descrizione</b></td>
                <td><b>Inserito il</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{$immobile->titolo}}
                </td>
                <td>
                    {{$immobile->decription}}
                </td>
                <td>
                    {{$immobile->created_at->format('d/m/Y')}}
                </td>
            </tr>

        </tbody>
    </table> --}}
</body>

</html>
