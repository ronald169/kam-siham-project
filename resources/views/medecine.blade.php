<x-app-layout>
    <div class="container mx-auto">
        <div class="text-sm">
            <h1 class="text-2xl font-medium uppercase p-4 bg-blue-50 text-blue-500">FICHE de consultation médecine generale</h1>

            <div class="mt-4">
                <div class="flex  mr-2">
                    <h3 class="font-semibold mr-2"> Nom et prénom:</h3> {{ $patient->name }}
                </div>
            </div>

            <div class="mt-2">
                <h3 class="font-semibold mr-2"> Motif de consultation:</h3>
                <p>{{ $patient->motif_de_consultation }} </p>
            </div>

            <div class="mt-2">
                <h3 class="font-semibold mr-2"> Histoire de la maladie:</h3>
                <p>{{ $patient->histoire_de_la_maladie }} </p>
            </div>

            <div class="mt-2">
                <h3 class="font-semibold mr-2"> Antécédents:</h3>
                <p>{{ $patient->antecedent }} </p>
            </div>

            <div class="mt-2">
                <h3 class="font-semibold mr-2"> Examen physique:</h3>
                <p>{{ $patient->examen_physique }} </p>
            </div>

            <div class="mt-2">
                <h3 class="font-semibold mr-2"> Hypothèse diagnostique:</h3>
                <p>{{ $patient->hypothese_diagnostique }} </p>
            </div>

            <div class="mt-2">
                <h3 class="font-semibold mr-2">Examen demandé & résultat:</h3>
                <p>{{ $patient->examen_demande }} </p>
            </div>
        </div>
    </div>
</x-app-layout>
