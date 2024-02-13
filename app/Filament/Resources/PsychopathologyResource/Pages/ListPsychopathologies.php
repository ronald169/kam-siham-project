<?php

namespace App\Filament\Resources\PsychopathologyResource\Pages;

use App\Filament\Resources\PsychopathologyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPsychopathologies extends ListRecords
{
    protected static string $resource = PsychopathologyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
