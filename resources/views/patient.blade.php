<x-app-layout>
        <div class="container mx-auto">
            <div class="text-sm">
                <h1 class="text-2xl font-medium uppercase p-4 bg-blue-50 text-blue-500">FICHE Individuelle</h1>

                {{-- Identite sectrion start --}}
                <div class="mt-4">
                    <div class="flex">
                        <h3 class="font-semibold uppercase text-blue-500">Identité </h3>
                    </div>
                    <div class="mt-2 flex flex-wrap">
                        <div class="flex  mr-2">
                            <h3 class="font-semibold mr-2"> Nom et prénom:</h3> {{ $patient->name }}
                        </div>
                        <div class="flex ">
                            <h3 class="font-semibold mr-2"> Sexe:</h3> {{ $patient->sex }}
                        </div>
                    </div>

                    <div class="mt-2 flex flex-wrap space-x-4">
                        <div class="flex mr-2">
                            <h3 class="font-semibold mr-2"> Date de naissance:</h3> {{ $patient->date_of_birth }}
                        </div>
                        <div class="flex  mr-2">
                            <h3 class="font-semibold mr-2"> Lieu de naissance:</h3> {{ $patient->place }}
                        </div>

                        <div class="flex  mr-2">
                            <h3 class="font-semibold mr-2"> Age:</h3> {{ trouverValeur($patient->age, [
                                'moins_de_15' => 'moins de 15 ans',
                                '16_a_20' => '16 à 20 ans',
                                '21-a_25' => '21 à  25 ans',
                                '26_a_30' => ' 26 à 30 ans',
                                'plus_de_30' => 'plus de 30 ans'
                            ]) }}
                        </div>
                    </div>


                    <div class="mt-2 flex flex-wrap">
                        <div class="flex mr-2">
                            <h3 class="font-semibold mr-2"> Niveau d’étude:</h3> {{ trouverValeur($patient->study_level, [
                                'primaire' => 'Primaire',
                                'brevete' => 'Breveté ',
                                'secondaire_sans_bac' => 'Secondaire sans bac',
                                'bachelier' => 'Bachelier ',
                                'diplome_du_sup' => 'Diplômé du sup',
                            ]) }}
                        </div>

                        <div class="flex  mr-2">
                            <h3 class="font-semibold mr-2"> Appartenance religieuse:</h3> {{ $patient->religion }}
                        </div>

                        <div class="flex  mr-2">
                            <h3 class="font-semibold mr-2"> Appartenance tribale:</h3> {{ $patient->sex }}
                        </div>

                    </div>

                    <div class="mt-2 flex">
                        <div class="flex  mr-2">
                            <h3 class="font-semibold mr-2">Type de famille:</h3> {{ trouverValeur($patient->type_of_family, [
                                'parents_separes' => 'Parents séparés ',
                                'divorces' => 'Divorcés',
                                'jamais_maries' => 'Jamais mariés ',
                                'famille_fonctionnelle' => 'Famille fonctionnelle',
                            ]) }}
                        </div>

                        <div class="flex  mr-2">
                            <h3 class="font-semibold mr-2">Rang dans la fraterie:</h3> {{ trouverValeur($patient->order_child, [
                                'premier' => 'Premier',
                                'dernier' => 'Dernier',
                                'fils_ou_fille_unique' => 'Fils ou fille unique',
                                'autre' => 'Autre'
                            ]) }}
                        </div>
                    </div>
                </div>
                {{-- Identite section end --}}


                {{-- Antecedent Section Start --}}
                <div class="mt-4">
                    <div class="flex">
                        <h3 class="mr-1 font-semibold uppercase text-blue-500">ANTECEDENTS </h3>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold mr-2"> Enfance:</h3>
                        <p>{{ $patient->childhood }} </p>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold mr-2"> Conflits familliaux majeurs:</h3>
                        <p>{{ $patient->family_conflict }} </p>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold mr-2"> Problemes de sante majeurs:</h3>
                        <p>{{ $patient->health_problem }} </p>
                    </div>
                </div>
                {{-- Antecedent section end --}}


                {{-- Relation familliale section start --}}
                <div class="mt-4">
                    <div class="flex">
                        <h3 class="mr-1 font-semibold uppercase text-blue-500">RELATIONS FAMILLIALES </h3>
                    </div>

                    <div class="mt-2">
                        <div class="flex flex-wrap">
                            <div class="flex mr-2">
                                <h3 class="font-semibold mr-2"> Nom et prénom du père:</h3> {{ $patient->father_name }}
                            </div>
                            <div class="flex  mr-2">
                                <h3 class="font-semibold mr-2"> Age:</h3> {{ $patient->father_age }}
                            </div>
                            <div class="flex  mr-2">
                                <h3 class="font-semibold mr-2"> Profession:</h3> {{ $patient->father_profession }}
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="flex mr-2">
                                <h3 class="font-semibold mr-2"> Niveau d’étude du père:</h3> {{ $patient->father_level_school }}
                            </div>
                            <div class="flex  mr-2">
                                <h3 class="font-semibold mr-2"> État de santé:</h3> {{ $patient->father_health }}
                            </div>
                            <div class="flex  mr-2">
                                <h3 class="font-semibold mr-2"> Religion:</h3> {{ $patient->father_religion }}
                            </div>
                        </div>

                        <div class="flex flex-wrap mt-2">
                            <div class="flex mr-2">
                                <h3 class="font-semibold mr-2"> Nom et prénom la mère:</h3> {{ $patient->mother_name }}
                            </div>
                            <div class="flex  mr-2">
                                <h3 class="font-semibold mr-2"> Age:</h3> {{ $patient->mother_age }}
                            </div>
                            <div class="flex  mr-2">
                                <h3 class="font-semibold mr-2"> Profession:</h3> {{ $patient->mother_profession }}
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="flex mr-2">
                                <h3 class="font-semibold mr-2"> Niveau d’étude la mère:</h3> {{ $patient->mother_level_school }}
                            </div>
                            <div class="flex  mr-2">
                                <h3 class="font-semibold mr-2"> État de santé:</h3> {{ $patient->mother_health }}
                            </div>
                            <div class="flex  mr-2">
                                <h3 class="font-semibold mr-2"> Religion:</h3> {{ $patient->mother_religion }}
                            </div>
                        </div>

                    </div>
                </div>
                {{-- Relation familliale section End --}}


                {{-- Matrimonial section start --}}
                <div class="mt-4">
                    <div class="flex">
                        <h3 class="mr-1 font-semibold uppercase text-blue-500">SITUATION MATRIMONIALE DES PATIENTS OU DU COUPLE</h3>
                    </div>

                    <div class="flex  mr-2">
                        <h3 class="font-semibold mr-2">Nature des relations entre les parents ou le couple:</h3> {{ trouverValeur($patient->relation_between_parent, [
                            'very_bad' => 'Tres mauvaise',
                            'bad' => 'Mauvaise',
                            'enough_good' => 'Assez bonne',
                            'good' => 'Bonnes',
                            'very_good' => 'Tres bonnes',
                        ]) }}
                    </div>

                    <div class="flex  mr-2">
                        <h3 class="font-semibold mr-2">Nature des relations anciennes et actuelles avec la fraterie:</h3> {{ trouverValeur($patient->relation_between_sibling, [
                            'very_bad' => 'Tres mauvaise',
                            'bad' => 'Mauvaise',
                            'enough_good' => 'Assez bonne',
                            'good' => 'Bonnes',
                            'very_good' => 'Tres bonnes',
                        ]) }}
                    </div>

                    <div class="flex  mr-2">
                        <h3 class="font-semibold mr-2">Relations privilegiees avec:</h3> {{ trouverValeur($patient->privileged_relationship, [
                            'pas_de_relation_privilegie' => 'Pas de relation privilégiée',
                            'ami' => 'Ami',
                            'familier' => 'Un familier'
                        ]) }}
                    </div>

                    <div class="flex  mr-2">
                        <h3 class="font-semibold mr-2">Relations privilegiees avec:</h3> {{ trouverValeur($patient->frequency_stay_at_home_parent, [
                            'very_absent' => 'Tres absent',
                            'absent' => 'Absent',
                            'enough_present' => 'Assez present',
                            'present' => 'Presents',
                            'very_present' => 'Tres present',
                        ]) }}
                    </div>

                    <div class="flex  mr-2">
                        <h3 class="font-semibold mr-2"> Nombre d'enfants vivant à la maison:</h3> {{ $patient->number_of_child_living_at_home }}
                    </div>

                    <div class="flex  mr-2">
                        <h3 class="font-semibold mr-2"> Nombre d'enfants ou autres personnes décédées dans la famille:</h3> {{ $patient->children }}
                    </div>
                </div>
                {{-- Matrimonial section End --}}

                {{-- Relation social section start --}}
                <div class="mt-4">
                    <div class="flex">
                        <h3 class="mr-1 font-semibold uppercase text-blue-500">RELATIONS SOCIALES</h3>
                    </div>

                    <div class="flex  mr-2">
                        <h3 class="font-semibold mr-2">Nombre d'amis:</h3> {{ trouverValeur($patient->friend_number, [
                            'pas_amis' => 'pas d’amis',
                            '1_a_5' => '1 à 5',
                            '5_a_10' => '5 à 10',
                            'plus_de_10' => 'plus de 10'
                        ]) }}
                    </div>

                    <div class="flex  mr-2">
                        <h3 class="font-semibold mr-2">Nombres d'amis vrai:</h3> {{ trouverValeur($patient->true_friend_number, [
                            'pas_amis' => 'pas d’amis',
                            '1_a_5' => '1 à 5',
                            '5_a_10' => '5 à 10',
                            'plus_de_10' => 'plus de 10'
                        ]) }}
                    </div>

                    <div class="flex  mr-2">
                        <h3 class="font-semibold mr-2">Nombre d'amis intime:</h3> {{ trouverValeur($patient->intimate_friend, [
                            'pas_ami_intime' => 'pas d’amis intime',
                            '1_a_2' => '1 à 2',
                            'plus_de_2' => 'plus de 2'
                        ]) }}
                    </div>

                    <div class="flex  mr-2">
                        <h3 class="font-semibold mr-2">Nature des relations avec l'entourage:</h3> {{ trouverValeur($patient->nature_of_relation, [
                            'very_bad' => 'Tres mauvaise',
                            'bad' => 'Mauvaise',
                            'enough_good' => 'Assez bonne',
                            'good' => 'Bonnes',
                            'very_good' => 'Tres bonnes',
                        ]) }}
                    </div>

                    <div class="flex  mr-2">
                        <h3 class="font-semibold mr-2"> Distraction Favorites:</h3> {{ $patient->divertissement }}
                    </div>
                </div>
                {{-- Relation secial section end --}}


                {{-- AUTRES section start --}}
                <div class="mt-4">
                    <div class="flex">
                        <h3 class="mr-1 font-semibold uppercase text-blue-500">AUTRES</h3>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold mr-2"> Nature des relation avec vous-memes:</h3>
                        <p>{{ $patient->nature_relation_with_yourself }} </p>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold mr-2"> Que trouvez-vous d'anormal en vous ?</h3>
                        <p>{{ $patient->problem_with_you }} </p>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold mr-2"> Quel jugement faites-vous de votre personne ?</h3>
                        <p>{{ $patient->judgment_yourself }} </p>
                    </div>

                    <div class="mt-2">
                        <h3 class="font-semibold mr-2"> Qu'attendez-vous du psychologue ?</h3>
                        <p>{{ $patient->what_expect_from_psychologist }} </p>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
