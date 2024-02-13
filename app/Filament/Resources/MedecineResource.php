<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedecineResource\Pages;
use App\Filament\Resources\MedecineResource\RelationManagers;
use App\Filament\Resources\MedecineResource\RelationManagers\TreatmentsRelationManager;
use App\Models\Medecine;
use Filament\Forms;
use Filament\Tables\Actions\Action;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Infolists;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedecineResource extends Resource
{
    protected static ?string $model = Medecine::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 4;

    protected static ?string $modelLabel = 'Médecine GENERALE';

    protected static ?string $navigationGroup = 'FICHE DE CONSULTATION';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Identité')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\Textarea::make('motif_de_consultation')
                    ->label('Motif de consultation')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('histoire_de_la_maladie')
                    ->label('Histoire de la maladie')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('antecedent')
                    ->label('Antécédents')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('examen_physique')
                    ->label('Examen physique')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('hypothese_diagnostique')
                    ->label('Hypothèse diagnostique')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('examen_demande')
                    ->label('Examen demandé & résultat')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Patient')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Médecin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('MAJ')
                    ->dateTime('d, M Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                Action::make('Print')
                    ->url(fn (Medecine $record): string => route('medecine.print', $record))
                    ->openUrlInNewTab()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            TreatmentsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedecines::route('/'),
            'create' => Pages\CreateMedecine::route('/create'),
            'view' => Pages\ViewMedecine::route('/{record}'),
            'edit' => Pages\EditMedecine::route('/{record}/edit'),
        ];
    }
}
