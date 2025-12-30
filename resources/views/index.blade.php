@extends('layout.masterlayout')

@section('content')

<div class="max-w-6xl mx-auto my-12 p-6 bg-white rounded shadow">
    <h2 class="text-3xl font-bold mb-6 text-center">All Appointments</h2>

    <table class="w-full border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Package</th>
                <th class="border px-4 py-2">Date</th>
                <th class="border px-4 py-2">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appointment)
            <tr>
                <td class="border px-4 py-2">{{ $appointment->id }}</td>
                <td class="border px-4 py-2">{{ $appointment->user_name }}</td>
                <td class="border px-4 py-2">{{ $appointment->email }}</td>
                <td class="border px-4 py-2">{{ $appointment->therapyPackage->name ?? '-' }}</td>
                <td class="border px-4 py-2">{{ $appointment->appointment_date }}</td>
                <td class="border px-4 py-2">{{ $appointment->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>

@endsection
