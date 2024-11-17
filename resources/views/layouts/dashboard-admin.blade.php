<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
            <!-- Font Awesome CDN -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-sm lg:text-xs">

    <!-- Wrapper -->
    <div class="flex h-screen" x-data="{ sidebarOpen: false }">

    <!-- Sidebar -->
    <div 
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" 
        class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg transition-transform transform lg:translate-x-0 lg:static z-50">
        <div class="flex items-center justify-between p-4">
        <div class="flex items-center">
        <!-- foto profile -->
        <a href="" class="inline-block ml-4">
            <img 
                src="{{ asset('storage/sw.jpg') }}"
                alt="Profile Admin" 
                class="w-12 h-12 rounded-full object-cover"
            />
        </a>

    <!-- Kontainer teks user dan user2, disusun vertikal -->
    <div class="ml-2 flex flex-col">
        <p class="font-medium">Web CV</p>
        <p class="text-sm text-gray-600"></p>
    </div>
    </div>

    <!-- button x menutup sidebar -->
    <button @click="sidebarOpen = false" class="lg:hidden p-2 rounded-md text-red-700">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
    </div>
        <nav class="">
            <ul class="space-y-3 px-4 font-medium">
                <li>
                    <a href="{{ route('dashboard') }}" class="flex space-x-5 items-center px-4 py-3 rounded-lg  group {{ Request::is('dashboard') ? 'bg-sky-500 text-white font-semibold hover:bg-sky-600' : 'text-gray-600 hover:bg-gray-100' }}">
                        <i class="fa-solid fa-house group-hover:scale-105 duration-300 text-lg"></i>
                        <span class="group-hover:translate-x-1 duration-300">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.index') }}" class="flex space-x-5 items-center px-4 py-3 rounded-lg group {{ Request::is('profile') ? 'bg-sky-500 text-white font-semibold hover:bg-sky-600' : 'text-gray-600 hover:bg-gray-100' }}">
                        <i class="fa-solid fa-user group-hover:scale-105 duration-300 text-lg"></i>
                        <span class="flex-1 group-hover:translate-x-1 duration-300 whitespace-nowrap">Profil</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about.index') }}" class="flex space-x-5 items-center px-4 py-3 rounded-lg group {{ Request::is('about') ? 'bg-sky-500 text-white font-semibold hover:bg-sky-600' : 'text-gray-600 hover:bg-gray-100' }}">
                        <i class="fa-solid fa-pen-to-square group-hover:scale-105 duration-300 text-lg"></i>
                        <span class="flex-1 group-hover:translate-x-1 duration-300 whitespace-nowrap">Tentang</span>
                    </a>
                </li>
                <li class="relative" x-data="{ dropdownOpen: {{ Request::routeIs('experience.index', 'education.index', 'skill.index') ? 'true' : 'false' }} }">
                    <button @click="dropdownOpen = !dropdownOpen" class="flex space-x-5 items-center px-4 py-3 rounded-md w-full text-gray-700 hover:bg-gray-100 group">
                        <!-- Resume Icon -->
                        <i class="fa-regular fa-folder-open group-hover:scale-105 duration-300 text-lg"></i>
                        <span class="group-hover:translate-x-1 duration-300 whitespace-nowrap">Pengalaman</span>
                        <!-- Dropdown Arrow -->
                        <svg :class="{'rotate-180': dropdownOpen}" class="ml-auto w-4 h-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                        </svg>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <ul x-show="dropdownOpen" @click.away="dropdownOpen = false" class="items-center space-y-3 px-4 py-3 rounded-md w-full">
                        <li class="{{ Request::routeIs('experience.index') ? 'bg-sky-500 text-white font-semibold rounded-lg' : '' }}">
                            <a href="{{ route('experience.index') }}" class="flex space-x-5 items-center px-4 py-3 rounded-lg group {{ Request::is('experience') ? 'bg-sky-500 text-white font-semibold hover:bg-sky-600' : 'text-gray-600 hover:bg-gray-100' }}">
                                <!-- Experience Icon -->
                                <i class="fa-solid fa-briefcase group-hover:scale-105 duration-300 text-lg"></i>
                                <span class="group-hover:translate-x-1 duration-300">Pekerjaan</span>
                            </a>
                        </li>
                        <li class="{{ Request::routeIs('education.index') ? 'bg-sky-500 text-white font-semibold rounded-lg' : '' }}">
                            <a href="{{ route('education.index') }}" class="flex space-x-5 items-center px-4 py-3 rounded-lg group {{ Request::is('education') ? 'bg-sky-500 text-white font-semibold hover:bg-sky-600' : 'text-gray-600 hover:bg-gray-100' }}">
                                <!-- Education Icon -->
                                <i class="fa-solid fa-school group-hover:scale-105 duration-300 text-lg"></i>
                                <span class="group-hover:translate-x-1 duration-300">Pendidikan</span>
                            </a>
                        </li>
                        <li class="{{ Request::routeIs('skill.index') ? 'bg-sky-500 text-white font-semibold rounded-lg' : '' }}">
                            <a href="{{ route('skill.index') }}" class="flex space-x-5 items-center px-4 py-3 rounded-lg group {{ Request::is('skill') ? 'bg-sky-500 text-white font-semibold hover:bg-sky-600' : 'text-gray-600 hover:bg-gray-100' }}">
                                <!-- Skill Icon -->
                                <i class="fa-solid fa-wand-magic-sparkles group-hover:scale-105 duration-300 text-lg"></i>
                                <span class="group-hover:translate-x-1 duration-300">Keterampilan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="{{ route('certificates.index') }}" class="flex space-x-5 items-center px-4 py-3 rounded-lg group {{ Request::is('certificates') ? 'bg-sky-500 text-white font-semibold hover:bg-sky-600' : 'text-gray-600 hover:bg-gray-100' }}">
                        <i class="fa-solid fa-award group-hover:scale-105 duration-300 text-lg"></i>
                    <span class="flex-1 group-hover:translate-x-1 duration-300">Sertifikat</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

        <!-- Popup Logout Confirmation -->
        <div id="confirmationLogout" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50 text-sm md:text-lg">
            <div class="bg-white py-6 px-12 rounded-lg shadow-lg">
                <p class="text-center text-gray-700">Yakin mau logout?</p>
                <div class="mt-4 flex justify-center gap-6">
                    <button id="cancelLogout" class="bg-white text-green-500 border border-green-500 py-2 px-4 rounded-xl hover:bg-green-500 hover:text-white">Tidak</button>
                    <button id="confirmLogout" class="bg-white border border-red-500 text-red-500 py-2 px-4 rounded-xl hover:bg-red-500 hover:text-white">Ya</button>
                </div>
            </div>
        </div>

        <!-- Overlay (untuk layar kecil) -->
        <div 
            x-show="sidebarOpen" 
            @click="sidebarOpen = false"
            class="fixed inset-0 bg-black bg-opacity-50 lg:hidden"></div>

        <!-- Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="bg-white shadow p-3 flex items-center justify-between">
            <!-- Button ☰ untuk membuka sidebar -->
            <button @click="sidebarOpen = true" class="lg:hidden p-2 text-gray-700 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                </svg>
            </button>

            <h5 class="text-md font-semibold pl-2 text-gray-700">@yield('title')</h5>

            <!-- Right side (Profile photo and Dropdown) -->
            <div class="flex items-center space-x-4">
                <!-- Pengecekan gambar profil -->
                @if(Auth::user()->profile_photo_url)
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="User Profile" class="rounded-full" width="40" height="40">
                @else
                    <!-- SVG sebagai ikon default -->
                    <svg class="w-9 h-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/>
                    </svg>
                @endif

                <div class="ml-2 flex items-center">
                    <div>
                        <!-- Memeriksa apakah pengguna sudah login -->
                        @if(Auth::check())
                            <p class="text-gray-800 font-semibold mr-2">{{ Auth::user()->name }}</p>
                        @else
                            <p class="text-gray-800 font-semibold mr-2">Guest</p>
                            <p class="text-gray-600 text-sm">Not logged in</p>
                        @endif
                    </div>
                    <div class="relative">
                        <button id="dropdown-button" class="text-gray-600 focus:outline-none flex items-center">
                            <img width="22" height="22" src="https://img.icons8.com/windows/32/circled-chevron-down.png" alt="circled-chevron-down"/>
                        </button>
                        <div id="dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-lg z-10">
                            <ul class="py-1" aria-labelledby="dropdown-button">
                                <li>
                                    <a href="/settings" class="block flex  space-x-3 items-center p-3  text-gray-700 hover:bg-gray-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                            <path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/>
                                        </svg>
                                        <span>Profile Settings</span>
                                    </a>
                                </li>

                                <!-- Logout Menu -->
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="#" id="logout-btn" class="block flex space-x-3 bg-gray-100 hover:bg-gray-200 items-center p-3  text-gray-700 duration-200">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                                <!-- Modal Konfirmasi Logout -->
                            <div id="logoutModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center z-50 hidden">
                                <div class="bg-white rounded-lg p-6 max-w-sm w-full">
                                    <h3 class="text-xl font-semibold mb-4 text-center">Anda yakin ingin logout?</h3>
                                    <div class="flex justify-center">
                                        <button id="cancel-logout" class="px-4 py-3 mr-2 bg-gray-300 text-gray-700 rounded-md">Batal</button>
                                        <button id="confirm-logout" class="px-4 py-3 bg-red-500 text-white rounded-md">Ya</button>
                                    </div>
                                </div>
                            </div>

                            <script>
                                // Ambil elemen-elemen yang diperlukan
                                const logoutBtn = document.getElementById('logout-btn');
                                const logoutModal = document.getElementById('logoutModal');
                                const cancelLogoutBtn = document.getElementById('cancel-logout');
                                const confirmLogoutBtn = document.getElementById('confirm-logout');
                                const logoutForm = document.getElementById('logout-form');  // Form logout
                            
                                // Menampilkan modal konfirmasi logout
                                logoutBtn.addEventListener('click', function(e) {
                                    e.preventDefault(); // Mencegah halaman untuk berpindah
                                    logoutModal.classList.remove('hidden'); // Tampilkan modal
                                });
                            
                                // Menutup modal jika user membatalkan
                                cancelLogoutBtn.addEventListener('click', function() {
                                    logoutModal.classList.add('hidden'); // Sembunyikan modal
                                });
                            
                                // Menangani konfirmasi logout
                                confirmLogoutBtn.addEventListener('click', function() {
                                    logoutModal.classList.add('hidden'); // Sembunyikan modal
                                    logoutForm.submit();  // Kirimkan formulir logout
                                });
                            </script>       
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

<!-- Script untuk Menangani Dropdown -->
   <script>
    const dropdownButton = document.getElementById('dropdown-button');
    const dropdown = document.getElementById('dropdown');
    const dropdownIcon = document.getElementById('dropdown-button');

    dropdownButton.addEventListener('click', () => {
        dropdown.classList.toggle('hidden');
        dropdownIcon.classList.toggle('rotate-180'); // Mengubah posisi ikon saat dropdown terbuka
    });

    // Menutup dropdown jika klik di luar
    window.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add('hidden');
            dropdownIcon.classList.remove('rotate-90');
        }
    });
</script>

<!-- Main Content -->
    <main class="flex-1 p-6 md:overflow-y-scroll">
         @yield('content')
    </main>

    </div>
</div>
</body>
</html>