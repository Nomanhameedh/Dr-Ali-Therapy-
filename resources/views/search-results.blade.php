@extends('layout.masterlayout')

@section('content')
<h2 class="text-2xl font-bold mb-4">Search Results</h2>

@if($therapists->isEmpty())
    <p>No therapists found.</p>
@else
    <ul>
        @foreach($therapists as $therapist)
            <li class="mb-2">
                <strong>{{ $therapist->name }}</strong> - {{ $therapist->specialization }}
            </li>
        @endforeach
    </ul>
@endif
@endsection