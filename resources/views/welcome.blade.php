<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KiDDO Store - {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="shortcut icon" href="../img/k1.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dark-mode.css">
</head>
<body data-bs-theme="light">
    @include('partials.navbar')


    <div class="container">
        @yield('content')
    </div>

    <div class="dropdown theme">
        <button id="themeToggle" class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-sun-fill"></i>
        </button>
        <ul class="dropdown-menu mb-1">
            <li><button id="darkThemeButton" class="dropdown-item"><i class="bi bi-moon-stars-fill"></i> Dark</button></li>
            <li><button id="lightThemeButton" class="dropdown-item"><i class="bi bi-sun-fill"></i> Light</button></li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
