<div id="modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button data-modal-hide="modal" type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <div>
                        <x-input-label for="firstname" :value="__('Prenom')" />
                        <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
                        <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                    </div>
                    <button type="submit"  class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-emerald-500 rounded-lg border border-emerald-200 hover:bg-emerald-700 hover:text-emerald-700 focus:z-10 focus:ring-4 focus:ring-emerald-100 dark:focus:ring-emerald-700 dark:bg-emerald-800 dark:text-emerald-400 dark:border-emerald-600 dark:hover:text-white dark:hover:bg-emerald-700">Non</button>
                </form>
            </div>
        </div>
    </div>
</div>






