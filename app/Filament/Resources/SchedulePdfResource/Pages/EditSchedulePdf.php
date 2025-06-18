<?php

namespace App\Filament\Resources\SchedulePdfResource\Pages;

use App\Filament\Resources\SchedulePdfResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSchedulePdf extends EditRecord
{
    protected static string $resource = SchedulePdfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
