<?php

namespace App\Livewire;

use App\Models\Boat;
use App\Models\AddOn;
use Livewire\Component;

class Payment extends Component
{
    public $selectedDate;
    public $selectedRoute;
    public $selectedBoat;
    public $selectedAddOn;

    public function mount()
    {
        $routeSelection = session('route-selection-session', []);
        $boatSelection = session('boat-selection-session', []);
        $addOnSelection = session('add-on-selection-session', []);
        
        $this->selectedDate = $routeSelection['date'] ?? '';
        $this->selectedRoute = $routeSelection['route'] ?? '';

        if (isset($boatSelection['boat_id'])) {
            $this->selectedBoat = Boat::find($boatSelection['boat_id']);
        }
        if (isset($addOnSelection['add_on_id'])) {
            $this->selectedAddOn = AddOn::find($addOnSelection['add_on_id']);
        }
    }

    public function goHome()
    {
        session()->forget('route-selection-session');
        session()->forget('boat-selection-session');
        session()->forget('add-on-selection-session');
        return $this->redirect(route('route-selection'), navigate: true);
    }

    public function render()
    {
        return view('livewire.payment');
    }
}
