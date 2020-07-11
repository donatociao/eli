{{-- <p>Ciao Enrico,  {{ $message['name'] }}.</p>
<p>Il suo messaggio è:</p>
<p>{{ $message['message'] }}.</p>
<br>
<p>I suoi contatti sono:</p>
<p><i class="fi-xnluxx-envelope"></i> {{ $message['email'] }}</p>
<p><i class="fi-xnluxx-phone"></i> {{ $message['mobile'] }}</p>
<br>
<p>Buona giornata :)</p> --}}

<h2>Ciao Enrico,</h2>
<p>hai ricevuto una richiesta da : {{ $name }}</p>
<p>Ecco i dettagli:</p>
<b>Nome:</b> {{ $name }}
<b>Email:</b> {{ $email }}
<b>Telefono:</b> {{ $phone}}
<b>Messaggio:</b> {{ $user_message }}
<p>Buona giornata :)</p>
