<!DOCTYPE html>
<html>
<head>
    <title>Planning and Change History</title>
</head>
<body>
    <h1>Production Planning</h1>
    <table border="1">
        <tr>
            <th>Day</th>
            <th>Production Plan</th>
        </tr>
        @foreach ($plannings as $planning)
            <tr>
                <td>{{ $planning->day }}</td>
                <td>{{ $planning->production_plan }}</td>
            </tr>
        @endforeach
    </table>

    <h2>Change History</h2>
    <table border="1">
        <tr>
            <th>Day</th>
            <th>Old Plan</th>
            <th>New Plan</th>
            <th>Modified At</th>
        </tr>
        @foreach ($planningHistories as $history)
            <tr>
                <td>{{ $history->day }}</td>
                <td>{{ $history->old_production_plan }}</td>
                <td>{{ $history->new_production_plan }}</td>
                <td>{{ $history->modified_at }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('planning.edit') }}">Edit Planning</a>
</body>
</html>
