<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Scientific Program - ICRAN 2025')]
class ScientificProgram extends Component
{
    public function render()
    {
        return view('livewire.pages.scientific-program');
    }
}
