<?php

namespace App\Livewire\Resources;

use App\Models\SchedulePdf;
use App\Models\ScheduleSession;
use App\Models\ScientificSchedule;
use Livewire\Component;

class Schedule extends Component
{
        public function render()
        {
            $files = SchedulePdf::all();
            // $schedules = ScientificSchedule::all();
            // return view('livewire.resources.schedule', [ 'schedules' => $schedules]);
            $sesis = ScheduleSession::all();
            return view('livewire.resources.schedule', [ 
                'sesis' => $sesis,
                'files' => $files
            ]);
        }
}
