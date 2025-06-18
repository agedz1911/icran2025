<?php

namespace App\Filament\Resources\SchedulePdfResource\Pages;

use App\Filament\Resources\SchedulePdfResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSchedulePdfs extends ListRecords
{
    protected static string $resource = SchedulePdfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
