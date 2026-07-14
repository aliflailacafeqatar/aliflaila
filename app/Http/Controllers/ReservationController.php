<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Mail\BookingConfirmed;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate incoming data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'arrival_time' => 'required|string',
            'guests' => 'required|string',
            'seating_preference' => 'nullable|string',
            'special_requests' => 'nullable|string',
            'food_items' => 'nullable|string', 
        ]);

        // Convert comma-separated food items string to an array if needed
        if (!empty($validated['food_items'])) {
            $validated['food_items'] = explode(',', $validated['food_items']);
        }

        // 2. Save to database
        $reservation = Reservation::create($validated);

        // 3. Send email to the user
        Mail::to($reservation->email)->send(new BookingConfirmed($reservation, false));

        // 4. Send email to Admin
        Mail::to('aliflailacafe.qatar@gmail.com')->send(new BookingConfirmed($reservation, true));

        // 5. Redirect to thank you page
        return redirect('/thankyou')->with('success', 'Reservation successful!');
    }
}