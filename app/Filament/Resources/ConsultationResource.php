<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConsultationResource\Pages;
use App\Filament\Resources\ConsultationResource\RelationManagers;
use App\Filament\Resources\ConsultationResource\RelationManagers\TreatmentsRelationManager;
use App\Models\Consultation;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists;
use Filament\Support\Enums\FontWeight;
use Filament\Infolists\Components\Fieldset as ComponentsFieldset;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConsultationResource extends Resource
{
    protected static ?string $model = Consultation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 2;

    protected static ?string $modelLabel = 'Toxicomanies';

    protected static ?string $navigationGroup = 'FICHE DE CONSULTATION';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Histoire des conduites addictives')
                    ->schema([
                        Forms\Components\Select::make('patient_id')
                            ->label(__('Nom du patient'))
                            ->relationship('patient', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->columnSpanFull(),

                        Forms\Components\Select::make('beginning_drug_use')
                            ->label(__('Debut de la consommation des drogues'))
                            ->options([
                                'moins_de_2_ans' => 'Moins de 2 ans',
                                '2_a_5_ans' => '2 à 5 ans',
                                '5_a_10_ans' => '5 à 10 ans',
                                'plus_de_10_ans' => 'Plus de 10 ans'
                            ])
                            ->required(),

                        Forms\Components\Select::make('motivation_to_use_drug')
                            ->label('Motivation a l\'entrer dans les CA')
                            ->options([
                                'curiosite' => 'Curiosité',
                                'suivisme_des_amis' => 'Suivisme des  amis',
                                'autres' => 'Autres'
                            ])
                            ->required(),

                        Forms\Components\Select::make('current_motivation_to_use_drug')
                            ->label(__('Motivation actuelles a consommer'))
                            ->options([
                                'manque' => 'Manque',
                                'habitude' => 'Habitude',
                                'sommeil' => 'Sommeil',
                                'appetit' => 'Appétit',
                                'plaisir' => 'Plaisir',
                                'courage' => 'Courage'
                            ])
                            ->required(),

                        Forms\Components\Select::make('temps_maximal_abstinence')
                            ->label('Temps maximal d’abstinence')
                            ->options([
                                'moins_une_semaine' => 'Moins d’une semaine',
                                '1_semaine' => '1 semaine',
                                '2_a_4_semaines' => '2 à 4 semaines',
                                'plus_1_mois' => 'Plus d’un mois'
                            ])
                            ->required(),

                        Forms\Components\Select::make('try_to_stop_drop')
                            ->label('Tentative ulterieures d\'abandon')
                            ->options([
                                'jamais' => 'Jamais',
                                'une_fois' => 'Une fois',
                                'plusieurs_fois' => 'Plusieurs fois'
                            ])
                            ->required(),

                        Forms\Components\Select::make('motivation_to_stop')
                            ->label('Motivations a l\'abandon')
                            ->options([
                                'jamais' => 'Jamais',
                                'une_fois' => 'Une fois',
                                'plusieurs_fois'=> 'Plusieurs fois',
                            ])
                            ->required(),

                        Forms\Components\Select::make('type_of_drug_and_ca')
                            ->label('Type de drogues consommées')
                            ->options([
                                'cigarette' => 'Cigarette',
                                'alcool' => 'Alcool',
                                'thai' => 'Thai',
                                'caillou' => 'Caillou',
                                'tramol' => 'Tramol',
                                'autres' => 'autres'
                            ])
                            ->required(),

                        Forms\Components\Textarea::make('tolerance_and_drug_switching')
                            ->label(__('Tolerence et changements de drogues'))
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(255),
                    ]),

                FieldSet::make('Consequence de la consommation')
                    ->schema([
                        Forms\Components\Select::make('type_of_relation_with_drug')
                            ->label('Type de relation à la drogue')
                            ->options([
                                'abus' => 'abus',
                                'dependance_1'=> 'Dépendance 1',
                                'dependance_2'=> 'Dépendance 2',
                                'dependance_3'=> 'Dépendance 3'
                            ])
                            ->required(),

                        Forms\Components\Select::make('amaigrissement')
                            ->label('Amaigrissement')
                            ->options([
                                'oui_un_peu' => 'Oui un peu',
                                'beaucoup' => 'Beaucoup',
                                'non' => 'Non'
                            ])
                            ->required(),

                        Forms\Components\Select::make('teint_sombre')
                            ->label('Teint sombre')
                            ->options([
                                'oui_un_peu' => 'Oui un peu',
                                'beaucoup' => 'Beaucoup',
                                'non' => 'Non'
                            ])
                            ->required(),

                        Forms\Components\Select::make('insomnie_de_manque')
                            ->label('Insomnie de manque')
                            ->options([
                                'oui_un_peu' => 'Oui un peu',
                                'beaucoup' => 'Beaucoup',
                                'non' => 'Non'
                            ])
                            ->required(),

                        Forms\Components\Select::make('cauchemars')
                            ->label('Cauchemars')
                            ->options([
                                'oui_un_peu' => 'Oui un peu',
                                'beaucoup' => 'Beaucoup',
                                'non' => 'Non'
                            ])
                            ->required(),

                        Forms\Components\Select::make('hallucination')
                            ->label('Hallucination')
                            ->options([
                                'oui_un_peu' => 'Oui un peu',
                                'beaucoup' => 'Beaucoup',
                                'non' => 'Non'
                            ])
                            ->required(),

                        Forms\Components\Select::make('trouble_somatique')
                            ->label('Troubles somatiques (tremblements)')
                            ->options([
                                'oui_un_peu' => 'Oui un peu',
                                'beaucoup' => 'Beaucoup',
                                'non' => 'Non'
                            ])
                            ->required(),

                        Forms\Components\Select::make('delire_trouble_du_comportement')
                            ->label('Délire et autre troubles du comportement')
                            ->options([
                                'oui_un_peu' => 'Oui un peu',
                                'beaucoup' => 'Beaucoup',
                                'non' => 'Non'
                            ])
                            ->required(),

                        Forms\Components\Select::make('probleme_avec_loi')
                            ->label('Problème avec la loi')
                            ->options([
                                'cellule' => 'Cellule',
                                'prison' => 'Prison',
                                'jamais' => 'Jamais '
                            ])
                            ->required(),

                        Forms\Components\Select::make('epanouissement_affectif')
                            ->label('Epanouissement affectif')
                            ->options([
                                'oui_un_peu' => 'Oui un peu',
                                'beaucoup' => 'Beaucoup',
                                'non' => 'Non'
                            ])
                            ->required(),

                        Forms\Components\Select::make('epanouissement_sexuel')
                            ->label('Epanouissement sexuel')
                            ->options([
                                'oui_un_peu' => 'Oui un peu',
                                'beaucoup' => 'Beaucoup',
                                'non' => 'Non'
                            ])
                            ->required(),

                    ]),


                FieldSet::make('Evaluation de la consommation et de la dependance')
                    ->schema([

                        Forms\Components\TextInput::make('frequency_and_consumption')
                            ->label('Frequence et mode de consommation')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('investment_in_ca')
                            ->label('Investissement dans les CA')
                            ->required()
                            ->maxLength(255),
                    ]),

                FieldSet::make('Tableau clinique')
                    ->schema([
                        Forms\Components\TextInput::make('general_state')
                            ->label('Etat general')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('respiratory_sign')
                            ->label('Signes respiratoires')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('neurology_sign')
                            ->label('Signes neurologiques')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('psychiatric_disorder')
                            ->label('Psychiatriques')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('other')
                            ->label('Autre')
                            ->required()
                            ->maxLength(255),
                    ]),

                FieldSet::make('Antecedents')
                    ->schema([
                        Forms\Components\TextInput::make('medical_surgical')
                            ->label('Medicaux/Chirugicaux')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('allergic')
                            ->label('Allergologiques')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('psychiatric')
                            ->label('Psychatriques')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('traumatologies')
                            ->label('Traumatologiques')
                            ->required()
                            ->maxLength(255),
                    ]),

                FieldSet::make('Bilan')
                    ->schema([
                        Forms\Components\FileUpload::make('psychology_assessment')
                            ->preserveFilenames()
                            ->label('Bilan psychologique'),

                        Forms\Components\FileUpload::make('biology_assessment')
                            ->preserveFilenames()
                            ->label('Bilan biologique'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('patient.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('patient.user.name')
                    ->label('Médecin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('MAJ')
                    ->dateTime('d, M Y')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('beginning_drug_use')
                    ->label(__('Debut de la consommation des drogues'))
                    ->options([
                        'moins_de_2_ans' => 'Moins de 2 ans',
                        '2_a_5_ans' => '2 à 5 ans',
                        '5_a_10_ans' => '5 à 10 ans',
                        'plus_de_10_ans' => 'Plus de 10 ans'
                    ]),

                Tables\Filters\SelectFilter::make('motivation_to_use_drug')
                    ->label('Motivation a l\'entrer dans les CA')
                    ->options([
                        'curiosite' => 'Curiosité',
                        'suivisme_des_amis' => 'Suivisme des  amis',
                        'autres' => 'Autres'
                    ]),

                Tables\Filters\SelectFilter::make('current_motivation_to_use_drug')
                    ->label(__('Motivation actuelles a consommer'))
                    ->options([
                        'manque' => 'Manque',
                        'habitude' => 'Habitude',
                        'sommeil' => 'Sommeil',
                        'appetit' => 'Appétit',
                        'plaisir' => 'Plaisir',
                        'courage' => 'Courage'
                    ]),

                Tables\Filters\SelectFilter::make('temps_maximal_abstinence')
                    ->label('Temps maximal d’abstinence')
                    ->options([
                        'moins_une_semaine' => 'Moins d’une semaine',
                        '1_semaine' => '1 semaine',
                        '2_a_4_semaines' => '2 à 4 semaines',
                        'plus_1_mois' => 'Plus d’un mois'
                    ]),

                Tables\Filters\SelectFilter::make('try_to_stop_drop')
                    ->label('Tentative ulterieures d\'abandon')
                    ->options([
                        'jamais' => 'Jamais',
                        'une_fois' => 'Une fois',
                        'plusieurs_fois' => 'Plusieurs fois'
                    ]),

                Tables\Filters\SelectFilter::make('motivation_to_stop')
                    ->label('Motivations a l\'abandon')
                    ->options([
                        'jamais' => 'Jamais',
                        'une_fois' => 'Une fois',
                        'plusieurs_fois'=> 'Plusieurs fois',
                    ]),

                Tables\Filters\SelectFilter::make('type_of_drug_and_ca')
                    ->label('Type de drogues consommées')
                    ->options([
                        'cigarette' => 'Cigarette',
                        'alcool' => 'Alcool',
                        'thai' => 'Thai',
                        'caillou' => 'Caillou',
                        'tramol' => 'Tramol',
                        'autres' => 'autres'
                    ]),

                Tables\Filters\SelectFilter::make('type_of_relation_with_drug')
                    ->label('Type de relation à la drogue')
                    ->options([
                        'abus' => 'abus',
                        'dependance_1'=> 'Dépendance 1',
                        'dependance_2'=> 'Dépendance 2',
                        'dependance_3'=> 'Dépendance 3'
                    ]),

                Tables\Filters\SelectFilter::make('probleme_avec_loi')
                    ->label('Problème avec la loi')
                    ->options([
                        'cellule' => 'Cellule',
                        'prison' => 'Prison',
                        'jamais' => 'Jamais '
                    ]),

                Tables\Filters\SelectFilter::make('epanouissement_affectif')
                    ->label('Epanouissement affectif')
                    ->options([
                        'oui_un_peu' => 'Oui un peu',
                        'beaucoup' => 'Beaucoup',
                        'non' => 'Non'
                    ]),

                Tables\Filters\SelectFilter::make('epanouissement_sexuel')
                    ->label('Epanouissement sexuel')
                    ->options([
                        'oui_un_peu' => 'Oui un peu',
                        'beaucoup' => 'Beaucoup',
                        'non' => 'Non'
                    ])
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Action::make('Print')
                    ->url(fn (Consultation $record): string => route('consultation.print', $record))
                    ->openUrlInNewTab()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListConsultations::route('/'),
            'create' => Pages\CreateConsultation::route('/create'),
            'view' => Pages\ViewConsultation::route('/{record}'),
            'edit' => Pages\EditConsultation::route('/{record}/edit'),
        ];
    }
}
