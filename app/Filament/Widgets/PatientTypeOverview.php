<?php

namespace App\Filament\Widgets;

use App\Models\Consultation;
use App\Models\Medecine;
use App\Models\Patient;
use App\Models\Psychopathology;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientTypeOverview extends BaseWidget
{

    protected function getStats(): array
    {
        return [
            Stat::make('Toxicommainie', $c = Consultation::query()->count()),
            Stat::make('Psychopathologie', $p = Psychopathology::query()->count()),
            Stat::make('Medecines', $m = Medecine::query()->count()),
            Stat::make('Totals', $m + $c + $p),
        ];
    }
}
