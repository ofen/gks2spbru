<nav class="navbar navbar-expand-md bg-dark navbar-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @foreach($menu as $key => $value)
                @if(is_array($value))
                    <!-- Item-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $key }}</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($value as $submenu => $sublink)
                                <a class="dropdown-item {{ isActiveRoute($sublink) }}" href="{{ $sublink }}">{{ $submenu }}</a>
                            @endforeach
                        </div>
                    </li>
                @else
                    <!-- Item-->
                    <li class="nav-item">
                        <a class="nav-link {{ isActiveRoute($value) }}" href="{{ $value }}">{{ $key }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>