<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems = [];

    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'Fiche individuelle', 'href' => 'filament.admin.resources.patients.index'],
            ['label' => 'Toxicomanies', 'href' => 'filament.admin.resources.consultations.index'],
            ['label' => 'Médecine générale', 'href' => 'filament.admin.resources.medecines.index'],
            ['label' => 'Psychopathologies', 'href' => 'filament.admin.resources.psychopathologies.index'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.navbar');
    }
}
