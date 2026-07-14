<!DOCTYPE html>
<html>
<body>
    <h2>{{ $isAdminView ? 'New Reservation Alert' : 'Thank you for your reservation!' }}</h2>
    
    <p><strong>Name:</strong> {{ $reservation->first_name }} {{ $reservation->last_name }}</p>
    <p><strong>Email:</strong> {{ $reservation->email }}</p>
    <p><strong>Phone:</strong> {{ $reservation->phone }}</p>
    <p><strong>Date:</strong> {{ $reservation->date }}</p>
    <p><strong>Time:</strong> {{ $reservation->arrival_time }}</p>
    <p><strong>Guests:</strong> {{ $reservation->guests }}</p>
    <p><strong>Seating:</strong> {{ $reservation->seating_preference ?? 'No preference' }}</p>
    
    @if($reservation->special_requests)
        <p><strong>Special Requests:</strong> {{ $reservation->special_requests }}</p>
    @endif
</body>
</html>