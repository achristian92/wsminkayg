<?php

namespace App\Http\Controllers;

use App\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    
    public function index()
    {
        $rmodulo = Modulo::select('idmodulo','nombre_modulo','descrip_modulo')->get();
        return [
		'data' =>$rmodulo
		];

    }

     
    public function store(Request $request)
    {
        $modulo = new Modulo($request->all());
        $modulo->save();
        return $modulo;
    }

    
    public function show(Modulo $modulo)
    {
        //
    }

     
    public function update(Request $request, Modulo $modulo)
    {
        //
    }

    public function destroy(Modulo $modulo)
    {
        //
    }
}
