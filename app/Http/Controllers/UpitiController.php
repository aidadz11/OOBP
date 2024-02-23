<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Upiti;
use Illuminate\Http\Request;

class UpitiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Koliko je rezervacija od 11.2.2024. do 14.2.2024.
        $from = '2024-02-11 00:00:00';
        $to = '2024-02-14 23:59:59';

        $number_of_reservations = DB::table('rezervacijas')
        ->whereBetween('datum',[$from,$to])
        ->count();
        //Koliko je narudzbi od 11.2.2024. do 14.2.2024.
        $from = '2024-02-11 00:00:00';
        $to = '2024-02-14 23:59:59';

        $number_of_orders = DB::table('narudzbas')
        ->whereBetween('datum',[$from,$to])
        ->count();
        //Ispisati doktore koji su se najčešće rezervisali.
        $doktori_broj=DB::table('rezervacijas')
        ->select('rezervacijas.doktor', DB::raw('COUNT(*) as brojac'))
        ->join('doktors','rezervacijas.id','=','doktors.id')
        ->groupBy('rezervacijas.doktor')
        ->orderByRaw('COUNT(*) DESC')
        ->get();
        //Ispisati proizvodjace od kojih se najčešće naručivalo.
        $proizvodjaci=DB::table('narudzbas')
        ->select('narudzbas.proizvodjac',DB::raw('COUNT(*) as brojac'))
        ->join('proizvodjacs','narudzbas.id','=','proizvodjacs.id')
        ->groupBy('narudzbas.proizvodjac')
        ->orderByRaw('COUNT(*) DESC')
        ->get();
        //Pacijenti koji su se pojavili i koliko puta
        $najcesci_pacijent=DB::table('pacijents')
        ->select('ime','prezime',DB::raw('COUNT(*) as brojac'))
        ->groupBy('ime','prezime')
        ->get();
        //vrsta usluge koja se najvise pojavljuje
        $najcesca_vrsta_usluge=DB::table('usluges')
        ->select('vrstausluge',DB::raw('COUNT(*) as brojac'))
        ->groupBy('vrstausluge')
        ->orderByRaw('COUNT(*) DESC')
        ->get();
       


        return view('upiti.index',
        ['number_of_reservations'=>$number_of_reservations,
        'number_of_orders'=>$number_of_orders,
        'doktori_broj'=>$doktori_broj,
        'proizvodjaci'=>$proizvodjaci,
        'najcesci_pacijent'=>$najcesci_pacijent,
        'najcesca_vrsta_usluge'=>$najcesca_vrsta_usluge
        
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Upiti $upiti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upiti $upiti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Upiti $upiti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upiti $upiti)
    {
        //
    }
}
