<div class="container-fluide">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">TC</a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                <a class="nav-link text-light" href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </div>
    </nav>
</div>
