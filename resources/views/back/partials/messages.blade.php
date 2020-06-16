@isset($messages)
<script>Swal.fire({
icon: '{{ $messages->msgType }}',
title: 'Avviso',
text: '{{ $messages->message }}',
})</script>
@endif