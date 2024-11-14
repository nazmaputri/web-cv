@extends('layouts.dashboard-admin')

@section('title', 'Pengaturan')

@section('content')

<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-gray-800">Pengaturan Akun</h2>

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded-lg my-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/settings') }}" method="POST">
        @csrf

        <!-- Nama -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
            @error('name')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
            @error('email')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4 relative">
            <label for="password" class="block text-sm font-medium text-gray-700">Password Baru</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            <i class="fa fa-eye absolute top-10 right-3 cursor-pointer" id="togglePassword"></i>
            @error('password')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4 relative">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password Baru</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            <i class="fa fa-eye absolute top-10 right-3 cursor-pointer" id="toggleConfirmPassword"></i>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600">Simpan Perubahan</button>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<script>
    // Toggle password visibility
    const togglePassword = document.getElementById('togglePassword');
    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('password_confirmation');

    togglePassword.addEventListener('click', function() {
        // Toggle the type of the password field
        const type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;
        // Toggle the eye icon
        this.classList.toggle('fa-eye-slash');
    });

    toggleConfirmPassword.addEventListener('click', function() {
        // Toggle the type of the confirm password field
        const type = confirmPasswordField.type === 'password' ? 'text' : 'password';
        confirmPasswordField.type = type;
        // Toggle the eye icon
        this.classList.toggle('fa-eye-slash');
    });
</script>
@endsection
