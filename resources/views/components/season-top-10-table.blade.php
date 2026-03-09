@props(['title', 'records' => []])

<div class="record-table-container">
    <h3>{{ $title }}</h3>
    
    <table class="record-table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Total</th>
                <th>Season</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            @forelse($records as $record)
                <tr>
                    <td>{{ $record->rank ?? '' }}</td>
                    <td>{{ $record->name ?? '' }}</td>
                    <td>{{ $record->total ?? '' }}</td>
                    <td>{{ $record->season ?? '' }}</td>
                    <td>{{ $record->grade ?? '' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No records available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
