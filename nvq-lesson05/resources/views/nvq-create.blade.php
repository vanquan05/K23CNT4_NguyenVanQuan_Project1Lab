<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
</head>
<body>
    <h1>Reservation Request</h1>
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/nvqreservation">
        @csrf
        <!-- General Information -->
        <label>Arrival Date:</label>
        <input type="date" name="arrival_date" value="{{ old('arrival_date') }}">
        <br>
        <label>Nights:</label>
        <input type="number" name="nights" value="{{ old('nights') }}">
        <br>
        <label>Adults:</label>
        <input type="number" name="adults" value="{{ old('adults') }}">
        <br>
        <label>Children:</label>
        <input type="number" name="children" value="{{ old('children') }}">
        <br><br>

        <!-- Preferences -->
        <label>Room Type:</label>
        <select name="room_type">
            <option value="Standard" {{ old('room_type') == 'Standard' ? 'selected' : '' }}>Standard</option>
            <option value="Business" {{ old('room_type') == 'Business' ? 'selected' : '' }}>Business</option>
            <option value="Suite" {{ old('room_type') == 'Suite' ? 'selected' : '' }}>Suite</option>
        </select>
        <br>
        <label>Bed Type:</label>
        <select name="bed_type">
            <option value="King" {{ old('bed_type') == 'King' ? 'selected' : '' }}>King</option>
            <option value="Double Double" {{ old('bed_type') == 'Double Double' ? 'selected' : '' }}>Double Double</option>
        </select>
        <br>
        <label>Smoking:</label>
        <input type="checkbox" name="smoking" {{ old('smoking') ? 'checked' : '' }}>
        <br><br>

        <!-- Contact Information -->
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        <br>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone') }}">
        <br><br>

        <button type="submit">Submit Reservation</button>
    </form>
</body>
</html>
