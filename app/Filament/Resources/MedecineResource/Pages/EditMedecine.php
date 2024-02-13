<?php

namespace App\Filament\Resources\MedecineResource\Pages;

use App\Filament\Resources\MedecineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedecine extends EditRecord
{
    protected static string $resource = MedecineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
