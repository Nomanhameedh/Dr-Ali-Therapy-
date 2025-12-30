<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class AppointmentController extends Controller
{
    // Store booking
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'package_id' => 'required|exists:therapy_packages,id',
            'booking_date' => 'required|date',
        ]);

        // Save in bookings table
        Booking::create($request->only('name','email','package_id','booking_date'));

        return redirect()->back()->with('success','Booking successful!');
    }

    // Show all bookings (for admin/testing)
    public function index()
    {
        $bookings = Booking::with('package')->get(); // optional: join package

        return view('appointments.index', compact('bookings'));
    }
}
