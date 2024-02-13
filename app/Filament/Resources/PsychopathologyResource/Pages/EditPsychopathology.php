<?php

namespace App\Filament\Resources\PsychopathologyResource\Pages;

use App\Filament\Resources\PsychopathologyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPsychopathology extends EditRecord
{
    protected static string $resource = PsychopathologyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
