<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Registration - ICRAN 2025')]
class Registration extends Component
{
    public function render()
    {
        return view('livewire.pages.registration');
    }
}
