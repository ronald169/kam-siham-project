<?php

namespace App\Filament\Resources\PsychopathologyResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TreatmentsRelationManager extends RelationManager
{
    protected static string $relationship = 'treatments';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('observation')
                    ->label('observation')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('treatment')
                    ->label('Observations cliniques & Traitement ')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->prefix('XAF')
                    ->maxValue(42949672.95),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
        ->recordTitleAttribute('observation')
        ->columns([
            Tables\Columns\TextColumn::make('observation'),
        ])
        ->filters([
            //
        ])
        ->headerActions([
            Tables\Actions\CreateAction::make(),
        ])
        ->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
            Tables\Actions\CreateAction::make()
                ->mutateFormDataUsing(function (array $data): array {
                    $data['user_id'] = auth()->id();

                    return $data;
                })
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                // Tables\Actions\DeleteBulkAction::make(),
            ]),
        ]);
    }
}
