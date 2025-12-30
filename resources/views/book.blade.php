@extends('layout.masterlayout')

@section('content')

<div class="max-w-2xl mx-auto my-16 p-8 bg-white rounded shadow">

    <h2 class="text-3xl font-bold mb-6 text-center">Book an Appointment</h2>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('appointment.store') }}" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1 font-semibold">Full Name</label>
            <input type="text" name="name" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block mb-1 font-semibold">Select Therapy Package</label>
            <select name="package_id" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">-- Select Package --</option>
                @foreach($packages as $package)
                    <option value="{{ $package->id }}">{{ $package->name }} - ${{ $package->price }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Appointment Date</label>
            <input type="date" name="booking_date" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="text-center">
            <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition font-semibold">
                Book Appointment
            </button>
        </div>
    </form>
</div>

@endsection
