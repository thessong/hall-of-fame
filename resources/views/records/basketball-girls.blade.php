@extends('layouts.app')

@section('title', 'Basketball - Girls Records')

@section('content')
<div class="container">
    <h1>Basketball - Girls</h1>
    
        <div class="records-section">
        {{-- Example usage of the record-table component --}}
        {{-- Students will replace this with dynamic data from a database --}}
        
        @php
        $exampleRecords = [
            [
                'event' => 'Season',
                'record' => '1,250 yards',
                'holder' => 'John Doe',
                'year' => '2019'
            ],
            [
                'event' => 'Single Game',
                'record' => '400 yards',
                'holder' => 'Jane Smith',
                'year' => '2020'
            ]
        ];
        @endphp
        
        <x-record-table sport="Rushing" :records="$exampleRecords" />
        
        {{-- More record tables for different sports will be added here --}}
    </div>
</div>

@endsection