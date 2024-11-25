<?php

namespace App\Livewire\Pages;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Visiting - ICRAN 2025')]
class Venue extends Component
{
    public function render()
    {
        return view('livewire.pages.venue');
    }
}
