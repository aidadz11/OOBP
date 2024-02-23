<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Proizvodi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_proizvod" class="m-2 p-2 text-x1">Dodaj proizvod</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl"><p style="color: blue;" align="center">Proizvodi koje Vam nudimo:</p></h1>
                    @foreach ($proizvodi as $proizvodi)
                    <div class="flex space-x-4">
                    <div class="flex-1"><p class="p-2">{{$proizvodi->nazivproizvoda}}-{{$proizvodi->proizvodjac}}</div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('delete_proizvod') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$proizvodi->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Obrisi') }}
                                </button>
                            </div>
                            </form>
                        </div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('edit_proizvod') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$proizvodi->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase">
                                    {{ __('Uredi') }}
                                </button>
                            </div>
                            </form>
</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

           