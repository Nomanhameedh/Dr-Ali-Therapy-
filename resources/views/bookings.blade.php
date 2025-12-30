@extends('layout.masterlayout')

@section('content')
<div class="max-w-6xl mx-auto my-10 p-6 bg-white rounded shadow">
    <h2 class="text-3xl font-bold mb-6 text-center">All Bookings</h2>

    @if($bookings->count() > 0)
        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Package</th>
                    <th class="border px-4 py-2">Booking Date</th>
                    <th class="border px-4 py-2">Actions</th> <!-- Add actions column -->
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $booking->name }}</td>
                        <td class="border px-4 py-2">{{ $booking->email }}</td>
                        <td class="border px-4 py-2">{{ $booking->package->name ?? '-' }}</td>
                        <td class="border px-4 py-2">{{ $booking->booking_date }}</td>
                        <td class="border px-4 py-2 flex space-x-2">
                            <!-- Delete Form -->
                            <form action="{{ route('admin.booking.delete', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this booking?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                            </form>

                            <!-- Edit / Update Link -->
                            <a href="{{ route('admin.booking.edit', $booking->id) }}" 
                               class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                               Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center text-gray-500">No bookings yet.</p>
    @endif
</div>
@endsection
