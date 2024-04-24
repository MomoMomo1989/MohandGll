<?php

namespace App\Http\Livewire;

use Livewire\Component;

// Les modèles
use App\Models\profile;
use App\Models\reservation;

class CountriesCitiesSelect extends Component
{
    public $profile_id; // L'identifiant du pays
    public $reservation_id; // L'identifiant de la ville
    public $profilReserv; // la collection de villes

    public function mount() {
        // On affecte une collection vide 
        $this->profilReserv = collect();
    }

    // Quand $country_id change, on charge les $cities de $country_id 
    public function updatedCountryId ($newValue) {
        $this->profilReserv = profile::where("country_id", $newValue)->orderBy("name")->get();
    }

    public function render()
    {
        // On récupère les pays
        $countries = Country::select("id", "name")->get();

        // On retourne la vue avec les pays
        return view('livewire.countries-cities-select', [
            'countries' => $countries
        ]);
    }
}
