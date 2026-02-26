@props(['name', 'year', 'sport', 'image' => null, 'description' => ''])

<div class="member-card">
    @if($image)
        <img src="{{ asset('storage/' . $image) }}" alt="{{ $name }}" class="state-image">
    @else
        <div class="member-image-placeholder">No Image</div>
    @endif
    
    <div class="state-info">
        <h3>{{ $name }}</h3>
        <p class="state-year">Year: {{ $year }}</p>
        <p class="state-sport">Sport: {{ $sport }}</p>
        @if($description)
            <p class="state-description">{{ $description }}</p>
        @endif
    </div>
</div>
