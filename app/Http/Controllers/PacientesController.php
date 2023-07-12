<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientetabla=Paciente::get();
        return response()->json($pacientetabla);
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
        $request->validate([
            'Apellidos'=>'required',
            'Nombres'=>'required',
            'FechaNacimiento'=>'required',
            'Dni'=>'required',
            'Telefono'=>'required',
            'Direccion'=>'required',
            'Correo'=>'required',
            'idUsuario'=>'required'

        ]);
        $paciente=new Paciente();
        $paciente->Apellidos=$request->input('Apellidos');
        $paciente->Nombres=$request->input('Nombres');
        $paciente->FechaNacimiento=$request->input('FechaNacimiento');
        $paciente->Dni=$request->input('Dni');
        $paciente->Telefono=$request->input('Telefono');
        $paciente->Direccion=$request->input('Direccion');
        $paciente->Correo=$request->input('Correo');
        $paciente->idUsuario=$request->input('idUsuario');
        $paciente->save();

        return response()->json(['message'=>'Datos almacenados correctamente'],200);
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
