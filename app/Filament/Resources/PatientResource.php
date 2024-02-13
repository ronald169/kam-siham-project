<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Filament\Resources\PatientResource\RelationManagers;
use App\Models\Patient;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Stmt\Label;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = 'FICHE INDIVIDUEL';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make(__('IDENTITE'))
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label(__('Nom et prenom'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),

                        Forms\Components\Select::make('sex')
                            ->options([
                                'homme' => 'Homme',
                                'femme' => 'Femme'
                            ])
                            ->label('Sexe')
                            ->required(),

                        Forms\Components\DatePicker::make('date_of_birth')
                            ->label(__('Date de naissance'))
                            ->maxDate(now())
                            ->required(),

                        Forms\Components\TextInput::make('place')
                            ->label(__('Lieu de naissance'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),

                        Forms\Components\Select::make('age')
                            ->label('Age')
                            ->options([
                                'moins_de_15' => 'moins de 15 ans',
                                '16_a_20' => '16 à 20 ans',
                                '21-a_25' => '21 à  25 ans',
                                '26_a_30' => ' 26 à 30 ans',
                                'plus_de_30' => 'plus de 30 ans'
                            ])
                            ->required(),

                        Forms\Components\Select::make('study_level')
                            ->label(__('Niveau d’étude '))
                            ->options([
                                'primaire' => 'Primaire',
                                'brevete' => 'Breveté ',
                                'secondaire_sans_bac' => 'Secondaire sans bac',
                                'bachelier' => 'Bachelier ',
                                'diplome_du_sup' => 'Diplômé du sup',
                            ])
                            ->required(),

                        Forms\Components\Select::make('religion')
                            ->label(__('Appartenance religieuse'))
                            ->required()
                            ->options([
                                'catholique' => 'Catholique',
                                'musulman' => 'Musulman',
                                'tj' => 'Temoin de Jehovah',
                                'evangelique' => 'Evangelique',
                                'reveil' => 'Reveil',
                                'autre' => 'Autre'
                            ]),

                        Forms\Components\TextInput::make('tribut')
                            ->label(__('Appartenance tribale'))
                            ->required()
                            ->maxLength(255),


                        Forms\Components\Select::make('order_child')
                            ->label(__('Rang dans la fraterie'))
                            ->options([
                                'premier' => 'Premier',
                                'dernier' => 'Dernier',
                                'fils_ou_fille_unique' => 'Fils ou fille unique',
                                'autre' => 'Autre'
                            ])
                            ->required(),

                        Forms\Components\Select::make('type_of_family')
                            ->label('Type de famille')
                            ->options([
                                'parents_separes' => 'Parents séparés ',
                                'divorces' => 'Divorcés',
                                'jamais_maries' => 'Jamais mariés ',
                                'famille_fonctionnelle' => 'Famille fonctionnelle',
                            ])
                            ->required(),
                ])->columns(3),

                FieldSet::make('ANTECEDENTS')
                    ->schema([
                        Forms\Components\Textarea::make('childhood')
                            ->label('Enfance')
                            ->required()
                            ->maxLength(500),

                        Forms\Components\Textarea::make('family_conflict')
                            ->label(__('Conflits familliaux majeurs'))
                            ->required()
                            ->maxLength(500),
                        Forms\Components\Textarea::make('health_problem')
                            ->label(__('Problemes de sante majeurs'))
                            ->required()
                            ->maxLength(500),
                    ]),

                FieldSet::make('RELATIONS FAMILLIALES')
                    ->schema([
                        FieldSet::make('Pere')
                            ->schema([
                                Forms\Components\TextInput::make('father_name')
                                    ->label('Nom et prenom')
                                    ->required(),
                                Forms\Components\TextInput::make('father_age')
                                    ->label('Age pere')
                                    ->numeric()
                                    ->required(),
                                Forms\Components\Select::make('father_religion')
                                    ->label('Religion')
                                    ->options([
                                        'catholique' => 'Catholique',
                                        'musulman' => 'Musulman',
                                        'tj' => 'Temoin de Jehovah',
                                        'evangelique' => 'Evangelique',
                                        'reveil' => 'Reveil',
                                        'autre' => 'Autre'
                                    ]),
                                Forms\Components\TextInput::make('father_profession')
                                    ->label('Profession')
                                    ->required(),
                                Forms\Components\TextInput::make('father_health')
                                    ->label('Etat de sante')
                                    ->required(),
                                Forms\Components\Select::make('father_level_school')
                                    ->required()
                                    ->label(__('Niveau d’étude du pere'))
                                    ->options([
                                        'primaire' => 'Primaire',
                                        'brevete' => 'Breveté ',
                                        'secondaire_sans_bac' => 'Secondaire sans bac',
                                        'bachelier' => 'Bachelier ',
                                        'diplome_du_sup' => 'Diplômé du sup',
                                    ]),
                            ]),


                        FieldSet::make('Mere')
                            ->schema([
                                Forms\Components\TextInput::make('mother_name')
                                    ->label('Nom et prenom')
                                    ->required(),
                                Forms\Components\TextInput::make('mother_age')
                                    ->label('Age mere')
                                    ->numeric()
                                    ->required(),
                                Forms\Components\Select::make('mother_religion')
                                    ->label('Religion')
                                    ->options([
                                        'catholique' => 'Catholique',
                                        'musulman' => 'Musulman',
                                        'tj' => 'Temoin de Jehovah',
                                        'evangelique' => 'Evangelique',
                                        'reveil' => 'Reveil',
                                        'autre' => 'Autre'
                                    ]),
                                Forms\Components\TextInput::make('mother_profession')
                                    ->label('Profession')
                                    ->required(),
                                Forms\Components\TextInput::make('mother_health')
                                    ->label('Etat de sante')
                                    ->required(),
                                Forms\Components\Select::make('mother_level_school')
                                    ->required()
                                    ->label(__('Niveau d’étude de la mere'))
                                    ->options([
                                        'primaire' => 'Primaire',
                                        'brevete' => 'Breveté ',
                                        'secondaire_sans_bac' => 'Secondaire sans bac',
                                        'bachelier' => 'Bachelier ',
                                        'diplome_du_sup' => 'Diplômé du sup',
                                    ]),
                            ]),

                    ])->columns(2),

                FieldSet::make('SITUATION MATRIMONIALE DES PATIENTS OU DU COUPLE')
                    ->schema([
                        Forms\Components\Select::make('relation_between_parent')
                            ->label('Nature des relations entre les parents ou le couple')
                            ->options([
                                'very_bad' => 'Tres mauvaise',
                                'bad' => 'Mauvaise',
                                'enough_good' => 'Assez bonne',
                                'good' => 'Bonnes',
                                'very_good' => 'Tres bonnes',
                            ])
                            ->required(),
                        Forms\Components\Select::make('relation_between_sibling')
                                ->label('Nature des relations anciennes et actuelles avec la fraterie')
                                ->options([
                                    'very_bad' => 'Tres mauvaise',
                                    'bad' => 'Mauvaise',
                                    'enough_good' => 'Assez bonne',
                                    'good' => 'Bonnes',
                                    'very_good' => 'Tres bonnes',
                                ])
                            ->required(),

                        Forms\Components\Select::make('privileged_relationship')
                            ->label('Relations privilegiees avec')
                            ->options([
                                'pas_de_relation_privilegie' => 'Pas de relation privilégiée',
                                'ami' => 'Ami',
                                'familier' => 'Un familier'
                            ])
                            ->required(),

                        Forms\Components\Select::make('frequency_stay_at_home_parent')
                            ->label('Frequence des parents au foyer')
                            ->options([
                                'very_absent' => 'Tres absent',
                                'absent' => 'absent',
                                'enough_present' => 'Assez present',
                                'present' => 'presents',
                                'very_present' => 'Tres present',
                            ])
                            ->required(),

                        Forms\Components\TextInput::make('number_of_child_living_at_home')
                            ->label('Nombre d\'enfants vivant à la maison')
                            ->numeric(),

                        Forms\Components\Repeater::make('children')
                            ->label('Nombre d\'enfants ou autres decedes dans la famille')
                            ->schema([
                                Forms\Components\Select::make('age_enfant')
                                    ->label(__('Age enfant'))
                                    ->options([
                                        'moins_de_15' => 'moins de 15 ans',
                                        '16_a_20' => '16 à 20 ans',
                                        '21-a_25' => '21 à  25 ans',
                                        '26_a_30' => '26 à 30 ans',
                                        'plus_de_30' => 'plus de 30 ans'

                                    ]),
                                Forms\Components\Select::make('cause_du_deces')
                                    ->options([
                                        'maladie' => 'Maladie',
                                        'accident' => 'Accident',
                                        'autre' => 'Autre'
                                    ]),
                            ]),
                        ]),

                FieldSet::make('RELATIONS SOCIALES')
                    ->schema([
                        Forms\Components\Select::make('friend_number')
                            ->label('Nombre d\'amis')
                            ->options(
                                [
                                    'pas_amis' => 'pas d’amis',
                                    '1_a_5' => '1 à 5',
                                    '5_a_10' => '5 à 10',
                                    'plus_de_10' => 'plus de 10'
                                ]
                            )
                            ->required(),
                        Forms\Components\Select::make('true_friend_number')
                            ->label('Nombres d\'amis vrai')
                            ->options(
                                [
                                    'pas_amis' => 'pas d’amis',
                                    '1_a_5' => '1 à 5',
                                    '5_a_10' => '5 à 10',
                                    'plus_de_10' => 'plus de 10'
                                ]
                            )
                            ->required(),
                        Forms\Components\Select::make('intimate_friend')
                            ->label('Nombre d\'amis intime')
                            ->options([
                                'pas_ami_intime' => 'pas d’amis intime',
                                '1_a_2' => '1 à 2',
                                'plus_de_2' => 'plus de 2'
                            ])
                            ->required(),
                        Forms\Components\Select::make('nature_of_relation')
                            ->label('Nature des relations avec l\'entourage')
                            ->required()
                            ->options([
                                'very_bad' => 'Tres mauvaise',
                                'bad' => 'Mauvaise',
                                'enough_good' => 'Assez bonne',
                                'good' => 'Bonnes',
                                'very_good' => 'Tres bonnes',
                            ]),
                        Forms\Components\TextInput::make('divertissement')
                            ->label('Distraction preferees')
                            ->required(),
                        ]),

                FieldSet::make('AUTRES')
                    ->schema([
                        Forms\Components\Textarea::make('nature_relation_with_yourself')
                            ->label('Nature des relation avec vous-memes')
                            ->required()
                            ->maxLength(500),
                        Forms\Components\Textarea::make('problem_with_you')
                            ->label('Que trouvez-vous d\'anormal en vous ?')
                            ->required()
                            ->maxLength(500),
                        Forms\Components\Textarea::make('judgment_yourself')
                            ->label('Quel jugement faites-vous de votre personne ?')
                            ->required()
                            ->maxLength(500),
                        Forms\Components\Textarea::make('what_expect_from_psychologist')
                            ->label('Qu\'attendez-vous du psychologue ?')
                            ->required()
                            ->maxLength(500),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom du patient (e)')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Enregistre par')
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('MAJ')
                    ->dateTime('d, M Y')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('sex')
                    ->label('Sexe')
                    ->options([
                        'homme' => 'Homme',
                        'femme' => 'Femme'
                    ]),

                Tables\Filters\SelectFilter::make('order_child')
                    ->label('Rang dans la  fratrie')
                    ->options([
                        'premier' => 'Premier',
                        'dernier' => 'Dernier',
                        'fils_ou_fille_unique' => 'Fils ou fille unique',
                        'autre' => 'Autre'
                    ]),

                Tables\Filters\SelectFilter::make('age')
                    ->label('Age')
                    ->options([
                        'moins_de_15' => 'moins de 15 ans',
                        '16_a_20' => '16 à 20 ans',
                        '21-a_25' => '21 à  25 ans',
                        '26_a_30' => ' 26 à 30 ans',
                        'plus_de_30' => 'plus de 30 ans'
                    ]),

                Tables\Filters\SelectFilter::make('type_of_family')
                    ->label('Type de famille')
                    ->options([
                        'parents_separes' => 'Parents séparés ',
                        'divorces' => 'Divorcés',
                        'jamais_maries' => 'Jamais mariés ',
                        'famille_fonctionnelle' => 'Famille fonctionnelle',
                    ]),

                Tables\Filters\SelectFilter::make('study_level')
                    ->label(__('Niveau d’étude '))
                    ->options([
                        'primaire' => 'Primaire',
                        'brevete' => 'Breveté ',
                        'secondaire_sans_bac' => 'Secondaire sans bac',
                        'bachelier' => 'Bachelier ',
                        'diplome_du_sup' => 'Diplômé du sup',
                    ]),

                Tables\Filters\SelectFilter::make('friend_number')
                    ->label('Nombre d\'amis')
                    ->options([
                        'pas_amis' => 'pas d’amis',
                        '1_a_5' => '1 à 5',
                        '5_a_10' => '5 à 10',
                        'plus_de_10' => 'plus de 10'
                    ]),

                Tables\Filters\SelectFilter::make('intimate_friend')
                    ->label('Nombre d\'amis intime')
                    ->options([
                        'pas_ami_intime' => 'pas d’amis  intime',
                        '1_a_2' => '1 à 2',
                        'plus_de_2' => 'plus de 2'
                    ]),

                Tables\Filters\SelectFilter::make('privileged_relationship')
                    ->label('Relations privilegiees avec')
                    ->options([
                        'pas_de_relation_privilegie' => 'Pas de relation privilégiée',
                        'ami' => 'Ami',
                        'familier' => 'Un familier'
                    ])
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Action::make('Print')
                    ->url(fn (Patient $record): string => route('patients.print', $record))
                    ->openUrlInNewTab()
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // RelationManagers\TreatmentsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'view' => Pages\ViewPatient::route('/{record}'),
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}
