<?php

namespace App\Filament\Resources\PsychopathologyResource\Pages;

use App\Filament\Resources\PsychopathologyResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPsychopathology extends ViewRecord
{
    protected static string $resource = PsychopathologyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
