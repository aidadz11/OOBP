<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Usluge;
use Illuminate\Http\Request;

class UslugeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usluge = DB::table('usluges')
        ->get();
        return view('usluge.index',['usluge'=>$usluge]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usluge.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nazivusluge'=>'required|string|max:255',
        ]);
        DB::table('usluges')->insert([
            'nazivusluge'=>$request->nazivusluge,
            'cijenausluge'=>$request->cijenausluge,
            'trajanjeusluge'=>$request->trajanjeusluge,
            'vrstausluge'=>$request->vrstausluge,
            'doktor'=>$request->doktor,
        ]);
        return redirect()->route('usluge');
    }

    /**
     * Display the specified resource.
     */
    public function delete(Request $request){
        $id=$request->id;
        Usluge::destroy($id);
        return redirect()->route('usluge');
    }
    public function show(Usluge $usluge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $usluge=DB::table('usluges')
        ->where('id',$id)
        ->get();
        return view('usluge.edit',['usluge'=>$usluge]);
       

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usluge $usluge)
    {
        $id=$request->id;
        $request->validate([
            'nazivusluge'=>'required|string|max:255',
        ]);
        $update_query=DB::table('usluges')
        ->where('id',$id)
        ->update([
            'nazivusluge'=>$request->nazivusluge,
            'cijenausluge'=>$request->cijenausluge,
            'trajanjeusluge'=>$request->trajanjeusluge,
            'vrstausluge'=>$request->vrstausluge,
            'doktor'=>$request->doktor,
        ]);
        return redirect()->route('usluge');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usluge $usluge)
    {
        //
    }
    public function file_add(Request $request)
    {
        $id=$request->id;

        $usluge = Usluge::find($id);

        return view('usluge.file_add', ['id' => $id , 'usluges' => $usluge]);

    }

    public function process(Request $request)
    {
        $id=$request->id;

        $usluge = Usluge::find($id);

        $folder_to_save = $usluge->nazivusluge;

        $file = $request->file('file');

        $filename = $usluge->id . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder_to_save, $filename);

        return redirect()->route('usluge');

    }
}
