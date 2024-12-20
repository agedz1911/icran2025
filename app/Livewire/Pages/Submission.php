<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Submission - ICRAN 2025')]
class Submission extends Component
{
    public function render()
    {
        return view('livewire.pages.submission');
    }
}
