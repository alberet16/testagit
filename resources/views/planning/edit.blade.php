<!DOCTYPE html>
<html>
<head>
    <title>Edit Planning</title>
</head>
<body>
    <h1>Edit Production Planning</h1>
    <form action="{{ route('planning.update') }}" method="POST">
        @csrf
        <table border="1">
            <tr>
                <th>Day</th>
                <th>Production Plan</th>
            </tr>
            @foreach ($plannings as $planning)
                <tr>
                    <td>{{ $planning->day }}</td>
                    <td>
                        <input type="number" name="production_plan[{{ $planning->id }}]" value="{{ $planning->production_plan }}">
                    </td>
                </tr>
            @endforeach
        </table>
        <button type="submit">Update</button>
    </form>
</body>
</html>
