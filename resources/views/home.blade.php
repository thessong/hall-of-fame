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
@endsection
