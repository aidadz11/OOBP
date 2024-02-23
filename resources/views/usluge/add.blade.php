<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Usluge-Dodavanje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{ route('store_usluge') }}">
                        @csrf
                        <div>
                            <x-label for="nazivusluge" value="{{ __('Naziv') }}" />
                            <x-input id="nazivusluge" class="block mt-1 w-full" type="text" name="nazivusluge" :value="old('nazivusluge')" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="cijenausluge" value="{{ __('Cijena usluge') }}" />
                            <x-input id="cijenausluge" class="block mt-1 w-full" type="number" name="cijenausluge" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="trajanjeusluge" value="{{ __('Trajanje usluge') }}" />
                            <x-input id="trajanjeusluge" class="block mt-1 w-full" type="number" name="trajanjeusluge" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="vrstausluge" value="{{ __('Vrsta usluge') }}" />
                            <x-input id="vrstausluge" class="block mt-1 w-full" type="text" name="vrstausluge" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="doktor" value="{{ __('Doktor') }}" />
                            <x-input id="doktor" class="block mt-1 w-full" type="text" name="doktor" required autofocus />
                        </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>