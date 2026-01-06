<footer>
    <div class="container">
        <p>&copy; {{ date('Y') }} {{ config('app.name', 'Hall of Fame') }}. All rights reserved.</p>
    </div>
</footer>

<style>
    footer {
        background-color: #333;
        color: white;
        padding: 2rem 1rem;
        margin-top: 4rem;
        text-align: center;
    }
    
    footer .container {
        max-width: 1200px;
        margin: 0 auto;
    }
</style>
