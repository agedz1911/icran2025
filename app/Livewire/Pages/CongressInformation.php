<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('Congress Information - ICRAN 2025')]

class CongressInformation extends Component
{
    public function render()
    {
        return view('livewire.pages.congress-information');
    }
}
