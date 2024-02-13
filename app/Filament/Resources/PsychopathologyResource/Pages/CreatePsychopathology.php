<?php

namespace App\Filament\Resources\PsychopathologyResource\Pages;

use App\Filament\Resources\PsychopathologyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePsychopathology extends CreateRecord
{
    protected static string $resource = PsychopathologyResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
