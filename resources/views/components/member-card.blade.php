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
