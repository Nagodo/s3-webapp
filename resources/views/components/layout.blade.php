<html>
<head>
    <title>Collectable</title>
    @vite('resources/css/layout.css')
    {{ $head ?? '' }}
</head>

<body>
    <header class="header">
        <img src="logo.jpg" alt="Logo" class="logo">
    
        <nav>
            <ul>
                <li><a href={{ route('collectable.create') }}>Create</a></li>
                <li><a href="read.html">Read</a></li>
            </ul>
        </nav>
    </header>

    {{ $slot }}

    <footer>

    </footer>
</body>
</html>