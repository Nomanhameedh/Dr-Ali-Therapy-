<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\TherapyPackage;

class AdminController extends Controller
{
    // Show all bookings
    public function bookings()
    {
        $bookings = Booking::with('therapyPackage')
            ->orderBy('booking_date', 'desc')
            ->get();

        return view('bookings', compact('bookings'));
    }

    // Show contacts
    public function contacts()
    {
        $contacts = Contact::all();
        return view('contacts', compact('contacts'));
    }

    // Delete booking
    public function deleteBooking($id)
    {
        Booking::findOrFail($id)->delete();

        return redirect()->back()
            ->with('success', 'Booking deleted successfully!');
    }

    // Edit booking
public function editBooking($id)
{
    $booking = Booking::findOrFail($id);
    $packages = TherapyPackage::all();  // sab packages fetch karo
    return view('edit_booking', compact('booking', 'packages'));
}

    // Update booking
    public function updateBooking(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'package_id' => 'required|exists:therapy_packages,id',
        'booking_date' => 'required|date',
    ]);

    $booking = Booking::findOrFail($id);
    $booking->update($request->only('name','email','package_id','booking_date'));

    return redirect()->route('admin.bookings')->with('success', 'Booking updated successfully!');
}
}
