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
        <div class="max-width">
            <nav class="navbar navbar-dark p-0 navbar-expand-md">
                <a href="{{ URL::to("/")  }}" class="navbar-brand m-0">
                    <x-icon name="gg" />
                    <span class="brand">JeeJeeze</span>
                </a>
                <button class="navbar-toggler hide-border-boxshadow" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav-container" aria-controls="nav-container" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" id="nav-container">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white hide-border-boxshadow" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href={{ URL::to('/store-locator') }}>
                                    <x-icon name="home" />
                                    <span>Stores</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href={{ URL::to('/account') }}>
                                    <x-icon name="user" />
                                    <span>Account</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href={{ URL::to('/cart') }}>
                                    <x-icon name="shopping-cart" />
                                    <span>Cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="max-width">
        @yield('content')
    </div>
    <footer class="text-center py-3 px-2">
        &copy; 2022 Trevor Slobodnick | All Rights Reserved
    </footer>
</body>
</html>
