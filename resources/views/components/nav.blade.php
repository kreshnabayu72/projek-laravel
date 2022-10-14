
<nav class="navbar navbar-expand bg-primary w-100">
    @auth
    <div class="container-fluid">
        <a class="navbar-brand" href="/">News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                @if (auth()->user()['isAdmin'] == 1)
                    <a class="nav-link " href="/admin">Admin Menu</a> 
                @endif
                <a class="nav-link " href="/write">Tulis Berita</a> 
                <form method="post" action="/logout">
                    @csrf
                    <a class="nav-link" onclick="this.parentNode.submit();">Logout</a>
                </form> 
            </div>
        </div>
    </div>
    @else
    <div class="container-fluid">
        <a class="navbar-brand" href="/">News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link " href="/login">Login</a> 
            </div>
        </div>
    </div>
    @endif
</nav>