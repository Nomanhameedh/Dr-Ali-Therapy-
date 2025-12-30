@extends('layout.masterlayout')

@section('content')
<div class="max-w-6xl mx-auto my-10 p-6">

    <h2 class="text-3xl font-bold mb-6 text-center">Our Therapists</h2>

    <div id="therapist-cards" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- Hardcoded therapists --}}
        @php
        $therapists = [
            ['id' => 1, 'name' => 'Dr. Ayesha Khan', 'role' => 'Psychologist', 'bio' => 'Expert in cognitive therapy.', 'photo' => 'https://via.placeholder.com/400x300'],
            ['id' => 2, 'name' => 'Dr. Ali Raza', 'role' => 'Physiotherapist', 'bio' => 'Specialist in sports injuries.', 'photo' => 'https://via.placeholder.com/400x300'],
            ['id' => 3, 'name' => 'Dr. Sara Malik', 'role' => 'Nutritionist', 'bio' => 'Healthy diet planning expert.', 'photo' => 'https://via.placeholder.com/400x300'],
        ];
        @endphp

        @foreach($therapists as $therapist)
            <div class="bg-white shadow-lg rounded overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ $therapist['photo'] }}" alt="{{ $therapist['name'] }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold">{{ $therapist['name'] }}</h3>
                    <p class="text-gray-600">{{ $therapist['role'] }}</p>
                    <p class="text-gray-700 mt-2">{{ $therapist['bio'] }}</p>
                </div>
                <div class="p-4 border-t flex justify-between">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" onclick="viewDetails({{ $therapist['id'] }})">View Profile</button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" onclick="bookAppointment({{ $therapist['id'] }})">Book</button>
                </div>
            </div>
        @endforeach

    </div>

</div>

<script>
function viewDetails(id) {
    alert('View details for therapist ID: ' + id);
}

function bookAppointment(id) {
    alert('Book appointment for therapist ID: ' + id);
}
</script>
@endsection
