<nav class="navbar navbar-expand-sm sticky-top">

    <a class="navbar-brand" href="{{ route('index') }}">Followize</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        
        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <ul class="navbar-nav">

            <li class="nav-item {{ request()->Is('cliente.index') ? 'active':'' }}">

                <a class="nav-link" href="{{ route('cliente.index') }}">Cliente</a>

            </li>

        </ul>

    </div>

</nav>