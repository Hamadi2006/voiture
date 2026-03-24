<div class="w-full lg:w-1/4 bg-white p-6 rounded-3xl shadow-sm border border-gray-100 self-start">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="font-bold text-gray-900 text-xl italic leading-none">Filtres</h2>
        <button class="text-blue-600 hover:text-blue-800 text-xs font-semibold underline decoration-2 underline-offset-4 transition-colors">
            Réinitialiser
        </button>
    </div>

    <!-- Section: Emplacement -->
    <div class="mb-8">
        <h3 class="font-bold text-gray-800 mb-4 text-sm uppercase tracking-wider">Emplacement (Marrakech)</h3>
        <div class="space-y-3">
            @foreach ([
                'Aéroport (terminal)',
                'Aéroport (accueil)',
                'Aéroport (navette)',
                'Aéroport (centre location)',
                'Gare ferroviaire',
                'Autres agences'
            ] as $item)
                <label class="flex items-center group cursor-pointer">
                    <div class="relative flex items-center">
                        <input type="checkbox" class="peer h-5 w-5 cursor-pointer appearance-none rounded border border-gray-300 checked:bg-blue-600 checked:border-blue-600 transition-all">
                        <svg class="absolute w-3.5 h-3.5 text-white opacity-0 peer-checked:opacity-100 pointer-events-none left-1/2 -translate-x-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <span class="ml-3 text-sm text-gray-600 group-hover:text-gray-900 transition-colors">{{ $item }}</span>
                </label>
            @endforeach
        </div>
    </div>

    <!-- Section: Spécificités -->
    <div class="mb-8 pt-6 border-t border-gray-100">
        <h3 class="font-bold text-gray-800 mb-4 text-sm uppercase tracking-wider">Véhicule</h3>
        <div class="space-y-3">
            @foreach(['Climatisation', '4+ portes'] as $spec)
            <label class="flex items-center group cursor-pointer">
                <input type="checkbox" class="h-5 w-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500 transition-all cursor-pointer">
                <span class="ml-3 text-sm text-gray-600 group-hover:text-gray-900">{{ $spec }}</span>
            </label>
            @endforeach
        </div>
    </div>

    <!-- Section: Motorisation (Style Badge/Tag) -->
    <div class="mb-8 pt-6 border-t border-gray-100">
        <h3 class="font-bold text-gray-800 mb-4 text-sm uppercase tracking-wider">Énergie</h3>
        <div class="grid grid-cols-1 gap-2">
            @foreach(['100% Électrique', 'Hybride', 'Hybride rechargeable'] as $energy)
            <label class="relative flex items-center p-2 rounded-xl border border-gray-100 hover:bg-blue-50 hover:border-blue-100 cursor-pointer transition-all">
                <input type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                <span class="ml-3 text-xs font-medium text-gray-700">{{ $energy }}</span>
            </label>
            @endforeach
        </div>
    </div>

    <!-- Section: Kilométrage -->
    <div class="pt-6 border-t border-gray-100">
        <h3 class="font-bold text-gray-800 mb-4 text-sm uppercase tracking-wider">Kilométrage</h3>
        <div class="flex flex-wrap gap-2">
            <label class="flex-1">
                <input type="radio" name="km" class="hidden peer">
                <div class="text-center p-2 rounded-lg border border-gray-200 peer-checked:border-blue-600 peer-checked:bg-blue-50 peer-checked:text-blue-600 text-xs font-bold cursor-pointer transition-all">Limité</div>
            </label>
            <label class="flex-1">
                <input type="radio" name="km" class="hidden peer" checked>
                <div class="text-center p-2 rounded-lg border border-gray-200 peer-checked:border-blue-600 peer-checked:bg-blue-50 peer-checked:text-blue-600 text-xs font-bold cursor-pointer transition-all">Illimité</div>
            </label>
        </div>
    </div>
</div>
