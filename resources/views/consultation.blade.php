<x-app-layout>
    <div class="container mx-auto">
        <div class="text-sm">
            <h1 class="text-2xl font-medium uppercase p-4 bg-blue-50 text-blue-500">FICHE de consultation Toxicomanies</h1>
        </div>

        <div class="mt-4">
            <div class="flex">
                <h3 class="font-semibold uppercase text-blue-500">Histoire des conduites addictives </h3>
            </div>

            <div class="mt-2 flex flex-wrap">
                <div class="flex">
                    <h3 class="font-semibold mr-2"> Nom du patient:</h3> {{ $patient->patient->name }}
                </div>
            </div>

            <div class="mt-2 flex flex-wrap">
                <div class="flex mr-2">
                    <h3 class="font-semibold mr-2"> Debut de la consommation des drogues:</h3> {{ trouverValeur($patient->beginning_drug_use, [
                        'moins_de_2_ans' => 'Moins de 2 ans',
                        '2_a_5_ans' => '2 à 5 ans',
                        '5_a_10_ans' => '5 à 10 ans',
                        'plus_de_10_ans' => 'Plus de 10 ans'
                    ]) }}
                </div>
                <div class="flex mr-2">
                    <h3 class="font-semibold mr-2"> Motivation a l'entrer dans les CA:</h3> {{ trouverValeur($patient->motivation_to_use_drug, [
                        'curiosite' => 'Curiosité',
                        'suivisme_des_amis' => 'Suivisme des  amis',
                        'autres' => 'Autres'
                    ]) }}
                </div>

                <div class="flex mr-2">
                    <h3 class="font-semibold mr-2"> Motivation actuelles a consommer:</h3> {{ trouverValeur($patient->current_motivation_to_use_drug, [
                        'manque' => 'Manque',
                        'habitude' => 'Habitude',
                        'sommeil' => 'Sommeil',
                        'appetit' => 'Appétit',
                        'plaisir' => 'Plaisir',
                        'courage' => 'Courage'
                    ]) }}
                </div>

                <div class="flex mr-2">
                    <h3 class="font-semibold mr-2"> Temps maximal d’abstinence:</h3> {{ trouverValeur($patient->temps_maximal_abstinence, [
                        'moins_une_semaine' => 'Moins d’une semaine',
                        '1_semaine' => '1 semaine',
                        '2_a_4_semaines' => '2 à 4 semaines',
                        'plus_1_mois' => 'Plus d’un mois'
                    ]) }}
                </div>

                <div class="flex mr-2">
                    <h3 class="font-semibold mr-2"> Tentative ulterieures d'abandon:</h3> {{ trouverValeur($patient->try_to_stop_drop, [
                        'jamais' => 'Jamais',
                        'une_fois' => 'Une fois',
                        'plusieurs_fois' => 'Plusieurs fois'
                    ]) }}
                </div>

                <div class="flex mr-2">
                    <h3 class="font-semibold mr-2"> Tentative ulterieures d'abandon:</h3> {{ trouverValeur($patient->type_of_drug_and_ca, [
                        'cigarette' => 'Cigarette',
                        'alcool' => 'Alcool',
                        'thai' => 'Thai',
                        'caillou' => 'Caillou',
                        'tramol' => 'Tramol',
                        'autres' => 'autres'
                    ]) }}
                </div>

                <div class="flex mr-2">
                    <h3 class="font-semibold mr-2"> Tentative ulterieures d'abandon:</h3> {{ trouverValeur($patient->try_to_stop_drop, [
                        'jamais' => 'Jamais',
                        'une_fois' => 'Une fois',
                        'plusieurs_fois' => 'Plusieurs fois'
                    ]) }}
                </div>

                <div class="flex mr-2">
                    <h3 class="font-semibold mr-2"> Motivations a l'abandon:</h3> {{ trouverValeur($patient->motivation_to_stop, [
                        'jamais' => 'Jamais',
                        'une_fois' => 'Une fois',
                        'plusieurs_fois' => 'Plusieurs fois'
                    ]) }}
                </div>

                <div class="flex mr-2">
                    <h3 class="font-semibold mr-2"> Type de drogues consommées:</h3> {{ trouverValeur($patient->type_of_drug_and_ca, [
                        'cigarette' => 'Cigarette',
                        'alcool' => 'Alcool',
                        'thai' => 'Thai',
                        'caillou' => 'Caillou',
                        'tramol' => 'Tramol',
                        'autres' => 'autres'
                    ]) }}
                </div>
            </div>

            <div class="mt-2 flex flex-wrap">
                <div class="">
                    <h3 class="font-semibold"> Tolerence et changements de drogues:</h3> {{ $patient->tolerance_and_drug_switching }}
                </div>
            </div>

            {{-- Consequence de la consommation section start --}}
            <div class="mt-4">
                <div class="flex">
                    <h3 class="font-semibold uppercase text-blue-500">Consequence de la consommation </h3>
                </div>

                <div class="mt-2 flex flex-wrap">
                    <div class="flex mr-2">
                        <h3 class="font-semibold mr-2"> Type de relation à la drogue:</h3> {{ trouverValeur($patient->type_of_relation_with_drug, [
                            'abus' => 'abus',
                            'dependance_1'=> 'Dépendance 1',
                            'dependance_2'=> 'Dépendance 2',
                            'dependance_3'=> 'Dépendance 3'
                        ]) }}
                    </div>
                    <div class="flex mr-2">
                        <h3 class="font-semibold mr-2"> Amaigrissement:</h3> {{ trouverValeur($patient->amaigrissement, [
                            'oui_un_peu' => 'Oui un peu',
                            'beaucoup' => 'Beaucoup',
                            'non' => 'Non'
                        ]) }}
                    </div>

                    <div class="flex mr-2">
                        <h3 class="font-semibold mr-2"> Teint sombre:</h3> {{ trouverValeur($patient->teint_sombre, [
                            'oui_un_peu' => 'Oui un peu',
                            'beaucoup' => 'Beaucoup',
                            'non' => 'Non'
                        ]) }}
                    </div>

                    <div class="flex mr-2">
                        <h3 class="font-semibold mr-2"> Insomnie de manque:</h3> {{ trouverValeur($patient->insomnie_de_manque, [
                            'oui_un_peu' => 'Oui un peu',
                            'beaucoup' => 'Beaucoup',
                            'non' => 'Non'
                        ]) }}
                    </div>

                    <div class="flex mr-2">
                        <h3 class="font-semibold mr-2"> Cauchemars:</h3> {{ trouverValeur($patient->cauchemars, [
                            'oui_un_peu' => 'Oui un peu',
                            'beaucoup' => 'Beaucoup',
                            'non' => 'Non'
                        ]) }}
                    </div>

                    <div class="flex mr-2">
                        <h3 class="font-semibold mr-2"> Hallucination:</h3> {{ trouverValeur($patient->hallucination, [
                            'oui_un_peu' => 'Oui un peu',
                            'beaucoup' => 'Beaucoup',
                            'non' => 'Non'
                        ]) }}
                    </div>

                    <div class="flex mr-2">
                        <h3 class="font-semibold mr-2"> Troubles somatiques (tremblements):</h3> {{ trouverValeur($patient->trouble_somatique, [
                            'oui_un_peu' => 'Oui un peu',
                            'beaucoup' => 'Beaucoup',
                            'non' => 'Non'
                        ]) }}
                    </div>

                    <div class="flex mr-2">
                        <h3 class="font-semibold mr-2"> Délire et autre troubles du comportement:</h3> {{ trouverValeur($patient->delire_trouble_du_comportement, [
                            'oui_un_peu' => 'Oui un peu',
                            'beaucoup' => 'Beaucoup',
                            'non' => 'Non'
                        ]) }}
                    </div>

                    <div class="flex mr-2">
                        <h3 class="font-semibold mr-2"> Problème avec la loi:</h3> {{ trouverValeur($patient->probleme_avec_loi, [
                            'cellule' => 'Cellule',
                            'prison' => 'Prison',
                            'jamais' => 'Jamais '
                        ]) }}
                    </div>

                    <div class="flex mr-2">
                        <h3 class="font-semibold mr-2"> Epanouissement affectif:</h3> {{ trouverValeur($patient->epanouissement_affectif, [
                            'oui_un_peu' => 'Oui un peu',
                            'beaucoup' => 'Beaucoup',
                            'non' => 'Non'
                        ]) }}
                    </div>

                    <div class="flex mr-2">
                        <h3 class="font-semibold mr-2"> Epanouissement sexuel:</h3> {{ trouverValeur($patient->epanouissement_sexuel, [
                            'oui_un_peu' => 'Oui un peu',
                            'beaucoup' => 'Beaucoup',
                            'non' => 'Non'
                        ]) }}
                    </div>
                </div>
            </div>
            {{-- Consequence de la consommation section end --}}



            {{-- Evaluation de la consommation section Start --}}
            <div class="mt-4">
                <div class="flex">
                    <h3 class="font-semibold uppercase text-blue-500">Evaluation de la consommation et de la dependance </h3>
                </div>

                <div class="mt-2">
                    <h3 class="font-semibold"> Frequence et mode de consommation:</h3> {{ $patient->frequency_and_consumption }}
                </div>

                <div class="mt-2">
                    <h3 class="font-semibold"> Investissement dans les CA:</h3> {{ $patient->investment_in_ca }}
                </div>

            </div>
            {{-- Evaluation de la consommation section End --}}

            {{-- Tableau clinique section Start --}}
            <div class="mt-4">
                <div class="flex">
                    <h3 class="font-semibold uppercase text-blue-500">Tableau clinique</h3>
                </div>

                <div class="mt-2">
                    <h3 class="font-semibold"> Etat general:</h3> {{ $patient->general_state }}
                </div>

                <div class="mt-2">
                    <h3 class="font-semibold"> Signes respiratoires:</h3> {{ $patient->respiratory_sign }}
                </div>

                <div class="mt-2">
                    <h3 class="font-semibold"> Signes neurologiques:</h3> {{ $patient->neurology_sign }}
                </div>

                <div class="mt-2">
                    <h3 class="font-semibold"> Psychiatriques:</h3> {{ $patient->psychiatric_disorder }}
                </div>

                <div class="mt-2">
                    <h3 class="font-semibold"> Autre:</h3> {{ $patient->other }}
                </div>
            </div>
            {{-- Tableau clinique section End --}}



            {{-- Tableau clinique section Start --}}
            <div class="mt-4">
                <div class="flex">
                    <h3 class="font-semibold uppercase text-blue-500">Antecedents</h3>
                </div>

                <div class="mt-2">
                    <h3 class="font-semibold"> Medicaux/Chirugicaux:</h3> {{ $patient->medical_surgical }}
                </div>

                <div class="mt-2">
                    <h3 class="font-semibold"> Allergologiques:</h3> {{ $patient->allergic }}
                </div>

                <div class="mt-2">
                    <h3 class="font-semibold"> Psychatriques:</h3> {{ $patient->psychiatric }}
                </div>

                <div class="mt-2">
                    <h3 class="font-semibold"> Traumatologiques:</h3> {{ $patient->traumatologies }}
                </div>

            </div>
            {{-- Tableau clinique section End --}}

            <div class="element-a-masquer w-full mt-4">
                <h3 class="font-semibold uppercase text-blue-500">Bilan</h3>
                <div class="flex  space-x-2 text-lg mt-2">
                    <a href="{{ downloadLink($patient->psychology_assessment) }}" target="_blank" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-1 px-2 rounded-lg">Bilan psychologique</a>
                    <a href="{{ downloadLink($patient->biology_assessment) }}" target="_blank" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-1 px-2 rounded-lg">Bilan biologique</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
