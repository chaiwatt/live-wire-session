<?php

namespace App\Livewire;

use App\Models\AddOn;
use Livewire\Component;

class AddOnSelection extends Component
{
    public $addOns;
    public function mount()
    {
        $this->addOns = AddOn::all();
    }
    public function selectAddOn($addOnId)
    {
        session(['add-on-selection-session' => [
            'add_on_id' => $addOnId
        ]]);

        // เปลี่ยนเส้นทางไปยังหน้าถัดไป
        return $this->redirect(route('payment'), navigate: true);
        // return redirect()->route('payment');
    }
    public function render()
    {
        return view('livewire.add-on-selection');
    }
}
