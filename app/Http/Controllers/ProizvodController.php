<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Proizvod;
use Illuminate\Http\Request;

class ProizvodController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proizvods = DB::table('proizvods')
        ->get();
        return view('proizvodi.index', ['proizvodi'=>$proizvods]);
    }
public function delete(Request $request){
    $id=$request->id;
    proizvod::destroy($id);
    return redirect()->route('proizvodi');
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proizvodi.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nazivproizvoda'=>'required|string|max:255',
        ]);
        DB::table('proizvods')->insert([
            'nazivproizvoda'=>$request->nazivproizvoda,
            'cijenaproizvoda'=>$request->cijenaproizvoda,
            'proizvodjac'=>$request->proizvodjac,
            
        ]);
        return redirect()->route('proizvodi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proizvod $proizvod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id=$request->id;
        $proizvodi=DB::table('proizvods')
        ->where('id',$id)
        ->get();
        return view('proizvodi.edit',['proizvodi'=>$proizvodi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proizvod $proizvod)
    {
        $id=$request->id;
        $request->validate([
            'nazivproizvoda'=>'required|string|max:255',
        ]);
        $update_query=DB::table('proizvods')
        ->where('id',$id)
        ->update([
            'nazivproizvoda'=>$request->nazivproizvoda,
            'cijenaproizvoda'=>$request->cijenaproizvoda,
            'proizvodjac'=>$request->proizvodjac,
            
        ]);
        return redirect()->route('proizvodi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proizvod $proizvod)
    {
        //
    }
    public function file_add(Request $request)
    {
        $id=$request->id;

        $proizvodi = Proizvod::find($id);

        return view('proizvodi.file_add', ['id' => $id , 'proizvods' => $proizvodi]);

    }

    public function process(Request $request)
    {
        $id=$request->id;

        $proizvodi = Proizvod::find($id);

        $folder_to_save = $proizvodi->nazivproizvoda;

        $file = $request->file('file');

        $filename = $proizvodi->id . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder_to_save, $filename);

        return redirect()->route('proizvodi');

    }
}
