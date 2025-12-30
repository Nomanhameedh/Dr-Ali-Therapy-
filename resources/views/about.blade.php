@extends('layout.masterlayout')

@section('content')

<!-- Hero Section -->
<section class="bg-blue-600 text-white py-20 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">About Ali Therapy</h1>
    <p class="text-lg md:text-xl max-w-2xl mx-auto">
        We provide professional mental and physical wellness therapy online and on-site.
        Our mission is to make therapy accessible, easy, and effective for everyone.
    </p>
</section>

<!-- Mission & Vision -->
<section class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-12">
        <div class="bg-white p-8 rounded shadow hover:shadow-lg transition">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">Our Mission</h2>
            <p>
                To deliver high-quality mental and physical therapy, ensuring a healthy and balanced life for our clients.
            </p>
        </div>
        <div class="bg-white p-8 rounded shadow hover:shadow-lg transition">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">Our Vision</h2>
            <p>
                To be the most trusted and innovative therapy platform, connecting professional therapists with people in need.
            </p>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-10">Meet Our Team</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <img src="{{ asset('images/team1.jpg') }}" alt="Dr. Ali" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">Dr. Ali</h3>
                <p class="text-gray-600">Mental Health Therapist</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <img src="{{ asset('images/team2.jpg') }}" alt="Sara" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">Sara Khan</h3>
                <p class="text-gray-600">Physical Therapist</p>
            </div>
            <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                <img src="{{ asset('images/team3.jpg') }}" alt="Ahmed" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">Ahmed R.</h3>
                <p class="text-gray-600">Wellness Coach</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-blue-600 text-white py-16 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Start Your Wellness Journey Today!</h2>
    <a href="{{ route('book.appointment') }}" class="bg-white text-blue-600 px-8 py-3 rounded font-semibold hover:bg-gray-100 transition">
        Book an Appointment
    </a>
</section>

@endsection
