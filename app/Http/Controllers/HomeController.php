<?php

namespace App\Http\Controllers;

use App\Models\TherapyPackage;
use App\Models\Therapist;
use App\Models\Contact;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    // Home page → welcome.blade.php
    public function index()
    {
        $packages = TherapyPackage::all(); 
        return view('welcome', compact('packages'));
    }

    // Booking page → book.blade.php
    public function booking()
    {
        $packages = TherapyPackage::all();
        return view('book', compact('packages'));
    }

    // Contact page
    public function contact()
    {
        return view('contact'); 
    }

    // Send contact form
    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

        public function therapies()
    {
        // DB se saari therapy packages fetch karo
        $packages = TherapyPackage::all();

        // Blade view me $packages variable pass karo
        return view('therapies', compact('packages'));
    }

    public function therapiest()
{
    $therapists = Therapist::all(); // correct model name
    return view('therapiest', compact('therapists')); // correct variable name
}

    // Other pages
    // public function therapies() { return view('therapies'); }
    // public function therapists() { return view('Therapists'); }
    public function about() { return view('about'); }
}
