<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        label { display: block; margin-top: 10px; }
        .error { color: red; font-size: 0.9em; }
    </style>
</head>
<body>
    <form action="aa" border-style:solid >
        <h1>Registration Form</h1>
        <form action="{{ route('nvqregister.nvqsubmit') }}" method="POST">
            @csrf
            <label for="userid">User ID:</label>
            <input type="text" id="userid" name="userid" value="{{ old('userid') }}">
            @error('userid') <div class="error">{{ $message }}</div> @enderror
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            @error('password') <div class="error">{{ $message }}</div> @enderror

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name') <div class="error">{{ $message }}</div> @enderror

            <label for="address">Address (Optional):</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}">

            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="">Please select a country</option>
                <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option>
                <option value="UK" {{ old('country') == 'UK' ? 'selected' : '' }}>UK</option>
                <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
            </select>
            @error('country') <div class="error">{{ $message }}</div> @enderror

            <label for="zipcode">ZIP Code:</label>
            <input type="text" id="zipcode" name="zipcode" value="{{ old('zipcode') }}">
            @error('zipcode') <div class="error">{{ $message }}</div> @enderror

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email') <div class="error">{{ $message }}</div> @enderror

            <label>Sex:</label>
            <input type="radio" id="male" name="sex" value="Male" {{ old('sex') == 'Male' ? 'checked' : '' }}> Male
            <input type="radio" id="female" name="sex" value="Female" {{ old('sex') == 'Female' ? 'checked' : '' }}> Female
            @error('sex') <div class="error">{{ $message }}</div> @enderror

            <label>Language:</label>
            <input type="checkbox" name="language[]" value="English" {{ is_array(old('language')) && in_array('English', old('language')) ? 'checked' : '' }}> English
            <input type="checkbox" name="language[]" value="Non English" {{ is_array(old('language')) && in_array('Non English', old('language')) ? 'checked' : '' }}> Non English
            @error('language') <div class="error">{{ $message }}</div> @enderror

            <label for="about">About (Optional):</label>
            <textarea id="about" name="about">{{ old('about') }}</textarea>

            <button type="submit">Submit</button>
        </form>
    </form>
</body>
</html>
