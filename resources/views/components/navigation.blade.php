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

<style>
    /* Basic styling - students can customize this */
    nav {
        background-color: #333;
        padding: 1rem;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .nav-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .logo {
        color: white;
        text-decoration: none;
        font-size: 1.5rem;
        font-weight: bold;
    }
    
    .nav-links {
        display: flex;
        list-style: none;
        gap: 2rem;
        margin: 0;
        padding: 0;
    }
    
    .nav-links a {
        color: white;
        text-decoration: none;
    }
    
    .nav-links a:hover {
        color: #ddd;
    }
</style>
