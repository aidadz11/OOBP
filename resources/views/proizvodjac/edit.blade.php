<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Proizvođači-Uredi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($proizvodjac as $proizvodjac)
                    <form method="POST" action="{{ route('update_proizvodjac') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$proizvodjac->id}}"/>
                        <div>
                            <x-label for="imeproizvodjaca" value="{{ __('Ime proizvodjaca') }}" />
                            <x-input id="imeproizvodjaca" class="block mt-1 w-full" type="text" name="imeproizvodjaca" value="{{$proizvodjac->imeproizvodjaca}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <x-label for="adresa" value="{{ __('Adresa proizvođača') }}" />
                            <x-input id="adresa" class="block mt-1 w-full" type="text" name="adresa" value="{{$proizvodjac->adresa}}" required autofocus />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                 @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
