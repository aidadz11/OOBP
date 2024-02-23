<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Pacijenti-Uredi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($pacijent as $pacijent)
                    <form method="POST" action="{{ route('update_pacijent') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$pacijent->id}}"/>
                        <div>
                            <x-label for="ime" value="{{ __('Ime pacijenta') }}" />
                            <x-input id="ime" class="block mt-1 w-full" type="text" name="ime" value="{{$pacijent->ime}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <x-label for="prezime" value="{{ __('Prezime pacijenta') }}" />
                            <x-input id="prezime" class="block mt-1 w-full" type="text" name="prezime" value="{{$pacijent->prezime}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="godine" value="{{ __('Godine pacijenta') }}" />
                            <x-input id="godine" class="block mt-1 w-full" type="number" name="godine" value="{{$pacijent->godine}}" required autofocus />
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
