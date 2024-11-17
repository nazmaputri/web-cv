@foreach ($profile as $profileItem)
    <!-- Profile Card -->
    <div class="flex flex-col w-full lg:w-1/3 h-full bg-white shadow-md lg:rounded-l-xl">
        {{-- image --}}
        <div class="w-full h-3/5 md:h-2/3">
            <img src="{{ asset('storage/' . $profileItem->foto) }}" alt="" class="w-full h-full object-cover md:rounded-tl-xl">
        </div>
        {{-- name & button --}}
        <div class="w-full text-center md:py-2 py-8">
            <div class="space-y-3 py-2">
                <div class="text-center">
                    <h1 class="text-3xl font-bold text-gray-800"> {{ $profileItem->nama }}</h1>
                    <p class="typing text-sky-700 font-medium italic"> {{ $experience->pekerjaan }}</p>
                </div>
                <div class="flex justify-center space-x-4">
                    <!-- Facebook -->
                    <a href="{{ $profileItem->facebook ?? '#' }}" target="{{ $profileItem->facebook ? '_blank' : '' }}" class="text-gray-600 hover:text-blue-600 hover:scale-110 duration-300">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                
                    <!-- LinkedIn -->
                    <a href="{{ $profileItem->linkedin ?? '#' }}" target="{{ $profileItem->linkedin ? '_blank' : '' }}" class="text-gray-600 hover:text-blue-600 hover:scale-110 duration-300">
                        <i class="fab fa-linkedin fa-lg"></i>
                    </a>
                
                    <!-- WhatsApp -->
                    <a href="{{ $profileItem->whatsapp ?? '#' }}" target="{{ $profileItem->whatsapp ? '_blank' : '' }}" class="text-gray-600 hover:text-green-600 hover:scale-110 duration-300">
                        <i class="fab fa-whatsapp fa-lg"></i>
                    </a>
                
                    <!-- Twitter -->
                    <a href="{{ $profileItem->twitter ?? '#' }}" target="{{ $profileItem->twitter ? '_blank' : '' }}" class="text-gray-600 hover:text-blue-600 hover:scale-110 duration-300">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                
                    <!-- YouTube -->
                    <a href="{{ $profileItem->youtube ?? '#' }}" target="{{ $profileItem->youtube ? '_blank' : '' }}" class="text-gray-600 hover:text-red-600 hover:scale-110 duration-300">
                        <i class="fab fa-youtube fa-lg"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="{{ $profileItem->instagram ?? '#' }}" target="{{ $profileItem->instagram ? '_blank' : '' }}" class="text-gray-600 hover:text-orange-600 hover:scale-110 duration-300">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                </div>
                
                </div>
            </div>
        <div class="flex border-t border-gray-300 text-xs">
            <!-- Tombol Unduh CV -->
            <a href="{{ route('download.cv') }}"" class="flex-1 py-4 text-gray-700 hover:text-sky-700 font-semibold hover:bg-gray-100 text-center border-r border-gray-200 hover:-translate-y-1 duration-300">
                DOWNLOAD CV <i class="fas fa-download ml-2"></i>
            </a>
            
            <!-- Tombol Kontak -->
            <button class="flex-1 py-4 text-gray-700 hover:text-sky-700 font-semibold hover:bg-gray-100 hover:-translate-y-1 text-center border-l border-gray-200 duration-300">
                CONTACT ME <i class="fas fa-phone ml-2"></i>
            </button>
        </div>                     
    </div>
@endforeach
