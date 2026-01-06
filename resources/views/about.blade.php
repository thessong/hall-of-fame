@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container">
    <h1>About Our School</h1>
    
    <div class="about-content">
        <p>This is where information about the school can be displayed.</p>
        <p>Students can customize this page with school history, mission statement, and other relevant information.</p>
    </div>
</div>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }
    
    .about-content {
        margin-top: 2rem;
        line-height: 1.6;
    }
</style>
@endsection
