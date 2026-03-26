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

@foreach($vehicules as $v)
    <x-card 
        :title="$v->marque . ' ' . $v->model" 
        :price="$v->categorie->prix_jour" 
        :location="$v->emplacement ?? 'Marrakech Aéroport'"
        rating="4.8"
    />
@endforeach


        

       
    </div>
</div>
@endsection