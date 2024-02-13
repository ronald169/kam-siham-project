<?php

namespace App\Filament\Resources\MedecineResource\Pages;

use App\Filament\Resources\MedecineResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMedecine extends ViewRecord
{
    protected static string $resource = MedecineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
