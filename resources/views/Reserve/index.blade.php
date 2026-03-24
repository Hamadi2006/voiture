@extends('layout')

@section('content')
<div class="container mx-auto p-6 flex gap-6">
    <x-sidebar />

    <div class="w-3/4">
        <div class="flex justify-end mb-4">
            <select class="border rounded-lg p-2 text-sm">
                <option>Recommandé</option>
                <option>Prix croissant</option>
                <option>Prix décroissant</option>
            </select>
        </div>

        <x-card 
            title="Hyundai i10"
            price="594,38"
            location="Marrakech Aéroport"
            rating="5.5" />

        <x-card 
            title="Fiat Panda"
            price="719,49"
            location="Marrakech Ville"
            rating="8.9" />
    </div>
</div>
@endsection