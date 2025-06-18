<?php

namespace App\Filament\Resources\SchedulePdfResource\Pages;

use App\Filament\Resources\SchedulePdfResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSchedulePdf extends CreateRecord
{
    protected static string $resource = SchedulePdfResource::class;
}
