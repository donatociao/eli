@extends('app')

@section('content')
  @include('front.partials.nav')
  @include('front.partials.subnav')
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-12">
        <h1 class="eliano-red">I nostri servizi</h1>
      </div>
      <div class="col-lg-12 col-sm-12 mt-3 mb-5">
        <p><b>Eliano Servizi Immobiliari</b> nasce dall'esperienza e dalla professionalità maturata dal Sig. Enrico Eliano in oltre venticinque anni di attività in ambito immobiliare, sviluppando, nel settore degli immobili, una specifica e considerevole professionalità e competenza.</p>
        <p><b>Eliano Servizi Immobiliari</b> è oggi una realtà ben consolidata che si avvale di un ampio team di collaboratori, ambiziosi e qualificati, i quali possono vantare una notevole continuità di risultati frutto di una pluriennale esperienza nel settore immobiliare di Eboli</p>
        <p>L'affidabilità, la competenza e la tempestività dei professionisti di Eliano Servizi Immobiliari, Vi accompagneranno passo dopo passo dal primo contatto alle pratiche contrattuali e notarili di fine rapporto.</p>
        <p><b>Eliano Servizi Immobiliari</b> gestisce con attenzione e riservatezza qualsiasi trattativa, sia di vendita che di locazione, nei settori residenziale e commerciale, ponendo la massima cura ed attenzione nella gestione di ogni singolo cliente.</p>
        <p><b>Eliano Servizi Immobiliari</b> ha sede in una delle zone più ricercate e prestigiose di Eboli e più precisamente in Via Bruno Buozzi, 41 a due passi dal Corso Principale e dalla meravigliosa Piazza Della Repubblica.</p>
      </div>

      <div class="media">
        <img src="{{asset('img/perizie.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Valutazioni immobiliari gratuite</h5>
          <ul>
            <li>Sopralluogo gratuito con rilievo metrico laser dei luoghi</li>
            <li>Servizio fotografico e virtual tour accurati per la promozione degli immobili sui maggiori portali e testate pubblicitarie</li>
            <li>Valutazione commerciale gratuita con metodo sintetico-comparativo e definizione del migliore prezzo realizzabile, analisi di mercato, report sulle ultime transazioni per zona e tipologia</li>
            <li>Studi di fattibilità tecnica per eventuali cambi di destinazione d’uso</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/vendita.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Vendita Residenziale</h5>
          <ul>
            <li>Gestione appuntamenti con i potenziali acquirenti mediante un servizio di “agenda personalizzata” per ottimizzare i tempi dedicati alle visite</li>
            <li>Rendiconti periodici ai clienti sull’andamento dell’incarico conferito e sull’esito delle trattative</li>
            <li>Reperimento e verifica conformità della documentazione catastale ed urbanistica</li>
            <li>Regolarizzazione di eventuali difformità catastali e/o documentali</li>
            <li>Gestione delle permute di immobili</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/locazione.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Locazione Residenziale</h5>
          <ul>
            <li>Gestione appuntamenti con i potenziali acquirenti mediante un servizio di “agenda personalizzata” per ottimizzare i tempi dedicati alle visite</li>
            <li>Rendiconti periodici ai clienti sull’andamento dell’incarico conferito e sull’esito delle trattative</li>
            <li>Verifica del cliente con sistema internazionale di check-cliente, sia persona fisica che societaria</li>
            <li>Collaborazione con collaudate società di servizi e relocation per conduttori societari e referenziati</li>
            <li>Consulenza sull’opzione della cedolare secca grazie al nostro partner e studio di commercialisti ed avvocati</li>
            <li>Registrazione telematica dei contratti presso una sede dell’Agenzia delle Entrate a scelta del Locatore</li>
            <li>Valutazione di eventuali opportunità di Locazione Breve ovvero di Short Term Lease</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/perizie.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Gestione Immobili commerciali</h5>
          <ul>
            <li>Gestione appuntamenti con i potenziali acquirenti/conduttori mediante un servizio di “agenda personalizzata” per ottimizzare i tempi dedicati alle visite</li>
            <li>Rendiconti periodici ai clienti sull’andamento dell’incarico conferito e sull’esito delle trattative</li>
            <li>Reperimento e verifica conformità della documentazione catastale ed urbanistica</li>
            <li>Regolarizzazione di eventuali difformità catastali e/o documentali</li>
            <li>Verifica del cliente con sistema internazionale di check-cliente, sia persona fisica che societaria</li>
            <li>Registrazione telematica dei contratti presso una sede dell’Agenzia delle Entrate a scelta del Locatore</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/ristrutturazioni.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Frazionamenti Immobiliari & Gestione Cantieri</h5>
          <ul>
            <li>L’elevata qualità degli immobili dal punto di vista ambientale e la cura dei materiali, sono caratteri imprescindibili nelle nuove costruzioni commercializzate in esclusiva da Eliano Servizi Immobiliari</li>
            <li>Le continue ricerche da parte del nostro partner ed ufficio tecnico sui materiali all’avanguardia utilizzati per le nuove costruzioni contribuiscono ad ottenere realizzazioni di livello qualitativo eccellente</li>
            <li>Lo scopo è soddisfare l’acquirente proponendo un prodotto “chiavi in mano” in cui comfort, funzionalità, innovazione e qualità siano i capi saldi del loto futuro stile di vita. Eliano Servizi Immobiliari seguirà il cliente passo dopo passo sull’avanzamento del cantiere</li>
            <li>Eliano Servizi Immobiliari offre assistenza tecnica per personalizzare la nuova soluzione abitativa con varianti di progetto ed una vasta scelta di materiali</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/perizie.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Perizie Immobiliari</h5>
          <ul>
            <li>Eliano Servizi Immobiliari offre a privati, amministrazioni condominiali ed imprese un servizio specifico e dai costi estremamente competitivi per la redazione di perizie immobiliari</li>
            <li>Eliano Servizi Immobiliari si prefigge l'obiettivo di garantire al cliente un servizio di elevato standard qualitativo contenendo il più possibile le tempistiche di consegna delle perizie immobiliari entro pochi giorni dal sopralluogo</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/catastali.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Visure Ipotecarie e Catastali</h5>
          <ul>
            <li>Accesso telematico alla banca catastale nazionale ed all’Agenzia del Territorio</li>
            <li>Richiesta di visure catastali storiche</li>
            <li>Richiesta di ispezioni ipotecarie per persona fisica giuridica, immobile, copia note di atti</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/catastali.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Indagini su Persone Fisiche e Giuridiche, Verifica Bilanci, Antiriciclaggio Internazionale</h5>
          <ul>
            <li>Eliano Servizi Immobiliari esegue numerosi accessi giornalieri tramite un avanzato programma gestionale ed integrato con una banca nazionale ed internazionale per la verifica di persona fisica, giuridica, per l’analisi di bilanci societari</li>
            <li>Eliano Servizi Immobiliari adempiere un’approfondita attività di antiriciclaggio nel rispetto delle normative vigenti a tutela delle parti contraenti sia nella Vendita che nella Locazione</li>
            <li>RRegolarizzazione di eventuali difformità catastali e/o documentali.</li>
            <li>Verifica del cliente con sistema internazionale di check-cliente, sia persona fisica che societaria</li>
            <li>Registrazione telematica dei contratti presso una sede dell’Agenzia delle Entrate a scelta del Locatore</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/mutui.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Finanziamenti Mutui e Leasing</h5>
          <ul>
            <li>Grazie agli accordi stipulati con i più importanti Istituti di credito e seri broker finanziari, Eliano Servizi Immobiliari è in grado di proporre mutui e finanziamenti a condizioni competitive, adeguati alle esigenze economiche dei clienti a seguito di un’attenta consulenza legale-finanziaria atta a valutare le loro reali esigenze</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/perizie.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Consulenze Personalizzate</h5>
          <ul>
            <li>Eliano Servizi Immobiliari non si limita all’intermediazione immobiliare ma, collaborando con validi professionisti interni ed esterni alla sua struttura, offre un servizio di assistenza a 360 gradi per tutto l’iter contrattuale di cui hanno bisogno i clienti per acquistare la casa con serenità</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/legale.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Assistenza Notarile e Legale</h5>
          <ul>
            <li>Collaborazione con noti studi notarili di Eboli, molti dei quali convenzionati ed a tariffe di favore per i clienti di Eliano Servizi Immobiliari</li>
            <li>Consulenza legale personalizzata dal partner legale di Eliano Servizi Immobiliari</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/mercato.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Ricerche ed Analisi di Mercato</h5>
          <ul>
            <li>Eliano Servizi Immobiliari collabora con l’Osservatorio del Mercato Immobiliare (OMI) con l’obiettivo comune di concorrere alla trasparenza del mercato immobiliare e di fornire elementi informativi alle attività dell’Agenzia del Territorio nel campo dei processi estimali</li>
            <li>Eliano Servizi Immobiliari ha accesso ad una completa ed aggiornata banca dati delle quotazioni immobiliari, rilevate sull’intero territorio nazionale ed in particolare sull’area di Eboli e della Provincia, con indicati i parametri Euro x mq, degli ultimi due semestri, suddivisi per zona/quartiere/via e tipologia/anno di costruzione/stato di conservazione dell’immobile, sia residenziale che commerciale, in vendita ed in locazione</li>
            <li>Eliano Servizi Immobiliari è associata da un ventennio e collabora con FIMAA nel promuovere, insieme alle altre Associazioni di Categoria ed all’Ufficio del Territorio, un servizio informativo- consultivo sui valori degli immobili che verranno validati semestralmente dagli Uffici Provinciali</li>
            <li>Eliano Servizi Immobiliari, collaborando con FIMAA, è in grado di esprimere pareri inerenti il mercato immobiliare - grazie alla quotidiana opportunità di confronto con i maggiori operatori tecnico-economici del mercato immobiliare - sia in merito all’andamento che in merito alle più aggiornate quotazioni immobiliari</li>
          </ul>
        </div>
      </div>
      <div class="media">
        <img src="{{asset('img/ristrutturazioni.png')}}" class="mr-3 w-80" alt="valutazioni">
        <div class="media-body">
          <h5 class="mt-0 eliano-red">Progetti di Architettura, Ristrutturazioni ed Home Staging</h5>
          <ul>
            <li>Eliano Servizi Immobiliari, offre al cliente ulteriori servizi quali la consulenza progettuale di architetti, interior design per migliorare l’abitazione e la gestione di affidabili imprese per l’esecuzione delle opere</li>
            <li>Eliano Servizi Immobiliari, offre un servizio di arredamento parziale e completo di immobili sia in locazione che vendita, oltre ad un servizio di deposito mobili e di trasloco sia nazionale che internazionale</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  @include('front.partials.contatti')
  @include('front.partials.footer')
@endsection
