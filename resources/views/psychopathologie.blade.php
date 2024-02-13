<x-app-layout>
    <div class="container mx-auto">
        <div class="text-sm">
            <h1 class="text-2xl font-medium uppercase p-4 bg-blue-50 text-blue-500">FICHE DE CONSULTATION DE PSYCHOPATHOLOGIE</h1>

            <div class="mt-4">
                <div class="flex">
                    <h3 class="font-semibold uppercase text-blue-500">Identité </h3>
                </div>
                <div class="flex  mt-2">
                    <h3 class="font-semibold mr-2"> Nom et prénom:</h3> {{ $patient->name }}
                </div>
                <div class="mt-2">
                    <h3 class="font-semibold mr-2"> Histoire de la maladie  (Début, Facteurs déclenchants, Evolution de l’état actuel):</h3>
                    <p>{{ $patient->histoire_maladie }} </p>
                </div>
            </div>

            <div class="mt-4">
                <div>
                    <h2 class="font-medium text-lg uppercase p-2 bg-blue-50 text-blue-500">EXAMEN PSYCHIATRIQUE</h2>

                    <div class="mt-2">
                        <div class="flex">
                            <h3 class="font-semibold uppercase text-blue-500">PRESENTATION </h3>
                        </div>

                            <div class="flex flex-wrap">
                                <div class="flex  mr-2">
                                    <h3 class="mr-2 font-semibold">Tenue: </h3> {{ $patient->tenue }}
                                </div>

                                <div class="flex mr-2">
                                    <h3 class="mr-2 font-semibold">Aspect physique: </h3> {{ $patient->aspect_physique }}
                                </div>

                                <div class="flex mr-2">
                                    <h3 class="mr-2 font-semibold">Mimique: </h3> {{ $patient->mimique }}
                                </div>
                            </div>

                            <div class="flex flex-wrap">
                                <div class="flex mr-2">
                                    <h3 class="mr-2 font-semibold">Démarche: </h3> {{ $patient->demarche }}
                                </div>

                                <div class="flex mr-2">
                                    <h3 class="mr-2 font-semibold">Regard: </h3> {{ $patient->regard }}
                                </div>

                                <div class="flex mr-2">
                                    <h3 class="mr-2 font-semibold">Autre: </h3> {{ $patient->autre_presentation }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Contact: </h3>
                        {{trouverValeur($patient->contact, [
                            'facile' => 'Facile',
                            'difficile' => 'Difficile',
                            'superficiel' => 'Superficiel',
                            'hyper_syntone' => 'Hyper syntone'
                        ])}}
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold uppercase text-blue-500">COMPORTEMENT </h3>

                        <div class="flex flex-wrap">
                            <div class="flex  mr-2">
                                <h3 class="mr-2 font-semibold">Agitations: </h3> {{ $patient->agitation }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Impulsions: </h3> {{ $patient->impulsions }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Stupeur: </h3> {{ $patient->stupeur }}
                            </div>

                        </div>
                        <div class="flex flex-wrap">
                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Catalepsie: </h3> {{ $patient->catalepsie }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Tics: </h3> {{ $patient->tics }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Autre: </h3> {{ $patient->autre_comportement }}
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold uppercase text-blue-500">SOMMEIL</h3>

                        <div class="flex flex-wrap">
                            <div class="flex  mr-2">
                                <h3 class="mr-2 font-semibold">Insomnie: </h3> {{ $patient->insomnie }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Somnolence diurne: </h3> {{ $patient->impulsions }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Hypersomnie: </h3> {{ $patient->stupeur }}
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">perturbation de l’activité onirique: </h3> {{ $patient->perturbation_activite_onirique }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Autre: </h3> {{ $patient->autre_sommeil }}
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold uppercase text-blue-500">CONDUITES ALIMENTAIRES</h3>

                        <div class="flex flex-wrap">
                            <div class="flex  mr-2">
                                <h3 class="mr-2 font-semibold">Restrictions alimentaires: </h3> {{ $patient->restriction_alimentaire }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Refus alimentaires: </h3> {{ $patient->refus_alimentaire }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Excès alimentaires: </h3> {{ $patient->exces_alimentaire }}
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Excès de boissons: </h3> {{ $patient->exces_boissons }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Autre: </h3> {{ $patient->autre_conduite_alimentaire }}
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold uppercase text-blue-500">COMPORTEMENT SEXUEL ET RELATIONS AMOUREUSES</h3>

                        <div class="flex flex-wrap">
                            <div class="flex  mr-2">
                                <h3 class="mr-2 font-semibold">Orientation: </h3> {{ $patient->orientation }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Fréquence: </h3> {{ $patient->frequence }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Masturbation: </h3> {{ $patient->masturbation }}
                            </div>
                        </div>

                        <div class="flex- flex-wrap">
                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Impuissance: </h3> {{ $patient->impuissance }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Autre: </h3> {{ $patient->autre_relation_sexuel_amoureuse }}
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold uppercase text-blue-500">TROUBLES DES CONDUITES SOCIALES</h3>

                        <div class="flex flex-wrap">
                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Idée suicidaire: </h3> {{ $patient->idee_cuicidaire }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">tentative de suicide: </h3> {{ $patient->tentative_suicide }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Équivalents suicidaires: </h3> {{ $patient->equivalent_suicidaire }}
                            </div>

                        </div>
                        <div class="flex flex-wrap">
                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">fugues: </h3> {{ $patient->fugues }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Vols pathologiques: </h3> {{ $patient->vol_pathologique }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Attentats aux mœurs: </h3> {{ $patient->attentat_au_moeur }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Autre: </h3> {{ $patient->autre_trouble_des_conduite_social }}
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold uppercase text-blue-500">CONDUITES ADDICCTIVES </h3>

                        <div class="flex flex-wrap">
                            <div class="flex  mr-2">
                                <h3 class="mr-2 font-semibold">Alcoolisme: </h3> {{ $patient->alcoolisme }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Tabagisme: </h3> {{ $patient->tabagisme }}
                            </div>

                            <div class="flex mr-2">
                                <h3 class="mr-2 font-semibold">Autre: </h3> {{ $patient->autres_toxicomanie }}
                            </div>
                        </div>
                    </div>

                    <div class="flex mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Troubles du langage: </h3>
                        {{trouverValeur($patient->trouble_du_langage, [
                            'logorrhee' => 'Logorrhée',
                            'mutisme' => 'Mutisme',
                            'mutacisme' => 'Mutacisme',
                            'begaiement' => 'Bégaiement',
                            'palilalie' => 'Palilalie',
                            'aphasies' => 'Aphasies'
                        ])}}
                    </div>

                    <div class="flex mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Troubles de la mémoire: </h3>
                        {{trouverValeur($patient->trouble_de_la_memoire, [
                            'deficit_mnésique'=> 'Déficit mnésique',
                            'amnésie_de_fixation'=> 'Amnésie de fixation',
                            'antéro_retrograde'=> 'Antéro-retrograde',
                            'psychogene_ou_affective'=> 'Psychogène ou affective'
                        ])}}
                    </div>

                    <div class="flex mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Troubles du cours de la pensée: </h3>
                        {{trouverValeur($patient->trouble_du_cours_de_la_pense, [
                            'tachypsychie'=> 'Tachypsychie',
                            'bradypsychie'=> 'Bradypsychie',
                            'cohérence_des_idees'=> 'Cohérence des idées',
                            'coq_a_ane'=> 'Coq à l’ane'
                        ])}}
                    </div>

                    <div class="flex mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Troubles du contenu de la pensée: </h3>
                        {{trouverValeur($patient->trouble_du_contenu_de_la_pensee, [
                            'pensee_dereelle' => 'Pensée déréelle',
                            'idees_fixes_obsedantes_delirantes_depressives' => 'Idées fixes / obsédantes / délirantes / dépressives',
                            'mythomanie' => 'Mythomanie',
                            'phobies' => 'Phobies',
                            'idees_délirantes' => 'idées délirantes'
                        ])}}
                    </div>

                    <div class="flex mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Distorsion globale de la pensée: </h3>
                        {{trouverValeur($patient->distorsion_globale_de_la_pense, [
                            'autistique' => 'Autistique',
                            'magique' => 'Magique',
                            'paralogique' => 'Paralogique',
                            'rationalisme morbide' => 'Rationalisme morbide'
                        ])}}
                    </div>

                    <div class="flex mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Troubles du jugement: </h3>
                        {{trouverValeur($patient->trouble_du_jugement, [
                            'facilitation_du_jugement' => 'Facilitation du jugement',
                            'carence_du_jugement' => 'Carence du jugement',
                            'distorsion_du_jugement' => 'Distorsion du jugement'
                        ])}}
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold uppercase text-blue-500">TROUBLES DES ACTIVITÉS PERCEPTIVES</h3>

                        <div class="flex flex-wrap space-x-1">
                            <div class="flex  mr-2">
                                <h3 class="mr-2 font-semibold">hallucinations (visulelles, auditives, etc): </h3> {{ $patient->hallucination }}
                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold uppercase text-blue-500">TROUBLES DE LA VIGILANCE / CONSCIENCE</h3>

                        <div class="flex flex-wrap">
                            <div class="flex  mr-2">
                                <h3 class="mr-2 font-semibold">Attention: </h3> {{ $patient->attention }}
                            </div>

                            <div class="flex  mr-2">
                                <h3 class="mr-2 font-semibold">Orientation temporo-spaciale: </h3> {{ $patient->orientation_temporo_spaciale }}
                            </div>

                            <div class="flex  mr-2">
                                <h3 class="mr-2 font-semibold">Hypo ou hyper vigilance: </h3> {{ $patient->hypo_hyper_vigilance }}
                            </div>

                        </div>
                        <div class="flex flex-wrap">

                            <div class="flex  mr-2">
                                <h3 class="mr-2 font-semibold"> Etats crépusculaires: </h3> {{ $patient->etats_crepusculaires }}
                            </div>

                            <div class="flex  mr-2">
                                <h3 class="mr-2 font-semibold"> Etats oniroïdes: </h3> {{ $patient->etats_oniroides }}
                            </div>

                            <div class="flex ">
                                <h3 class="mr-2 font-semibold">Etats seconds: </h3> {{ $patient->etats_seconds }}
                            </div>

                            <div class="flex ">
                                <h3 class="mr-2 font-semibold">hallucinations: </h3> {{ $patient->autre_trouble_de_vigilance }}
                            </div>
                        </div>
                    </div>

                    <div class="flex mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Trouble de l’expression des affects: </h3>
                        {{trouverValeur($patient->trouble_de_expression_des_affects, [
                            'hyperemotivite' => 'Hyperémotivité',
                            'defaut_emotivite' => 'Défaut d’émotivité',
                            'inadequation' => 'Inadéquation'
                        ])}}
                    </div>

                    <div class="flex mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Troubles de l’humeur: </h3>
                        {{trouverValeur($patient->trouble_de_humeur, [
                            'depressive' => 'Dépressive',
                            'expansive' => 'Expansive',
                            'euthymique' => 'Euthymique'
                        ])}}
                    </div>

                    <h2 class="font-medium text-lg uppercase p-2 bg-blue-50 text-blue-500 mt-4">EXAMEN PHYSIQUE</h2>

                    <div class="mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Constantes: </h3>
                        <p>{{ $patient->constante }}</p>
                    </div>

                    <div class="mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Conclusion: </h3>
                        <p>{{ $patient->etat_general }}</p>
                    </div>

                    <div class="mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Discussion diagnostique: </h3>
                        <p>{{ $patient->conclusion }}</p>
                    </div>

                    <div class="mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Bilan psychologique: </h3>
                        <p>{{ $patient->discussion_diagnostique }}</p>
                    </div>

                    <div class="mt-2 mr-2">
                        <h3 class="mr-2 font-semibold">Traitement: </h3>
                        <p>{{ $patient->traitement }}</p>
                    </div>


                    <div class="element-a-masquer w-full mt-4">
                        <h3 class=" font-semibold uppercase text-blue-500">Examen</h3>
                        <div class="flex  space-x-2 text-lg mt-2">
                            <a href="{{ downloadLink($patient->examen_caardiovasculaire) }}" target="_blank" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-1 px-2 rounded-lg">Cardiovasculaire</a>
                            <a href="{{ downloadLink($patient->examen_pulmonaire) }}" target="_blank" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-1 px-2 rounded-lg">Pulmonaire</a>
                            <a href="{{ downloadLink($patient->examen_neurologique) }}" target="_blank" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-1 px-2 rounded-lg">Neurologique</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
