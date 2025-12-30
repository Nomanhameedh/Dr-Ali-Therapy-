@extends('layout.masterlayout')

@section('content')
<div class="max-w-4xl mx-auto my-10 p-6 bg-white shadow rounded">

    <h2 class="text-2xl font-bold mb-6 text-center">Edit Booking</h2>

    <form method="POST" action="{{ route('admin.booking.update', $booking->id) }}">
        @csrf
        @method('PUT') {{-- PUT method add karo --}}

        {{-- Name --}}
        <div class="mb-4">
            <label class="block mb-1">Name</label>
            <input type="text" name="name"
                   value="{{ old('name', $booking->name) }}"
                   class="w-full border p-2 rounded" required>
        </div>

        {{-- Email --}}
        <div class="mb-4">
            <label class="block mb-1">Email</label>
            <input type="email" name="email"
                   value="{{ old('email', $booking->email) }}"
                   class="w-full border p-2 rounded" required>
        </div>

        {{-- Package / Therapy --}}
        <div class="mb-4">
            <label class="block mb-1">Select Therapy</label>
            <select name="package_id" class="w-full border p-2 rounded" required>
                <option value="">-- Select Therapy --</option>
                @foreach($packages as $package)
    <option value="{{ $package->id }}" {{ $booking->package_id == $package->id ? 'selected' : '' }}>
        {{ $package->name }}
    </option>
@endforeach
            </select>
        </div>

        {{-- Booking Date --}}
        <div class="mb-4">
            <label class="block mb-1">Booking Date</label>
            <input type="date" name="booking_date"
                   value="{{ old('booking_date', $booking->booking_date) }}"
                   class="w-full border p-2 rounded" required>
        </div>

        {{-- Buttons --}}
        <div class="flex gap-4">
            <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded">
                Update Booking
            </button>

            <a href="{{ route('admin.bookings') }}"
               class="bg-gray-400 text-white px-6 py-2 rounded">
                Cancel
            </a>
        </div>

    </form>
</div>
@endsection
