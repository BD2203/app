<?php

namespace App\Http\Controllers;

use App\Models\Empleado;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datosEmpleados=Empleado::all();
        return view ('empleado.index')->with('datosEmpleados',$datosEmpleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado= new Empleado();
        $empleado->nombre=$request->get('nombre'); 
        $empleado->apellido=$request->get('apellido'); 
        $empleado->save();
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
