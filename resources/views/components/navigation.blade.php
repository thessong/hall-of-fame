<nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="{{ route('home') }}" class="logo">
                {{ config('app.name', 'Hall of Fame') }}
            </a>
            
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('hall-of-fame.index') }}">Hall of Fame</a></li>
                <li><a href="{{ route('records.index') }}">Record Boards</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
            </ul>
        </div>
    </div>
</nav>
