<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <div class="flex flex-col min-h-screen">

    <aside id="logo-sidebar" class="border-r-2 fixed top-0 left-0 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-4 py-4 overflow-y-auto bg-white shadow-md">
            <div class="flex items-center justify-between px-2.5 ">
                <!-- Tombol Hamburger -->
                <button id="hamburger-button" class="absolute top-4 right-3 z-50 p-2 text-gray-700 rounded-md">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <div class="flex items-center space-x-3 mb-8">
                    <img src="{{ asset('storage/sw.jpg') }}" class="rounded-full h-10 sm:h-8" alt="Logo" />
                    <span class="text-xl font-semibold whitespace-nowrap dark:text-white">WEB CV</span>
                </div>
            </div>       
        <ul class="space-y-2 pl-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
                    </svg>
                    <span class="ms-3 pl-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap pl-3">Profil</span>
                </a>
            </li>
            <li>
                <a href="{{ route('about.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap pl-3">Tentang</span>
                </a>
            </li>
            <li class="relative">
                    <button onclick="toggleDropdown()" class="flex items-center p-2 text-gray-900 rounded-md dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full">

                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M88.7 223.8L0 375.8 0 96C0 60.7 28.7 32 64 32l117.5 0c17 0 33.3 6.7 45.3 18.7l26.5 26.5c12 12 28.3 18.7 45.3 18.7L416 96c35.3 0 64 28.7 64 64l0 32-336 0c-22.8 0-43.8 12.1-55.3 31.8zm27.6 16.1C122.1 230 132.6 224 144 224l400 0c11.5 0 22 6.1 27.7 16.1s5.7 22.2-.1 32.1l-112 192C453.9 474 443.4 480 432 480L32 480c-11.5 0-22-6.1-27.7-16.1s-5.7-22.2 .1-32.1l112-192z"/>
                        </svg>
                        <span class="ms-3 whitespace-nowrap pl-3">Resume</span>
                        <!-- Panah dropdown -->
                        <svg class="ml-auto w-4 h-4 transition-transform duration-200 {{ Request::routeIs('') ? 'rotate-180' : '' }}" id="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                        </svg>
                    </button>
            
                <!-- Submenu -->
                <ul id="dropdown-menu" class="{{ Request::routeIs('experience.index', 'education.index', 'skill.index') ? : 'hidden' }} ml-4 space-y-1 mt-2 dark:bg-gray-700 rounded-sm p-2">
                    <li class="{{ Request::routeIs('experience.index') }}">
                        <a href="{{ route('experience.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <!-- Ikon SVG -->
                            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 128 0 192 0 0-96c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM512 288l-192 0 0 32c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-128z"/>
                            </svg>
                            Pengalaman Kerja
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('education.index') }}">
                        <a href="{{ route('education.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <!-- Ikon SVG -->
                            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M337.8 5.4C327-1.8 313-1.8 302.2 5.4L166.3 96 48 96C21.5 96 0 117.5 0 144L0 464c0 26.5 21.5 48 48 48l208 0 0-96c0-35.3 28.7-64 64-64s64 28.7 64 64l0 96 208 0c26.5 0 48-21.5 48-48l0-320c0-26.5-21.5-48-48-48L473.7 96 337.8 5.4zM96 192l32 0c8.8 0 16 7.2 16 16l0 64c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-64c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 64c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-64zM96 320l32 0c8.8 0 16 7.2 16 16l0 64c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-64c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 64c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-64zM232 176a88 88 0 1 1 176 0 88 88 0 1 1 -176 0zm88-48c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-16 0 0-16c0-8.8-7.2-16-16-16z"/>
                            </svg>
                            Sekolah
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('skill.index') }}">
                        <a href="{{ route('skill.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <!-- Ikon SVG -->
                            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 288c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128z"/>
                            </svg>
                            Skill
                        </a>
                    </li>
                </ul>
            </li>
            
            <script>
                function toggleDropdown() {
                    const dropdownMenu = document.getElementById('dropdown-menu');
                    const dropdownArrow = document.getElementById('dropdown-arrow');
                    
                    if (!dropdownMenu.classList.contains('hidden')) {
                        dropdownMenu.classList.add('hidden');
                        dropdownArrow.classList.remove('rotate-180');
                    } else {
                        dropdownMenu.classList.remove('hidden');
                        dropdownArrow.classList.add('rotate-180');
                    }
                }
            </script>
            <li>
                <a href="{{ route('certificates.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z"/>
                    </svg>
                <span class="flex-1 ms-3 whitespace-nowrap pl-3">Sertifikat</span>
                </a>
            </li>
        </ul>
        </div>
    </aside>

    <!-- Script untuk menutup sidebar dan memperlebar konten -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebar = document.getElementById("logo-sidebar");
            const content = document.getElementById("content");
            const hamburgerButton = document.getElementById("hamburger-button");
            const logo = document.getElementById("logo");
            const svgImage = document.getElementById("svg-image");
    
            hamburgerButton.addEventListener("click", () => {
                sidebar.classList.toggle("w-64");
                sidebar.classList.toggle("w-16");
                content.classList.toggle("ml-64");
                content.classList.toggle("ml-16");
    
                // Ubah ukuran logo dan tampilkan/hide SVG saat sidebar ditutup
                if (sidebar.classList.contains("w-16")) {
                    logo.classList.add("transform", "scale-75");
                    svgImage.classList.remove("hidden"); // Tampilkan gambar SVG
                } else {
                    logo.classList.remove("transform", "scale-75");
                    svgImage.classList.add("hidden"); // Sembunyikan gambar SVG
                }
    
                // Tambahkan log untuk debugging
                console.log("Sidebar width:", sidebar.classList.contains("w-16"));
                console.log("SVG visibility:", svgImage.classList.contains("hidden"));
            });
        });
    </script>

    <!-- Top Navbar -->
    <div class="fixed w-3/4 left-64 h-16 bg-white border-b-2 flex justify-end items-center px-8">
        <!-- Right side (Profile photo and Dropdown) -->
        <div class="flex items-center space-x-2">
            <!-- Pengecekan gambar profil -->
            @if(Auth::user()->profile_photo_url)
                <img src="#" alt="User Profile" class="rounded-full" width="40" height="40">
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
                                <a href="/settings" class="block flex items-center px-2 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 m-2">
                                        <path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/>
                                    </svg>
                                    Profile Settings
                                </a>
                            </li>

                           <!-- Logout Menu -->
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a href="#" id="logout-btn" class="block flex items-center px-2 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 m-2">
                                        <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                                    </svg>
                                    Logout
                                </a>
                            </li>
                            <!-- Modal Konfirmasi Logout -->
                            <div id="logoutModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center z-50 hidden">
                                <div class="bg-white rounded-lg p-6 max-w-sm w-full">
                                    <h3 class="text-xl font-semibold mb-4 text-center">Anda yakin ingin logout?</h3>
                                    <div class="flex justify-center">
                                        <button id="cancel-logout" class="px-4 py-2 mr-2 bg-gray-300 text-gray-700 rounded-md">Batal</button>
                                        <button id="confirm-logout" class="px-4 py-2 bg-red-500 text-white rounded-md">Ya</button>
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
    </div>

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
 
 <div class=" mt-20 p-4 sm:ml-64">
    @yield('content')
 </div>

  </div> 
 
</body>
</html>