<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Invoice #{{ $reservation->id }}</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333;
            padding: 40px;
            background: #f9f9f9;
        }
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 40px;
            border: 1px solid #eee;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .header {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid #333;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 { margin: 0; font-size: 28px; }
        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 40px;
        }
        .detail-item p { margin: 5px 0; font-size: 15px; }
        .detail-item strong { display: inline-block; width: 120px; }
        .footer {
            text-align: center;
            margin-top: 50px;
            font-size: 12px;
            color: #777;
        }
        
        /* Hide everything else and only print the invoice box */
        @media print {
            body { background: #fff; padding: 0; }
            .invoice-box { box-shadow: none; border: none; }
        }
    </style>
</head>
<body onload="window.print()">
    <div class="invoice-box">
        <div class="header">
            <div>
                <h1>ALIF LAILA CAFÉ</h1>
                <p>Luxury Avenue, Doha, Qatar</p>
            </div>
            <div style="text-align: right;">
                <h2>INVOICE</h2>
                <p><strong>Booking ID:</strong> #{{ str_pad($reservation->id, 5, '0', STR_PAD_LEFT) }}</p>
                <p><strong>Created:</strong> {{ $reservation->created_at->format('M d, Y') }}</p>
            </div>
        </div>

        <div class="details-grid">
            <div class="detail-item">
                <h3>Customer Details</h3>
                <p><strong>Name:</strong> {{ $reservation->first_name }} {{ $reservation->last_name }}</p>
                <p><strong>Email:</strong> {{ $reservation->email }}</p>
                <p><strong>Phone:</strong> {{ $reservation->phone }}</p>
            </div>
            <div class="detail-item">
                <h3>Reservation Details</h3>
                <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($reservation->date)->format('F j, Y') }}</p>
                <p><strong>Time:</strong> {{ $reservation->arrival_time }}</p>
                <p><strong>Guests:</strong> {{ $reservation->guests }}</p>
                <p><strong>Seating:</strong> {{ $reservation->seating_preference ?? 'No preference' }}</p>
            </div>
        </div>

        @if(!empty($reservation->food_items) || !empty($reservation->special_requests))
        <div class="detail-item" style="margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px;">
            <h3>Additional Information</h3>
            
            @if(!empty($reservation->food_items) && is_array($reservation->food_items))
                <p><strong>Pre-ordered Food:</strong> {{ implode(', ', $reservation->food_items) }}</p>
            @endif
            
            @if(!empty($reservation->special_requests))
                <p><strong>Special Requests:</strong> {{ $reservation->special_requests }}</p>
            @endif
        </div>
        @endif

        <div class="footer">
            <p>Thank you for choosing Alif Laila Cafe & Restaurant!</p>
        </div>
    </div>
</body>
</html>