<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a href="{{ route('index') }}" class="navbar-brand ml-16">PPDB SMK Wikrama Bogor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @auth
        <div class="d-flex">
            <a href="{{ route('logout') }}" class="btn btn-success mr-16">Logout</a>
        </div>
        @else
        <div class="d-flex">
            <a href="{{ route('login') }}" class="btn btn-success mr-16">Login</a>
        </div>
        @endauth
    </div>
</nav>
