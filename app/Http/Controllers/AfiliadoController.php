<?php

namespace App\Http\Controllers;
use App\Models\Afiliado;

use Illuminate\Http\Request;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        // 
        $datosAfiliados=Afiliado::all();
        $idempleado=$id;

        return view ('afiliado.index')->with('datosAfiliados',$datosAfiliados)->with('empleados',$idempleado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $empleado)
    {
        //
        return view('afiliado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $afiliado= new Afiliado();
        $afiliado->nombre=$request->get('nombre'); 
        $afiliado->apellido=$request->get('apellido'); 
        $afiliado->save();
        return redirect('empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
