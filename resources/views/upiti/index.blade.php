<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Upiti') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4 p-4 justify-items-left">
                <div>
                    <h1>Upit 1.</h1>
                    <hr/>
                    <h1 class="font-xl"><p style="color: blue;" >Broj rezervacija:</p></h1>
                    <p>{{$number_of_reservations}}</p>
                </div>
                <div>
                    <h1>Upit 2.</h1>
                    <hr/>
                    <h1 class="font-xl"><p style="color: blue;" ">Broj narudzbi:</p></h1>
                    <p>{{$number_of_orders}}</p>
                </div>
                <div>
                    <h1>Upit 3.</h1>
                    <hr/>
                    <h1 class="font-xl"><p style="color: blue;" >Rezervacija doktora:</p></h1>
                    @foreach($doktori_broj as $doktori_broj)
                    <p>{{$loop->iteration}}. {{$doktori_broj->doktor}}-{{$doktori_broj->brojac}}</p>
                    @endforeach
                </div>
                <div>
                    <h1>Upit 4.</h1>
                    <hr/>
                    <h1 class="font-xl"><p style="color: blue;" >Najčešća narudzba:</p></h1>
                    @foreach($proizvodjaci as $proizvodjaci)
                    <p>{{$loop->iteration}}. {{$proizvodjaci->proizvodjac}}-{{$proizvodjaci->brojac}}</p>
                    @endforeach
                </div>
                <div>
                    <h1>Upit 5.</h1>
                    <hr/>
                    <h1 class="font-xl"><p style="color: blue;" >Pacijenti:</p></h1>
                    @foreach($najcesci_pacijent as $najcesci_pacijent)
                    <p>{{$loop->iteration}}. {{$najcesci_pacijent->ime}}-{{$najcesci_pacijent->brojac}}</p>
                    @endforeach
                </div>
                <div>
                    <h1>Upit 6.</h1>
                    <hr/>
                    <h1 class="font-xl"><p style="color: blue;" >Najčešće vrste usluga prema nazivu usluge:</p></h1>
                    @foreach($najcesca_vrsta_usluge as $najcesca_vrsta_usluge)
                    <p>{{$loop->iteration}}. {{$najcesca_vrsta_usluge->vrstausluge}}-{{$najcesca_vrsta_usluge->brojac}}</p>
                    @endforeach
                </div>


                
                </div>
             </div>
        </div>
    </div>
</x-app-layout>
                    