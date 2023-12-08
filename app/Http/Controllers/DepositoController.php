<?php

namespace App\Http\Controllers;
use App\Models\Deposito;

use Illuminate\Http\Request;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id, string $id2, string $nomb)
    {
        //
        $empleado=$id;
        $afi=$id2;
        $nombre=$nomb;
        $datosDepositos=Deposito::all();
        return view ('deposito.index')->with('datosDepositos',$datosDepositos)
        ->with('empleado',$empleado)->with('afi',$afi)->with('nombre',$nombre);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $empleado, string $afiliado, string $nombre)
    {
        //
        $emplead= $empleado;
        $afiliad= $afiliado;
        $nom= $nombre;
        return view('deposito.create')->with('empleado',$empleado)->with('afi',$afiliado)->with('nombre',$nombre);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $retiro= new Deposito();
        $retiro->codempleado=$request->get('codempleado'); 
        $retiro->codafiliado=$request->get('codafiliado'); 
        $retiro->nombreafiliado=$request->get('nombreafiliado'); 
        $retiro->fecha=$request->get('fecha'); 
        $retiro->cantidad=$request->get('cantidad'); 
        $retiro->save();
        return redirect('/empleado');
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
