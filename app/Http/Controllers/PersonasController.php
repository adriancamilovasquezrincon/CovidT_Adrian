<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personas;
class PersonasController extends Controller
{
    public function index()
    {
        $personas = personas::orderBy('nombres','asc')
        ->where('nro_temperatura','>=','35')
        ->get();
        return [
            'persona'=> $personas
        ];
    }

    public function store(Request $request)
    {
       $personas = new personas();
       $personas->num_cedula= $request->num_cedula;
       $personas->nombres= $request->nombres;
       $personas->apellidos= $request->apellidos;
       $personas->direccion= $request->direccion;
       $personas->telefono= $request->telefono;
       $personas->email= $request->email;
       $personas->nro_cliente= $request->nro_cliente;
       $personas->nro_temperatura= $request->nro_temperatura;
       $personas->sexo= $request->sexo;

       $personas->save();
    }
    public function update(Request $request)
    {
        $personas = personas::findOrFail($request->id_persona);
        $personas->num_cedula= $request->num_cedula;
        $personas->nombres= $request->nombres;
        $personas->apellidos= $request->apellidos;
        $personas->direccion= $request->direccion;
        $personas->telefono= $request->telefono;
        $personas->email= $request->email;
        $personas->nro_cliente= $request->nro_cliente;
        $personas->nro_temperatura= $request->nro_temperatura;
        $personas->sexo= $request->sexo;
 
        $personas->save();
    }

    public function destroy(Request $request)
    {
        $personas = personas::findOrFail($request->id_persona);
        
        $personas->delete();
    }
}
