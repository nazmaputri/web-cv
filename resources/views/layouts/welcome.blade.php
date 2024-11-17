<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Hotel Reservation')</title>
        {{-- alpinejs --}}
         <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <!-- Font Awesome CDN -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

        <!-- AOS CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        @vite('resources/css/app.css')

        {{-- <style>
            /* Parallax Animation */
            .parallax > use {
                animation: move-forever 25s cubic-bezier(.55,.5,.45,.5) infinite;
            }
            .parallax > use:nth-child(1) {
                animation-delay: -2s;
                animation-duration: 7s;
            }
            .parallax > use:nth-child(2) {
                animation-delay: -3s;
                animation-duration: 10s;
            }
            .parallax > use:nth-child(3) {
                animation-delay: -4s;
                animation-duration: 13s;
            }
            .parallax > use:nth-child(4) {
                animation-delay: -5s;
                animation-duration: 20s;
            }
            @keyframes move-forever {
                0% {
                    transform: translate3d(-90px, 0, 0);
                }
                100% {
                    transform: translate3d(85px, 0, 0);
                }
            }
        </style> --}}
        <style>
            .clip-path-custom {
                  clip-path: polygon(0 100%, 100% 100%, 100% 0, 0 50%);
            }
            .typing {
                display: inline-block;
                white-space: nowrap;
                overflow: hidden;
                width: 0;
                animation: typing 5s steps(30) 1s infinite, blink-caret 0.75s step-end infinite;
            }

        @keyframes typing {
            from {
            width: 0;
            }
            to {
            width: 100%;
            }
        }

        @keyframes blink-caret {
            50% {
            border-color: transparent;
            }
        }

        .bg-change {
            background: linear-gradient(to right, #67e8f9, #38bdf8);
            background-size: 400% 400%;
            animation: gradientShift 3s ease infinite;
        }

        @keyframes gradientShift {
            0% {
            background-position: 0% 50%;
            }
            50% {
            background-position: 100% 50%;
            }
            100% {
            background-position: 0% 50%;
            }
        }

            /* bg-gray-200 */
        </style>
    </head>
    <body class="bg-change to-blue-300 h-screen md:py-8 md:flex items-center justify-center text-sm font-outfit">
        <div class="max-w-6xl w-full h-full  mx-auto flex flex-col md:flex-row space-x-0 md:space-x-4">
            
            <x-navbar></x-navbar>
        
            <!-- Main Content -->
            <div class="flex flex-col lg:flex-row flex-1 md:px-12 lg:px-0">
                @include('landing-page.profile')
        
                <!-- content Card -->
                <main data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" class="flex-1 bg-white shadow-md rounded-r-lg px-4 py-12 md:p-6 my-8 items-center justify-center text-left lg:overflow-y-auto">
                    @yield('content')
                </main>
            </div>
        </div>   
        
        <!-- AOS JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
            AOS.init();
        </script>
        
    </body>
</html>