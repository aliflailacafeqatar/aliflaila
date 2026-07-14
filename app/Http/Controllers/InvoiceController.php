<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function generate(Reservation $reservation)
    {
        return view('invoices.reservation', compact('reservation'));
    }
}