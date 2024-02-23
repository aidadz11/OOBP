<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Proizvodi-Uredi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($proizvodi as $proizvodi)
                    <form method="POST" action="{{ route('update_proizvod') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$proizvodi->id}}"/>
                        <div>
                            <x-label for="nazivproizvoda" value="{{ __('Naziv proizvoda') }}" />
                            <x-input id="nazivproizvoda" class="block mt-1 w-full" type="text" name="nazivproizvoda" value="{{$proizvodi->nazivproizvoda}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <x-label for="cijenaproizvoda" value="{{ __('Cijena proizvoda') }}" />
                            <x-input id="cijenaproizvoda" class="block mt-1 w-full" type="number" name="cijenaproizvoda" value="{{$proizvodi->cijenaproizvoda}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="proizvodjac" value="{{ __('Proizvođač') }}" />
                            <x-input id="proizvodjac" class="block mt-1 w-full" type="text" name="proizvodjac" value="{{$proizvodi->proizvodjac}}" required autofocus />
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
