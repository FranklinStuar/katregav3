
<meta name="csrf-token" id="token" content="{{ csrf_token() }}">
<script> /* token laravel para usarlo en ajax */
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]); !!}
</script>