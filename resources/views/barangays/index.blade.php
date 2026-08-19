<!DOCTYPE html>
<html>
<head>
    <title>Barangays of Catanduanes</title>
</head>
<body>
    <h1>Barangays of Catanduanes</h1>
    <p>Ronnie Vargas</p>

    <table border="1" cellpadding="8">
        <tr>
            <th>Barangay</th>
            <th>Municipality</th>
            <th>Population</th>
        </tr>

        @foreach ($barangays as $barangay)
            <tr>
                <td>{{ $barangay['name'] }}</td>
                <td>{{ $barangay['municipality'] }}</td>
                <td>{{ $barangay['population'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
