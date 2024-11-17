<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md">
        <form action="{{ route('login') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <h2 class="text-center text-2xl font-bold mb-6 border-b-2 pb-2">Login</h2>
            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <!-- Password Field -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" id="password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <!-- Login Button -->
            <div class="flex text-end items-end justify-end space-x-3">
                <a href="{{ route('about') }}" class="bg-gray-400 text-white font-bold  text-xs px-4 py-2 rounded hover:bg-gray-600 hover:-translate-y-1 duration-200">Kembali</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold  text-xs px-4 py-2 rounded focus:outline-none focus:shadow-outline">
                    Login
                </button>
            </div>
            <!-- Error Message -->
            @if($errors->any())
                <p class="text-red-500 text-xs mt-4">{{ $errors->first() }}</p>
            @endif
        </form>
    </div>
</body>
</html>
