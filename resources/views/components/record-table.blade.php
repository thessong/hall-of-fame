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
                    <td colspan="4" style="text-align: center;">No records available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<style>
    .record-table-container {
        margin-bottom: 2rem;
    }
    
    .record-table-container h2 {
        margin-bottom: 1rem;
        color: #333;
    }
    
    .record-table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .record-table th,
    .record-table td {
        padding: 0.75rem;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    .record-table th {
        background-color: #f8f9fa;
        font-weight: bold;
        color: #333;
    }
    
    .record-table tr:hover {
        background-color: #f8f9fa;
    }
</style>
