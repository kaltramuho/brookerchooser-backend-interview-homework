<!DOCTYPE html>
<html>
<head>
    <title>Manage A/B Tests</title>
</head>
<body>
    <h1>A/B Tests</h1>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Test Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tests as $test)
            <tr>
                <td>{{ $test->name }}</td>
                <td>{{ $test->is_active ? 'Active' : 'Inactive' }}</td>
                <td>
                    @if ($test->is_active)
                        <a href="{{ route('admin.tests.stop', $test->id) }}">Stop</a>
                    @else
                        <a href="{{ route('admin.tests.start', $test->id) }}">Start</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
