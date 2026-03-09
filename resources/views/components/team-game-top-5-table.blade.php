@props(['title', 'records' => []])

<div class="record-table-container">
    <h3>{{ $title }}</h3>
    
    <table class="record-table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Total</th>
                <th>Opponent</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($records as $record)
                <tr>
                    <td>{{ $record->rank ?? '' }}</td>
                    <td>{{ $record->total ?? '' }}</td>
                    <td>{{ $record->opponent ?? 'N/A' }}</td>
                    <td>{{ $record->date ?? 'N/A' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No records available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
