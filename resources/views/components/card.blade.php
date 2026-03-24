@props(['title', 'price', 'location', 'rating'])

<div class="group bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex flex-col sm:flex-row gap-5 hover:shadow-md transition-shadow duration-300 mb-4">
    <!-- Image avec aspect ratio fixe -->
    <div class="relative w-full sm:w-40 h-32 shrink-0 overflow-hidden rounded-xl bg-gray-100">
        <img src="https://via.placeholder.com" 
             alt="{{ $title }}"
             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
    </div>

    <!-- Contenu -->
    <div class="flex-1 flex flex-col justify-between">
        <div>
            <div class="flex justify-between items-start gap-2">
                <h2 class="font-bold text-gray-900 text-lg leading-tight line-clamp-1">{{ $title }}</h2>
                <div class="text-right shrink-0">
                    <span class="text-blue-600 font-extrabold text-xl">
                        {{ number_format((float) $price, 0, ',', ' ') }}
                    </span>
                    <span class="text-blue-600 text-xs font-semibold ml-0.5">MAD</span>
                </div>
            </div>

            <div class="flex items-center gap-1 text-sm text-gray-500 mt-1">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                {{ $location }}
            </div>
        </div>

        <div class="flex items-center justify-between mt-4">
            <!-- Rating -->
            <div class="flex items-center gap-1.5">
                <div class="flex items-center bg-yellow-50 text-yellow-700 px-2 py-1 rounded-lg border border-yellow-100">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <span class="ml-1 text-xs font-bold">{{ $rating }}</span>
                </div>
                <span class="text-xs text-gray-400 font-medium">Avis clients</span>
            </div>

            <!-- CTA -->
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-xl text-sm transition-colors shadow-sm active:scale-95">
                Voir l'offre
            </button>
        </div>
    </div>
</div>
