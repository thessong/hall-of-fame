@props(['sport', 'records' => []])

<div class="record-table-container">
    <h2>{{ $sport }} Records</h2>
    
    <table class="record-table">
        <thead>
            <tr>
                <th>Event/Category</th>
                <th>Record</th>
                <th>Holder</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @forelse($records as $record)
                <tr>
                    <td>{{ $record['event'] ?? '' }}</td>
                    <td>{{ $record['record'] ?? '' }}</td>
                    <td>{{ $record['holder'] ?? '' }}</td>
                    <td>{{ $record['year'] ?? '' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No records available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
