@extends('layout.masterlayout')
@section('content')
<!-- Popular Therapy Packages -->
<section class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-10">Popular Therapy Packages</h2>

        <div class="grid md:grid-cols-3 gap-8">
            @forelse($packages as $package)
                <div class="bg-white p-6 rounded shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2">{{ $package->name }}</h3>
                    <p class="mb-2">{{ $package->description }}</p>
                    <p class="mb-2"><strong>Duration:</strong> {{ $package->duration }}</p>
                    <p class="mb-4"><strong>Price:</strong> ${{ $package->price }}</p>
                    <a href="{{ route('book.appointment') }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                        Book Now
                    </a>
                </div>
            @empty
                <p class="text-center col-span-3 text-red-500">
                    No packages available
                </p>
            @endforelse
        </div>
    </div>
</section>

@endsection