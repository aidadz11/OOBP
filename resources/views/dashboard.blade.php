<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna') }}         
        </h2>
        <span class="float-left text-sm text-gray-600">{{date('D,d M Y H:i')}}</span>     
    </x-slot>
    <div class="flex justify-center align-start py-5">
            <div class="py-3 mx-3 md:bg-white-100">
    <h1 class="text-3x1 font-bold mb-4" align=center>Vremenske informacije (openweathermap API) </h1>
    @if(isset($WeatherData['main']['temp']))
    <p class="text-lg mb-2 text-center">Opis vremena: {{$WeatherData['weather'][0]['description']}}</p>
    <p class="text-lg mb-2 text-center">Temperatura: {{round($WeatherData['main']['temp']-273.15)}}</p>
    @endif
                
    @if(isset($WeatherData['weather'][0]['description']))
    <p class="text-1g mb-2 text-center">Grad: {{$WeatherData['name']}}</p>
    @endif
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl" align="center"><p style="color: blue;">Dobrodošli u Stomatološku ordinaciju AidaDental!</p></br>
                    Naša misija je pružiti vrhunsku stomatološku skrb uz najviši standard stručnosti i brižnosti prema našim pacijentima. Sa strašću 
                    prema oralnom zdravlju i dugogodišnjem iskustvu, naš tim stručnjaka posvećen je osigurati Vaše zadovoljstvo i udobnost tokom svake posjete.</br>
                    U našoj moderno opremljenoj ordinaciji nudimo širok spektar stomatoloških usluga, uključujući redovne preglede, higijensko čišćenje, popravke zuba,
                    estetske tretmane, ortodonciju i mnoge druge. Bez obzira da li dolazite radi rutinskog pregleda ili za rješavanje određenih stomatoloških problema, možete računati na nas
                    da ćemo Vam pružiti personalizovanu i učinkovitu skrb.</br>
                    Vaše oralno zdravlje je naš prioritet, zbog toga nas kontaktirajte danas kako biste zakazali svoj sljedeći pregled i pridružili se našoj zajednici zadovoljnih pacijenata.</br>
                    <p style="color: blue;"> Vaš AidaDental tim!</p></h1>
                    <img src="slike/zubi2.jpg" alt="slika" align="left">
                    <img src="slike/zubi1.jpg" alt="slika" align="right">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>