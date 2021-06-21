<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex flex-row">
        <div class="p-2 flex-grow-1 bd-highlight">
            <a class="navbar-brand" href="{{route('main')}}">Votar!</a>
        </div>
        <div class="p-2 bd-highlight">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="{{route('candidates.index')}}">Painel de Administração</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Logout</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
</header>
