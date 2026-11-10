<x-layout>
    
    @foreach ($collectables as $collectable)
        <div>{{ $collectable->name}} - {{ $collectable->amount}}</div>
    @endforeach

</x-layout>
