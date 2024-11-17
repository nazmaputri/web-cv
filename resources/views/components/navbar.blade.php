            <!-- Navbar -->
            <nav class="bg-white md:w-16 w-full py-2 px-4 shadow-md border-b border-gray-200 md:rounded-xl sticky top-0 md:fixed lg:sticky md:top-10  md:self-center">
                <div class="flex justify-between md:flex-col md:items-center">
                    {{-- @foreach ($profile as $profileItem) --}}
                    <h3 class="text-xl font-semibold text-gray-900 md:hidden">Sandi Winata</h3>
                    {{-- @endforeach --}}
                    <a href="/login" class="p-2 hover:text-yellow-700 duration-300">
                        <i class="fa-brands fa-atlassian fa-lg"></i>
                    </a>
                </div>
                <!-- Menu -->
                <div class="flex items-center text-center justify-center mx-auto p-2">
                    <div class="items-center text-center justify-center w-full" id="navbar-sticky">
                        <ul class="flex md:flex-col space-x-3 md:space-y-4 items-center justify-around md:justify-center md:space-x-0">
                            {{-- <a href="/" class="block lg:hidden px-4 py-2 hover:bg-gray-200 hover:text-sky-800 md:rounded focus:text-sky-800 focus:border-b-4 md:focus:border-l-4 focus:border-sky-700 {{ Request::is('/') ? 'text-sky-800 border-b-4 md:border-l-4 border-sky-700' : 'hover:bg-gray-200  text-gray-600' }} duration-500"><i class="fa-solid fa-house"></i></a> --}}
                            <div class="relative group inline-block">
                                <a href="/" class="block px-4 py-2 hover:bg-gray-200 hover:text-sky-800 md:rounded focus:text-sky-800 focus:border-b-4 md:focus:border-l-4 focus:border-sky-700 group {{ Request::is('/') ? 'text-sky-700 border-b-4 md:border-l-4 border-sky-700 bg-gray-200' : 'hover:bg-gray-200  text-gray-600' }} duration-300"><i class="fa-solid fa-user-tie fa-lg group-hover:scale-105 duration-300"></i></a>
                                <span class="hidden md:flex absolute left-full top-1/2 transform -translate-y-1/2 ml-2 text-sm text-white bg-sky-700 p-2 rounded opacity-0 group-hover:opacity-75 group-hover:ml-3 transition-opacity duration-300">
                                    About
                                </span>
                            </div>
                            <div class="relative group inline-block">
                                <a href="/lp-resume" class="block px-4 py-2 hover:bg-gray-200 hover:text-sky-800 md:rounded focus:text-sky-800 focus:border-b-4 md:focus:border-l-4 focus:border-sky-700 group {{ Request::is('lp-resume') ? 'text-sky-700 border-b-4 md:border-l-4 border-sky-700 bg-gray-200' : 'hover:bg-gray-200  text-gray-600' }} duration-300"><i class="fa-solid fa-list fa-lg group-hover:scale-105 duration-300"></i></a>
                                <span class="hidden md:flex absolute left-full top-1/2 transform -translate-y-1/2 ml-2 text-sm text-white bg-sky-700 p-2 rounded opacity-0 group-hover:opacity-75 group-hover:ml-3 transition-opacity duration-300">
                                    Resume
                                </span>
                            </div>
                            <div class="relative group inline-block">
                                <a href="/lp-certificate" class="block px-4 py-2 hover:bg-gray-200 hover:text-sky-800 md:rounded focus:text-sky-800 focus:border-b-4 md:focus:border-l-4 focus:border-sky-700 group {{ Request::is('lp-certificate') ? 'text-sky-700 border-b-4 md:border-l-4 border-sky-700 bg-gray-200' : 'hover:bg-gray-200  text-gray-600' }} duration-300"><i class="fa-solid fa-suitcase fa-lg group-hover:scale-105 duration-300"></i></a>
                                 <span class="hidden md:flex absolute left-full top-1/2 transform -translate-y-1/2 ml-2 text-sm text-white bg-sky-700 p-2 rounded opacity-0 group-hover:opacity-75 group-hover:ml-3 transition-opacity duration-300">
                                     Certificates
                                 </span>
                            </div>
                            <div class="relative group inline-block">
                                <a href="/lp-contact" class="block px-4 py-2 hover:bg-gray-200 hover:text-sky-800 md:rounded focus:text-sky-800 focus:border-b-4 md:focus:border-l-4 focus:border-sky-700 group {{ Request::is('lp-contact') ? 'text-sky-700 border-b-4 md:border-l-4 border-sky-700 bg-gray-200' : 'hover:bg-gray-200  text-gray-600' }} duration-300"><i class="fa-solid fa-paper-plane fa-lg group-hover:scale-105 group-hover:skew-y-12 duration-300"></i></a>
                                <span class="hidden md:flex absolute left-full top-1/2 transform -translate-y-1/2 ml-2 text-sm text-white bg-sky-700 p-2 rounded opacity-0 group-hover:opacity-75 group-hover:ml-3 transition-opacity duration-300">
                                    Contact
                                </span>
                            </div>
                        </ul>
                    </div>
                </div>

            </nav>

