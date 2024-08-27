<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl leading-tight">
                {{ $student->firstname }} {{ $student->lastname }} {{ $student->middlename  }}
            </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-lg mx-auto w-full bg-gray-200 px-6 py-3 rounded">
            <h3 class="text-2xl font-semibold">Nom: {{ $student->lastname }}</h3>
            <h3 class="text-2xl font-semibold">Postnom:  {{ $student->middlename  }}</h3>
            <h3 class="text-2xl font-semibold">Prenom:  {{ $student->firstname }} </h3>
            <h3 class="text-2xl font-semibold">Age:  {{ $student->age }} </h3>
        </div>
    </div>
</x-app-layout>