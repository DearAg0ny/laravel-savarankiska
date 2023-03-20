<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
        @if(Auth::check())
        <button class="btn btn-primary" id="sidebarToggle">Administravimas</button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        @else
            @endif
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item active"><a class="nav-link" href="/">Pradinis</a></li>
                <li class="nav-item active"><a class="nav-link" href="/all-services">Visi Servisai</a></li>
                @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/add-category">Profilis</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">Atsijungti</a>
                    </div>
                </li>
                @else
                <li class="nav-item active"><a class="nav-link" href="/register">Registruotis</a></li>
                    <li class="nav-item active"><a class="nav-link" href="/login">Prisijungti</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
