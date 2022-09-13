<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JeeJeeze</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <span class="navbar-brand mb-0 h1">Navbar</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-container" aria-controls="nav-container" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav-container">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="{{ Route::is('home') ? 'nav-link active' : 'nav-link' }}" href={{ URL::to('/') }}>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::is('test') ? 'nav-link active' : 'nav-link' }}" href={{ URL::to('/test') }}>Test</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        @yield('content')
    </div>
    <footer>
        &copy; 2022 Trevor Slobodnick | All Rights Reserved
    </footer>
</body>
</html>
