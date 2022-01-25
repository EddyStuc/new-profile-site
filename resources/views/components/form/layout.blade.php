@props([
    'method' => 'POST',
    'action' => ''
])

<form method="{{ $method === 'GET' ? 'GET' : 'POST' }}"
        netlify
        action="{{ $action }}"
        {{ $attributes }}
>
    @csrf

    @if (! in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}

</form>
