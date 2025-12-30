<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Therapist;


class TherapistController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        $therapists = Therapist::where('name', 'like', "%{$query}%")
                        ->orWhere('specialization', 'like', "%{$query}%")
                        ->get();

        return view('search-results', compact('therapists'));
    }

    // public function showuser()
    // {
         
    //      return "<h2>Nohman</h2>";

    // }
}
