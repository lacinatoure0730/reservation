<?php

namespace App\Livewire;

use App\Models\Chambre;
use Livewire\Component;

class ListChambre extends Component
{
    public function render()
    {
        return view('livewire.admin.list-chambre',['chambre' => Chambre::paginate(10)]);
    }
}
