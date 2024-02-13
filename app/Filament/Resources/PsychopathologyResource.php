<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PsychopathologyResource\Pages;
use App\Filament\Resources\PsychopathologyResource\RelationManagers;
use App\Filament\Resources\PsychopathologyResource\RelationManagers\TreatmentsRelationManager;
use App\Models\Psychopathology;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PsychopathologyResource extends Resource
{
    protected static ?string $model = Psychopathology::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationGroup = 'FICHE DE CONSULTATION';

    // protected static ?string $modelLabel = 'PSYCHOPATHOLOGIE';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                        ->label('Identité du patient')
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull(),

                    Forms\Components\Textarea::make('histoire_maladie')
                        ->label('Histoire de la maladie  (Début, Facteurs déclenchants, Evolution de l’état actuel)')
                        ->required()
                        ->maxLength(65535)
                        ->columnSpanFull(),
                    ]),

                Fieldset::make('EXAMEN PSYCHIATRIQUE')
                    ->schema([
                        Fieldset::make('PRESENTATION')
                            ->schema([
                                Forms\Components\TextInput::make('tenue')
                                    ->label('Tenue')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('aspect_physique')
                                    ->label('Aspect physique')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('mimique')
                                    ->label('Mimique')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('demarche')
                                    ->label('Démarche')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('regard')
                                    ->label('Regard')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('autre_presentation')
                                    ->label('Autre presentation')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                    ]),

                Fieldset::make('')
                    ->schema([
                        Forms\Components\Select::make('contact')
                            ->options([
                                'facile' => 'Facile',
                                'difficile' => 'Difficile',
                                'superficiel' => 'Superficiel',
                                'hyper_syntone' => 'Hyper syntone'
                            ])
                            ->required()
                    ]),

                Fieldset::make('COMPORTEMENT')
                    ->schema([
                        Forms\Components\TextInput::make('agitation')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('impulsions')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('stupeur')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('catalepsie')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('tics')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('autre_comportement')
                            ->required()
                            ->maxLength(255),
                    ]),

                Fieldset::make('SOMMEIL')
                    ->schema([
                        Forms\Components\TextInput::make('insomnie')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('somnolence_diurne')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('hypersomnie')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('perturbation_activite_onirique')
                            ->label('Perturbation de l’activité onirique')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('autre_sommeil')
                            ->required()
                            ->maxLength(255),
                    ]),

                Fieldset::make('CONDUITES ALIMENTAIRES')
                    ->schema([
                        Forms\Components\TextInput::make('restriction_alimentaire')
                            ->label('Restrictions alimentaires')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('refus_alimentaire')
                            ->label('Refus alimentaires')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('exces_alimentaire')
                            ->label('Excès alimentaires')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('exces_boissons')
                            ->label('Excès de boissons')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('autre_conduite_alimentaire')
                            ->label('Autre conduites alimentaires')
                            ->required()
                            ->maxLength(255),
                    ]),

                Fieldset::make('')
                    ->schema([
                        Forms\Components\TextInput::make('orientation')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('frequence')
                            ->label('Fréquence')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('masturbation')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('impuissance')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('autre_relation_sexuel_amoureuse')
                            ->required()
                            ->maxLength(255),
                    ]),

                Fieldset::make('TROUBLES DES CONDUITES SOCIALES')
                    ->schema([
                        Forms\Components\TextInput::make('idee_cuicidaire')
                            ->label('Idée suicidaire')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('tentative_suicide')
                            ->label('tentative de suicide')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('equivalent_suicidaire')
                            ->label('équivalents suicidaires')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('fugues')
                            ->label('fugues')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('vol_pathologique')
                            ->label('vols pathologiques')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('attentat_au_moeur')
                            ->label('attentats aux mœurs')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('autre_trouble_des_conduite_social')
                            ->required()
                            ->maxLength(255),
                    ]),

                Fieldset::make('TROUBLES DU LANGAGE')
                    ->schema([
                        Forms\Components\TextInput::make('alcoolisme')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('tabagisme')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('autres_toxicomanie')
                            ->label('Autres toxicomanies')
                            ->required()
                            ->maxLength(255),
                    ]),

                Fieldset::make('')
                    ->schema([
                        Forms\Components\Select::make('trouble_du_langage')
                            ->options([
                                'logorrhee' => 'Logorrhée',
                                'mutisme' => 'Mutisme',
                                'mutacisme' => 'Mutacisme',
                                'begaiement' => 'Bégaiement',
                                'palilalie' => 'Palilalie',
                                'aphasies' => 'Aphasies'
                            ])
                            ->required(),

                        Forms\Components\Select::make('trouble_de_la_memoire')
                            ->options([
                                'deficit_mnésique'=> 'Déficit mnésique',
                                'amnésie_de_fixation'=> 'Amnésie de fixation',
                                'antéro_retrograde'=> 'Antéro-retrograde',
                                'psychogene_ou_affective'=> 'Psychogène ou affective'
                            ])
                            ->required(),

                        Forms\Components\Select::make('trouble_du_cours_de_la_pense')
                            ->options([
                                'tachypsychie'=> 'Tachypsychie',
                                'bradypsychie'=> 'Bradypsychie',
                                'cohérence_des_idees'=> 'Cohérence des idées',
                                'coq_a_ane'=> 'Coq à l’ane'
                            ])
                            ->required(),

                        Forms\Components\Select::make('trouble_du_contenu_de_la_pensee')
                            ->options([
                                'pensee_dereelle' => 'Pensée déréelle',
                                'idees_fixes_obsedantes_delirantes_depressives' => 'Idées fixes / obsédantes / délirantes / dépressives',
                                'mythomanie' => 'Mythomanie',
                                'phobies' => 'Phobies',
                                'idees_délirantes' => 'idées délirantes'
                            ])
                            ->required(),

                        Forms\Components\Select::make('distorsion_globale_de_la_pense')
                            ->options([
                                'autistique' => 'Autistique',
                                'magique' => 'Magique',
                                'paralogique' => 'Paralogique',
                                'rationalisme morbide' => 'Rationalisme morbide'
                            ])
                            ->required(),

                        Forms\Components\Select::make('trouble_du_jugement')
                            ->options([
                                'facilitation_du_jugement' => 'Facilitation du jugement',
                                'carence_du_jugement' => 'Carence du jugement',
                                'distorsion_du_jugement' => 'Distorsion du jugement'
                            ])
                            ->required(),
                    ]),

                Fieldset::make('TROUBLES DES ACTIVITÉS PERCEPTIVES')
                    ->schema([
                        Forms\Components\TextInput::make('hallucination')
                            ->label('hallucinations (visulelles, auditives, etc)')
                            ->required()
                            ->maxLength(255),
                    ]),

                Fieldset::make('TROUBLES DE LA VIGILANCE /CONSCIENCE')
                    ->schema([
                        Forms\Components\TextInput::make('attention')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('orientation_temporo_spaciale')
                            ->label('Orientation temporo-spaciale')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('hypo_hyper_vigilance')
                            ->label('Hypo ou hyper vigilance')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('etats_crepusculaires')
                            ->label('Etats crépusculaires')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('etats_oniroides')
                            ->label('Etats oniroïdes')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('etats_seconds')
                            ->label('Etats seconds')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('autre_trouble_de_vigilance')
                            ->required()
                            ->maxLength(255),
                    ]),

                Fieldset::make('')
                    ->schema([
                        Forms\Components\Select::make('trouble_de_expression_des_affects')
                            ->options([
                                'hyperemotivite' => 'Hyperémotivité',
                                'defaut_emotivite' => 'Défaut d’émotivité',
                                'inadequation' => 'Inadéquation'
                            ])
                            ->required(),

                        Forms\Components\Select::make('trouble_de_humeur')
                            ->options([
                                'depressive' => 'Dépressive',
                                'expansive' => 'Expansive',
                                'euthymique' => 'Euthymique'
                            ])
                            ->required(),
                    ]),

                Fieldset::make('EXAMEN PHYSIQUE')
                    ->schema([
                        Forms\Components\TextInput::make('constante')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('etat_general')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\FileUpload::make('examen_caardiovasculaire')
                            ->preserveFilenames(),

                        Forms\Components\FileUpload::make('examen_pulmonaire')
                            ->preserveFilenames(),

                        Forms\Components\FileUpload::make('examen_neurologique')
                            ->preserveFilenames(),
                    ]),

                Fieldset::make('')
                    ->schema([
                        Forms\Components\RichEditor::make('conclusion')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),

                        Forms\Components\RichEditor::make('discussion_diagnostique')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),

                        Forms\Components\RichEditor::make('traitement')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                    ])

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
                    ->url(fn (Psychopathology $record): string => route('psycho.print', $record))
                    ->openUrlInNewTab()
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListPsychopathologies::route('/'),
            'create' => Pages\CreatePsychopathology::route('/create'),
            'view' => Pages\ViewPsychopathology::route('/{record}'),
            'edit' => Pages\EditPsychopathology::route('/{record}/edit'),
        ];
    }
}
