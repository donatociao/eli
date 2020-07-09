<p>Ciao Enrico,  {{ $data['name'] }}.</p>
<p>Il suo messaggio è:</p>
<p>{{ $data['message'] }}.</p>
<br>
<p>I suoi contatti sono:</p>
<p><i class="fi-xnluxx-envelope"></i> {{ $data['email'] }}</p>
<p><i class="fi-xnluxx-phone"></i> {{ $data['mobile'] }}</p>
<br>
<p>Buona giornata :)</p>

<h2>Ciao Enrico,</h2>
<p>hai ricevuto una richiesta da : {{ $name }}</p>
<p>Ecco i dettagli:</p>
<b>Nome:</b> {{ $name }}
<b>Email:</b> {{ $email }}
<b>Telefono:</b> {{ $phone_number }}
<b>Messaggio:</b> {{ $user_message }}
<p>Buona giornata :)</p>
