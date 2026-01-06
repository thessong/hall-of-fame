@props(['name', 'year', 'sport', 'image' => null, 'description' => ''])

<div class="member-card">
    @if($image)
        <img src="{{ asset('storage/' . $image) }}" alt="{{ $name }}" class="member-image">
    @else
        <div class="member-image-placeholder">No Image</div>
    @endif
    
    <div class="member-info">
        <h3>{{ $name }}</h3>
        <p class="member-year">Class of {{ $year }}</p>
        <p class="member-sport">{{ $sport }}</p>
        @if($description)
            <p class="member-description">{{ $description }}</p>
        @endif
    </div>
</div>

<style>
    .member-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1rem;
        display: flex;
        gap: 1rem;
    }
    
    .member-image {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 4px;
    }
    
    .member-image-placeholder {
        width: 150px;
        height: 150px;
        background-color: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        color: #999;
    }
    
    .member-info {
        flex: 1;
    }
    
    .member-info h3 {
        margin: 0 0 0.5rem 0;
    }
    
    .member-year,
    .member-sport {
        color: #666;
        margin: 0.25rem 0;
    }
    
    .member-description {
        margin-top: 0.5rem;
    }
</style>
