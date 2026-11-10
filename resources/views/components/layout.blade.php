<html>
<head>
    <title>Collectable</title>
    
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>

<body>
    <header class="header">
        <a href="{{ route('index') }}" class="brand">Collectable</a>

        <x-navigation></x-navigation>
    </header>

    {{ $slot }}

    <footer>

    </footer>
</body>
</html>