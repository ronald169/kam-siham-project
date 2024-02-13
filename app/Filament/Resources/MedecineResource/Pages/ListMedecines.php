<?php

namespace App\Filament\Resources\MedecineResource\Pages;

use App\Filament\Resources\MedecineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedecines extends ListRecords
{
    protected static string $resource = MedecineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
