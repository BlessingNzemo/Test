<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Créer un étudiant') }}
        </h2>
    </x-slot>

    <div class="p-12">
        <div class="max-w-2xl mx-auto w-full bg-gray-200 px-6 py-3 rounded">
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                <div>
                    <x-input-label for="firstname" :value="__('Prenom')" />
                    <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="lastname" :value="__('Nom')" />
                    <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="middlename" :value="__('PostNom')" />
                    <x-text-input id="middlename" class="block mt-1 w-full" type="text" name="middlename" :value="old('middlename')" required autofocus autocomplete="middlename" />
                    <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="age" :value="__('Age')" />
                    <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus autocomplete="age" />
                    <x-input-error :messages="$errors->get('age')" class="mt-2" />
                </div>
                <div class="flex justify-end mt-4">

                    <button type="submit"  class="py-2.5 px-5 ms-3 text-md font-medium focus:outline-none bg-emerald-500 rounded-lg border text-white border-emerald-200 hover:bg-emerald-700 focus:z-10 focus:ring-4 focus:ring-emerald-100 dark:focus:ring-emerald-700 dark:bg-emerald-800 dark:border-emerald-600 dark:hover:bg-emerald-700">Valider</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>