<?php

namespace App\Livewire;

use App\Models\Boat;
use Livewire\Component;
use App\Models\BoatRoute;
use Livewire\Attributes\Rule;

class RouteSelection extends Component
{
    public $selectedDate;
    public $selectedRoute;

    public function mount()
    {
        $this->selectedDate = "11/12/2024";
        $this->selectedRoute = "Phuket";
    }

    public function render()
    {
        return view('livewire.route-selection');
    }

    public function selectRoute()
    {
        session(['route-selection-session' => [
            'date' => $this->selectedDate, 
            'route' => $this->selectedRoute
            ]
        ]);
        return $this->redirect(route('boat-selection'), navigate: true);
        // return redirect()->route('boat-selection');
    }
}
