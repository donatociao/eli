@extends('app')

@section('content')
  @include('front.partials.nav')

  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-12">
        <h1 class="eliano-red">La nostra storia</h1>
      </div>
      <div class="col-lg-12 col-sm-12 mt-3 mb-5">
        <p><b>Eliano Servizi Immobiliari</b> nasce dall'esperienza e dalla professionalità maturata dal Sig. Enrico Eliano in oltre venticinque anni di attività in ambito immobiliare, sviluppando, nel settore degli immobili, una specifica e considerevole professionalità e competenza.</p>
        <p><b>Eliano Servizi Immobiliari</b> è oggi una realtà ben consolidata che si avvale di un ampio team di collaboratori, ambiziosi e qualificati, i quali possono vantare una notevole continuità di risultati frutto di una pluriennale esperienza nel settore immobiliare di Eboli</p>
        <p>L'affidabilità, la competenza e la tempestività dei professionisti di Eliano Servizi Immobiliari, Vi accompagneranno passo dopo passo dal primo contatto alle pratiche contrattuali e notarili di fine rapporto.</p>
        <p><b>Eliano Servizi Immobiliari</b> gestisce con attenzione e riservatezza qualsiasi trattativa, sia di vendita che di locazione, nei settori residenziale e commerciale, ponendo la massima cura ed attenzione nella gestione di ogni singolo cliente.</p>
        <p><b>Eliano Servizi Immobiliari</b> ha sede in una delle zone più ricercate e prestigiose di Eboli e più precisamente in Via Bruno Buozzi, 41 a due passi dal Corso Principale e dalla meravigliosa Piazza Della Repubblica.</p>
      </div>
    </div>
  </div>

  @include('front.partials.contatti')
  @include('front.partials.footer')
@endsection
