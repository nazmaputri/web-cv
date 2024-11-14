            <!-- Navbar -->
            <nav class="bg-white md:w-16 w-full py-2 px-4 shadow-md border-b border-gray-200 md:rounded-xl sticky top-0 md:sticky md:self-center">
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
                            <a href="/" class="block px-4 py-2 hover:bg-gray-200 hover:text-sky-800 md:rounded focus:text-sky-800 focus:border-b-4 md:focus:border-l-4 focus:border-sky-700 {{ Request::is('/') ? 'text-sky-700 border-b-4 md:border-l-4 border-sky-700 bg-gray-200' : 'hover:bg-gray-200  text-gray-600' }} duration-300"><i class="fa-solid fa-user-tie fa-lg"></i></a>
                            <a href="/lp-resume" class="block px-4 py-2 hover:bg-gray-200 hover:text-sky-800 md:rounded focus:text-sky-800 focus:border-b-4 md:focus:border-l-4 focus:border-sky-700 {{ Request::is('lp-resume') ? 'text-sky-700 border-b-4 md:border-l-4 border-sky-700 bg-gray-200' : 'hover:bg-gray-200  text-gray-600' }} duration-300"><i class="fa-solid fa-list fa-lg"></i></a>
                            <a href="/lp-certificate" class="block px-4 py-2 hover:bg-gray-200 hover:text-sky-800 md:rounded focus:text-sky-800 focus:border-b-4 md:focus:border-l-4 focus:border-sky-700 {{ Request::is('lp-certificate') ? 'text-sky-700 border-b-4 md:border-l-4 border-sky-700 bg-gray-200' : 'hover:bg-gray-200  text-gray-600' }} duration-300"><i class="fa-solid fa-suitcase fa-lg"></i></a>
                            <a href="/lp-contact" class="block px-4 py-2 hover:bg-gray-200 hover:text-sky-800 md:rounded focus:text-sky-800 focus:border-b-4 md:focus:border-l-4 focus:border-sky-700 group {{ Request::is('lp-contact') ? 'text-sky-700 border-b-4 md:border-l-4 border-sky-700 bg-gray-200' : 'hover:bg-gray-200  text-gray-600' }} duration-300"><i class="fa-solid fa-paper-plane fa-lg group-hover:skew-y-12 duration-300"></i></a>
                        </ul>
                    </div>
                </div>

            </nav>

