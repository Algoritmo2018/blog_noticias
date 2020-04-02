@props(['messages'])

@if ($messages)

        @foreach ((array) $messages as $message)
             {{ $message }}
        @endforeach
     
@endif
