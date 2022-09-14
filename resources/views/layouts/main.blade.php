<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JeeJeeze</title>

    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar navbar-dark p-0 navbar-expand-lg">
            <span class="navbar-brand mb-0 h1">JeeJeeze</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-container" aria-controls="nav-container" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="nav-container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href={{ URL::to('/store-locator') }}>
                            @svg('home')
{{--                            <x-icon name="home.svg" />--}}
                            Stores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href={{ URL::to('/account') }}>
{{--                            <x-icon name="user" />--}}
                            Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href={{ URL::to('/cart') }}>
{{--                            <x-icon name="shopping-cart" />--}}
                            Cart
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        @yield('content')
    </div>
    <footer class="text-center py-3">
        &copy; 2022 Trevor Slobodnick | All Rights Reserved
    </footer>
</body>
</html>
