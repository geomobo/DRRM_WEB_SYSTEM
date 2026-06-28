<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <form action="{{ url('signup.post') }}" method="POST">
       @csrf 
        <label for="name">Name</label>
        <input type="text" placeholder="Enter your name" required>
 
        <label for="email">Email</label>
        <input type="text" placeholder="Enter your email" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Enter your password" required>

        <label for="confirm-password">Confirm Password</label>
        <input type="password" placeholder="Confirm your password" required>

        <button type="submit" class="border border-black p-2 rounded-sm cursor-pointer">Sign Up</button>
        <p class="text-sm font-arial">Already have an account?<a href="/login" class="text-blue-600 underline">Click Here</a></p>
        </form>
    </body>
</html>
