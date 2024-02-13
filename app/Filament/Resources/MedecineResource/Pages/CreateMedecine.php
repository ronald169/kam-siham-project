<?php

namespace App\Filament\Resources\MedecineResource\Pages;

use App\Filament\Resources\MedecineResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMedecine extends CreateRecord
{
    protected static string $resource = MedecineResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
