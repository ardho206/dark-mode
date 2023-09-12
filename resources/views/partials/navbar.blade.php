<nav class="navbar navbar-expand-lg shadow sticky-top">
    <div class="con container">
        <a class="navbar-brand" href="/">
            <img src="../img/k2.png" alt="Bootstrap" width="30" height="30" class="img-brand d-inline-block align-text-top">
            KiDDO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto nav-head">
                <li class="nav-item item  mx-1">
                    <a class="nav-link link {{ Request::is('/') || Request::is('order*') ? 'active' : '' }}" href="/"><i class="bi bi-house-door-fill"></i> Home</a>
                </li>
                <li class="nav-item item mx-1">
                    <a class="nav-link link {{ Request::is('history') ? 'active' : '' }}" href="/history"><i class="bi bi-clock-history"></i> Histori pemesanan</a>
                </li>
                <li class="nav-item item mx-1">
                    <a class="nav-link link" href="#"><i class="bi bi-envelope-open"></i> Contact us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
