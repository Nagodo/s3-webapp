@php
    $links = [
        'index' => 'Read',
        'collectable.create' => 'Create',
    ];
@endphp

<nav class="nav" aria-label="Main">
    <ul class="nav-list">
        @foreach ($links as $routeName => $label)
            <li>
                <a href="{{ route($routeName) }}" class="nav-link" @if (request()->routeIs($routeName)) aria-current="page" @endif>{{ $label }}</a>
            </li>
        @endforeach
    </ul>
</nav>
