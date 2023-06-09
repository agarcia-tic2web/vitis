<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['provincias']=Provincia::paginate();
        return view('provincia.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('provincia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosProvincia = request()->except('_token');
        Provincia::insert($datosProvincia);

        return redirect('provincias')->with('mensaje','Provincia creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function show(Provincia $provincia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //
       $provincia=Provincia::findOrFail($id);
       return view('provincia.edit', compact('provincia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProvincia = request()->except('_token','_method');

        Provincia::where('id','=',$id)->update($datosProvincia);

        return redirect('provincias')->with('mensaje','Provincia modificada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $provincia=Provincia::findOrFail($id);

        Provincia::destroy($id);

        return redirect('provincias')->with('mensaje','Provincia borrada correctamente.');
    }
}
