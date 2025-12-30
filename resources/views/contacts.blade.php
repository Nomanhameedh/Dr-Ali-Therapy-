@extends('layout.masterlayout')

@section('content')

<div class="max-w-6xl mx-auto my-16 p-6 bg-white rounded shadow">
    <h2 class="text-3xl font-bold mb-6 text-center">All Contacts</h2>

    <table class="w-full border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Message</th>
                <th class="border px-4 py-2">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border px-4 py-2">{{ $contact->name }}</td>
                    <td class="border px-4 py-2">{{ $contact->email }}</td>
                    <td class="border px-4 py-2">{{ $contact->message }}</td>
                    <td class="border px-4 py-2">{{ $contact->created_at->format('d M Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
