<?php

namespace App\Livewire;

use App\Models\Boat;
use Livewire\Component;

class BoatSelection extends Component
{
    public $boats;
    public function mount()
    {
        $this->boats = Boat::all();
    }
    public function selectBoat($boatId)
    {
        session(['boat-selection-session' => [
            'boat_id' => $boatId
        ]]);

        // เปลี่ยนเส้นทางไปยังหน้าถัดไป
        return $this->redirect(route('add-on-selection'), navigate: true);
        // return redirect()->route('add-on-selection');
    }
    public function render()
    {
        return view('livewire.boat-selection');
    }
}
