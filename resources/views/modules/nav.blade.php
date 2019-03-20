<nav>
    <ul>

        @if(Auth::check())
            @foreach(config('app.navAdmin') as $link => $label)
                <li>
                    @if(Request::is(substr($link, 1)))
                        {{ $label }}
                    @else
                        <a href='{{ $link }}'>{{ $label }}</a>
                    @endif
                </li>
            @endforeach
                <li>
                    <form method='POST' id='logout' action='/logout'>
                        {{ csrf_field() }}
                        <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                    </form>
                </li>
        @else
            @foreach(config('app.nav') as $link => $label)
                <li>
                    @if(Request::is(substr($link, 1)))
                        {{ $label }}
                    @else
                        <a href='{{ $link }}'>{{ $label }}</a>
                    @endif
                </li>
            @endforeach
        @endif
    </ul>
</nav>