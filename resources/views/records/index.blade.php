@extends('layouts.app')

@section('title', 'Record Boards')

@section('content')
<div class="container">
    <h1>Athletic Record Boards</h1>
    
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

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }
    
    .records-section {
        margin-top: 2rem;
    }
</style>
@endsection
