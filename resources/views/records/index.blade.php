@extends('layouts.app')

@section('title', 'Record Boards')

@section('content')
<div class="container">

<h1>Record Boards</h1>
<h2>Fall Sports</h2>

<div class="records-links">
        <a href="{{ route('hall-of-fame.index') }}" class="records-link-card">
            <h2>Football</h2>
        </a>
        
        <a href="{{ route('records.index') }}" class="records-link-card">
            <h2>Soccer - Boys</h2>
        </a>
        
        <a href="{{ route('about') }}" class="records-link-card">
            <h2>Volleyball</h2>
        </a>
    </div>

    <h2>Winter Sports</h2>

<div class="records-links">
        <a href="{{ route('hall-of-fame.index') }}" class="records-link-card">
            <h2>Basketball - Boys</h2>
        </a>
        
        <a href="{{ route('records.index') }}" class="records-link-card">
            <h2>Basketball - Girls</h2>
        </a>
        
        <a href="{{ route('about') }}" class="records-link-card">
            <h2>Bowling</h2>
        </a>
        <a href="{{ route('about') }}" class="records-link-card">
            <h2>Swimming</h2>
        </a>
        <a href="{{ route('about') }}" class="records-link-card">
            <h2>Wrestling</h2>
        </a>
        <a href="{{ route('about') }}" class="records-link-card">
            <h2>Scholars Bowl</h2>
        </a>
    </div>

        <h2>Spring Sports</h2>

<div class="records-links">
        <a href="{{ route('hall-of-fame.index') }}" class="records-link-card">
            <h2>Baseball</h2>
        </a>
        
        <a href="{{ route('records.index') }}" class="records-link-card">
            <h2>Golf - Boys</h2>
        </a>
        
        <a href="{{ route('about') }}" class="records-link-card">
            <h2>Soccer - Girls</h2>
        </a>
        <a href="{{ route('about') }}" class="records-link-card">
            <h2>Softball</h2>
        </a>
        <a href="{{ route('about') }}" class="records-link-card">
            <h2>Track</h2>
        </a>
    </div>
    
    <div class="records-section">
        {{-- Example usage of the record-table component --}}
        {{-- Students will replace this with dynamic data from a database --}}
        
        @php
        $exampleRecords = [
            [
                'event' => '100m Dash',
                'record' => '10.5 seconds',
                'holder' => 'John Doe',
                'year' => '2019'
            ],
            [
                'event' => '200m Dash',
                'record' => '21.2 seconds',
                'holder' => 'Jane Smith',
                'year' => '2020'
            ]
        ];
        @endphp
        
        <x-record-table sport="Track & Field" :records="$exampleRecords" />
        
        {{-- More record tables for different sports will be added here --}}
    </div>
</div>
@endsection
