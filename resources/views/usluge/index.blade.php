<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Usluge') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_usluga" class="m-2 p-2 text-x1">Dodaj uslugu</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl"><p style="color: blue;" align="center">Usluge koje Vam nudimo:</p></h1>
                    <hr/>
                    @foreach ($usluge as $usluge)
                    <div class="flex space-x-4">
                    <div class="flex-1"><p class="p-2">{{$usluge->nazivusluge}}-{{$usluge->vrstausluge}}</div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('delete_usluga') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$usluge->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Obrisi') }}
                                </button>
                            </div>
                            </form>
                        </div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('edit_usluga') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$usluge->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase">
                                    {{ __('Uredi') }}
                                </button>
                            </div>
                            </form>
                        </div> 
                        <div class="flex-1">
                            <form method="POST" action="{{ route('file_add') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$usluge->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Dodaj fajl') }}
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