<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Proizvodjac;
use Illuminate\Http\Request;

class ProizvodjacController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proizvodjac = DB::table('proizvodjacs')
        ->get();
        return view('proizvodjac.index',['proizvodjac'=>$proizvodjac]);
    }
    public function delete(Request $request){
        $id=$request->id;
        proizvodjac::destroy($id);
        return redirect()->route('proizvodjac');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proizvodjac.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'imeproizvodjaca'=>'required|string|max:255',
        ]);
        DB::table('proizvodjacs')->insert([
            'imeproizvodjaca'=>$request->imeproizvodjaca,
            'adresa'=>$request->adresa,
            
        ]);
        return redirect()->route('proizvodjac');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proizvodjac $proizvodjac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $proizvodjac=DB::table('proizvodjacs')
        ->where('id',$id)
        ->get();
        return view('proizvodjac.edit',['proizvodjac'=>$proizvodjac]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proizvodjac $proizvodjac)
    {
        $id=$request->id;
        $request->validate([
            'imeproizvodjaca'=>'required|string|max:255',
        ]);
        $update_query=DB::table('proizvodjacs')
        ->where('id',$id)
        ->update([
            'imeproizvodjaca'=>$request->imeproizvodjaca,
            'adresa'=>$request->adresa,
            
        ]);
        return redirect()->route('proizvodjac');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proizvodjac $proizvodjac)
    {
        //
    }
    public function file_add(Request $request)
    {
        $id=$request->id;

        $proizvodjac = Proizvodjac::find($id);

        return view('proizvodjac.file_add', ['id' => $id , 'proizvodjacs' => $proizvodjac]);

    }

    public function process(Request $request)
    {
        $id=$request->id;

        $proizvodjac = Proizvodjac::find($id);

        $folder_to_save = $proizvodjac->imeproizvodjaca;

        $file = $request->file('file');

        $filename = $proizvodjac->id . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder_to_save, $filename);

        return redirect()->route('proizvodjac');

    }
}
