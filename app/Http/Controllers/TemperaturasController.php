<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\temperaturas; 
class TemperaturasController extends Controller
{
    public function index()
    {
        $temperaturas= temperaturas::join('personas', 'temperaturas.id_temperatura','=','personas.id_persona')
        ->select('nombre_persona', 'fecha','personas.nombres','personas.nro_temperatura')
        ->orderBy('personas.nombres', 'asc')
        ->get();
        return[
            'temp'=>$temperaturas
        ];
    }
    public function store(Request $request)
    
    {
        $temperaturas = new temperaturas();
        $temperaturas->nombre_persona= $request->nombre_persona;
        $temperaturas->fecha= $request->fecha;
        $temperaturas->lugar= $request->lugar;
        $temperaturas->temp_persona= $request->temp_persona;

        $temperaturas->save();
    }

    public function update(Request $request)
    {
        $temperaturas = temperaturas::findOrFail($request->id_temperatura);
        $temperaturas->nombre_persona= $request->nombre_persona;
        $temperaturas->fecha= $request->fecha;
        $temperaturas->lugar= $request->lugar;
        $temperaturas->temp_persona= $request->temp_persona;

        
        $temperaturas->save();
    }

    public function destroy(Request $request)
    {
        $temperaturas = temperaturas::findOrFail($request->id_temperatura);
        
        $temperaturas->delete();
    }
}
