@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="hero">
        <h1>Welcome to the Hall of Fame</h1>
        <p>Celebrating excellence and achievement</p>
    </div>
    
    <div class="quick-links">
        <a href="{{ route('hall-of-fame.index') }}" class="quick-link-card">
            <h2>Hall of Fame Members</h2>
            <p>View our distinguished inductees</p>
        </a>
        
        <a href="{{ route('records.index') }}" class="quick-link-card">
            <h2>Record Boards</h2>
            <p>See record-breaking achievements</p>
        </a>
        
        <a href="{{ route('about') }}" class="quick-link-card">
            <h2>About</h2>
            <p>Learn more about our school</p>
        </a>
    </div>
</div>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }
    
    .hero {
        text-align: center;
        padding: 3rem 0;
    }
    
    .hero h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }
    
    .quick-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }
    
    .quick-link-card {
        background: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        text-decoration: none;
        color: inherit;
        transition: transform 0.2s;
    }
    
    .quick-link-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    .quick-link-card h2 {
        margin-bottom: 0.5rem;
    }
</style>
@endsection
