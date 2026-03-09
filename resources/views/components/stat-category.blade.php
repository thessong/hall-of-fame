@props(['data'])

<div class="category-section">
    <h2>{{ $data['title'] ?? 'Points' }}</h2>
    
    <div class="category-grid">
        {{-- Season Leader --}}
        <div class="stat-group">
            <x-season-top-10-table 
                :title="($data['title'] ?? 'Points') . ' - Season Leaders'" 
                :records="$data['season'] ?? []" 
            />
        </div>
        
        {{-- Career Leader --}}
        <div class="stat-group">
            <x-career-top-10-table 
                :title="($data['title'] ?? 'Points') . ' - Career Leaders'" 
                :records="$data['career'] ?? []" 
            />
        </div>
        
        {{-- Single Game --}}
        <div class="stat-group">
            <x-game-top-10-table 
                :title="($data['title'] ?? 'Points') . ' - Single Game'" 
                :records="$data['game'] ?? []" 
            />
        </div>
        
        {{-- Points per Game - Season --}}
        @if(isset($data['per_game_season']))
        <div class="stat-group">
            <x-season-top-10-table 
                :title="($data['title'] ?? 'Points') . ' per Game - Season'" 
                :records="$data['per_game_season'] ?? []" 
            />
        </div>
        @endif
        
        {{-- Points per Game - Career --}}
        @if(isset($data['per_game_career']))
        <div class="stat-group">
            <x-career-top-10-table 
                :title="($data['title'] ?? 'Points') . ' per Game - Career'" 
                :records="$data['per_game_career'] ?? []" 
            />
        </div>
        @endif
        
        {{-- Team Game Record --}}
        @if(isset($data['team_game']))
        <div class="stat-group">
            <x-team-game-top-5-table 
                :title="'Most ' . ($data['title'] ?? 'Points') . ' by Team - Single Game'" 
                :records="$data['team_game'] ?? []" 
            />
        </div>
        @endif
        
        {{-- Team Season Record --}}
        @if(isset($data['team_season']))
        <div class="stat-group">
            <x-team-season-top-5-table 
                :title="'Most ' . ($data['title'] ?? 'Points') . ' by Team - Season'" 
                :records="$data['team_season'] ?? []" 
            />
        </div>
        @endif
    </div>
</div>
