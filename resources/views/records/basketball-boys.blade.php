@extends('layouts.app')

@section('title', 'Basketball - Boys Records')

@section('content')
<div class="records-container">
    <h1>Boys Basketball Records</h1>
    
    <div class="records-section">
        {{-- Points Category - Full Display --}}
        @if(isset($categories['points']))
            <x-stat-category :data="$categories['points']" />
        @endif
        
        {{-- Rebounds Category - Full Display --}}
        @if(isset($categories['rebounds']))
            <x-stat-category :data="$categories['rebounds']" />
        @endif
        
        {{-- Assists Category - Full Display --}}
        @if(isset($categories['assists']))
            <x-stat-category :data="$categories['assists']" />
        @endif
        
        {{-- Steals Category - Full Display --}}
        @if(isset($categories['steals']))
            <x-stat-category :data="$categories['steals']" />
        @endif
        
        {{-- Blocks Category - Full Display --}}
        @if(isset($categories['blocks']))
            <x-stat-category :data="$categories['blocks']" />
        @endif
        
        {{-- Field Goals Made --}}
        @if(isset($categories['field_goals_made']))
            <div class="category-section">
                <h2>{{ $categories['field_goals_made']['title'] }}</h2>
                <div class="category-grid">
                    <div class="stat-group">
                        <x-season-top-10-table 
                            :title="$categories['field_goals_made']['title'] . ' - Season Leaders'" 
                            :records="$categories['field_goals_made']['season']" 
                        />
                    </div>
                    <div class="stat-group">
                        <x-career-top-10-table 
                            :title="$categories['field_goals_made']['title'] . ' - Career Leaders'" 
                            :records="$categories['field_goals_made']['career']" 
                        />
                    </div>
                    @if(isset($categories['field_goals_made']['game']) && count($categories['field_goals_made']['game']) > 0)
                    <div class="stat-group">
                        <x-game-top-10-table 
                            :title="$categories['field_goals_made']['title'] . ' - Single Game'" 
                            :records="$categories['field_goals_made']['game']" 
                        />
                    </div>
                    @endif
                </div>
            </div>
        @endif
        
        {{-- Field Goal Percentage --}}
        @if(isset($categories['field_goal_percentage']))
            <div class="category-section">
                <h2>{{ $categories['field_goal_percentage']['title'] }}</h2>
                <div class="category-grid">
                    <div class="stat-group">
                        <x-season-top-10-table 
                            :title="$categories['field_goal_percentage']['title'] . ' - Season Leaders'" 
                            :records="$categories['field_goal_percentage']['season']" 
                        />
                    </div>
                    <div class="stat-group">
                        <x-career-top-10-table 
                            :title="$categories['field_goal_percentage']['title'] . ' - Career Leaders'" 
                            :records="$categories['field_goal_percentage']['career']" 
                        />
                    </div>
                </div>
            </div>
        @endif
        
        {{-- 3-Point Made --}}
        @if(isset($categories['three_point_made']))
            <div class="category-section">
                <h2>{{ $categories['three_point_made']['title'] }}</h2>
                <div class="category-grid">
                    <div class="stat-group">
                        <x-season-top-10-table 
                            :title="$categories['three_point_made']['title'] . ' - Season Leaders'" 
                            :records="$categories['three_point_made']['season']" 
                        />
                    </div>
                    <div class="stat-group">
                        <x-career-top-10-table 
                            :title="$categories['three_point_made']['title'] . ' - Career Leaders'" 
                            :records="$categories['three_point_made']['career']" 
                        />
                    </div>
                    @if(isset($categories['three_point_made']['game']) && count($categories['three_point_made']['game']) > 0)
                    <div class="stat-group">
                        <x-game-top-10-table 
                            :title="$categories['three_point_made']['title'] . ' - Single Game'" 
                            :records="$categories['three_point_made']['game']" 
                        />
                    </div>
                    @endif
                </div>
            </div>
        @endif
        
        {{-- 3-Point Percentage --}}
        @if(isset($categories['three_point_percentage']))
            <div class="category-section">
                <h2>{{ $categories['three_point_percentage']['title'] }}</h2>
                <div class="category-grid">
                    <div class="stat-group">
                        <x-season-top-10-table 
                            :title="$categories['three_point_percentage']['title'] . ' - Season Leaders'" 
                            :records="$categories['three_point_percentage']['season']" 
                        />
                    </div>
                    <div class="stat-group">
                        <x-career-top-10-table 
                            :title="$categories['three_point_percentage']['title'] . ' - Career Leaders'" 
                            :records="$categories['three_point_percentage']['career']" 
                        />
                    </div>
                </div>
            </div>
        @endif
        
        {{-- Free Throws Made --}}
        @if(isset($categories['free_throws_made']))
            <div class="category-section">
                <h2>{{ $categories['free_throws_made']['title'] }}</h2>
                <div class="category-grid">
                    <div class="stat-group">
                        <x-season-top-10-table 
                            :title="$categories['free_throws_made']['title'] . ' - Season Leaders'" 
                            :records="$categories['free_throws_made']['season']" 
                        />
                    </div>
                    <div class="stat-group">
                        <x-career-top-10-table 
                            :title="$categories['free_throws_made']['title'] . ' - Career Leaders'" 
                            :records="$categories['free_throws_made']['career']" 
                        />
                    </div>
                    @if(isset($categories['free_throws_made']['game']) && count($categories['free_throws_made']['game']) > 0)
                    <div class="stat-group">
                        <x-game-top-10-table 
                            :title="$categories['free_throws_made']['title'] . ' - Single Game'" 
                            :records="$categories['free_throws_made']['game']" 
                        />
                    </div>
                    @endif
                </div>
            </div>
        @endif
        
        {{-- Free Throw Percentage --}}
        @if(isset($categories['free_throw_percentage']))
            <div class="category-section">
                <h2>{{ $categories['free_throw_percentage']['title'] }}</h2>
                <div class="category-grid">
                    <div class="stat-group">
                        <x-season-top-10-table 
                            :title="$categories['free_throw_percentage']['title'] . ' - Season Leaders'" 
                            :records="$categories['free_throw_percentage']['season']" 
                        />
                    </div>
                    <div class="stat-group">
                        <x-career-top-10-table 
                            :title="$categories['free_throw_percentage']['title'] . ' - Career Leaders'" 
                            :records="$categories['free_throw_percentage']['career']" 
                        />
                    </div>
                </div>
            </div>
        @endif
        
        {{-- Games Played --}}
        @if(isset($categories['games_played']))
            <div class="category-section">
                <h2>{{ $categories['games_played']['title'] }}</h2>
                <div class="category-grid">
                    <div class="stat-group">
                        <x-season-top-10-table 
                            :title="$categories['games_played']['title'] . ' - Season Leaders'" 
                            :records="$categories['games_played']['season']" 
                        />
                    </div>
                    <div class="stat-group">
                        <x-career-top-10-table 
                            :title="$categories['games_played']['title'] . ' - Career Leaders'" 
                            :records="$categories['games_played']['career']" 
                        />
                    </div>
                </div>
            </div>
        @endif
        
        {{-- Wins --}}
        @if(isset($categories['wins']))
            <div class="category-section">
                <h2>{{ $categories['wins']['title'] }}</h2>
                <div class="category-grid">
                    <div class="stat-group">
                        <x-season-top-10-table 
                            :title="$categories['wins']['title'] . ' - Season Leaders'" 
                            :records="$categories['wins']['season']" 
                        />
                    </div>
                    <div class="stat-group">
                        <x-career-top-10-table 
                            :title="$categories['wins']['title'] . ' - Career Leaders'" 
                            :records="$categories['wins']['career']" 
                        />
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

@endsection

@push('styles')
<style>
    /* Override default container for records page - Fixed width for touchscreen */
    .records-container {
        max-width: 1920px; /* Standard landscape touchscreen width */
        width: 1920px;
        margin: 0 auto;
        padding: 2rem;
    }
    
    h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 2rem;
        color: #111827;
        text-align: center;
    }
    
    .records-section {
        margin-top: 2rem;
        width: 100%;
    }
    
    .category-section {
        margin-bottom: 4rem;
        padding-bottom: 2rem;
        border-bottom: 3px solid #e5e7eb;
        width: 100%;
    }
    
    .category-section:last-child {
        border-bottom: none;
    }
    
    .category-section > h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 2rem;
        color: #1f2937;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid #3b82f6;
        text-align: center;
    }
    
    /* 3 Column Grid Layout */
    .category-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        width: 100%;
    }
    
    .stat-group {
        min-width: 0;
        max-width: 100%;
        overflow: hidden;
    }
    
    .record-table-container {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 1.5rem;
        height: 100%;
        width: 100%;
    }
    
    .record-table-container h3 {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #374151;
        border-bottom: 1px solid #e5e7eb;
        padding-bottom: 0.5rem;
        white-space: normal;
        word-wrap: break-word;
    }
    
    .record-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.875rem;
        table-layout: fixed;
    }
    
    .record-table thead {
        background-color: #f9fafb;
    }
    
    .record-table th {
        padding: 0.75rem 0.5rem;
        text-align: left;
        font-weight: 600;
        font-size: 0.75rem;
        color: #6b7280;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border-bottom: 2px solid #e5e7eb;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .record-table th:first-child {
        width: 50px;
        text-align: center;
    }
    
    .record-table td {
        padding: 0.75rem 0.5rem;
        border-bottom: 1px solid #f3f4f6;
        color: #374151;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    .record-table td:first-child {
        text-align: center;
        font-weight: 600;
        color: #6b7280;
    }
    
    .record-table tbody tr:hover {
        background-color: #f9fafb;
    }
    
    .record-table tbody tr:last-child td {
        border-bottom: none;
    }
    
    .record-table tbody tr:nth-child(1) {
        background-color: #fef3c7;
    }
    
    .record-table tbody tr:nth-child(2) {
        background-color: #f3f4f6;
    }
    
    .record-table tbody tr:nth-child(3) {
        background-color: #fef2f2;
    }
    
    .text-center {
        text-align: center;
        color: #9ca3af;
        font-style: italic;
        padding: 2rem !important;
    }
</style>
@endpush