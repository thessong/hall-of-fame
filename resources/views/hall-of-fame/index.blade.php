@extends('layouts.app')

@section('title', 'Hall of Fame Members')

@section('content')
<div class="container">
    <h1>Hall of Fame Members</h1>
    
    <div class="members-grid">
        {{-- Example usage of the member-card component --}}
        {{-- Students will replace this with dynamic data from a database --}}
        
        <x-member-card 
            name="Example Member"
            year="2020"
            sport="Basketball"
            description="This is an example member card. Replace with actual data from your database."
        />
        
        {{-- More member cards will be added here --}}
    </div>
</div>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }
    
    .members-grid {
        margin-top: 2rem;
    }
</style>
@endsection
