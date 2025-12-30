<!DOCTYPE html>
<html>
<head>
    <title>Admin - Appointments</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>All Appointments</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Therapy</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        @foreach($appointments as $appointment)
        <tr>
            <td>{{ $appointment->id }}</td>
            <td>{{ $appointment->name }}</td>
            <td>{{ $appointment->email }}</td>
            <td>{{ $appointment->therapy_package }}</td>
            <td>{{ $appointment->date }}</td>
            <td>{{ $appointment->time }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
