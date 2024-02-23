<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Pacijent;
use Illuminate\Http\Request;

class PacijentController extends Controller
{

    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacijents = DB::table('pacijents')
        ->get();
        return view('pacijent.index', ['pacijent'=>$pacijents]);
    }
    public function create()
    {
        return view('pacijent.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ime'=>'required|string|max:255',
        ]);
        DB::table('pacijents')->insert([
            'ime'=>$request->ime,
            'prezime'=>$request->prezime,
            'godine'=>$request->godine,
            
        ]);
        return redirect()->route('pacijent');
    }
    public function delete(Request $request){
        $id=$request->id;
        pacijent::destroy($id);
        return redirect()->route('pacijent');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pacijent $pacijent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $pacijent=DB::table('pacijents')
        ->where('id',$id)
        ->get();
        return view('pacijent.edit',['pacijent'=>$pacijent]);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pacijent $pacijent)
    {
        $id=$request->id;
        $request->validate([
            'ime'=>'required|string|max:255',
        ]);
        $update_query=DB::table('pacijents')
        ->where('id',$id)
        ->update([
            'ime'=>$request->ime,
            'prezime'=>$request->prezime,
            'godine'=>$request->godine,
            
        ]);
        return redirect()->route('pacijent');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pacijent $pacijent)
    {
        //
    }
    public function file_add(Request $request)
    {
        $id=$request->id;

        $pacijent = Pacijent::find($id);

        return view('pacijent.file_add', ['id' => $id , 'pacijents' => $pacijent]);

    }

    public function process(Request $request)
    {
        $id=$request->id;

        $pacijent =Pacijent::find($id);

        $folder_to_save = $pacijent->ime;

        $file = $request->file('file');

        $filename = $pacijent->id . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder_to_save, $filename);

        return redirect()->route('pacijent');

    }
}
