<?php

namespace App\Http\Controllers;
use App\Zona;

use Illuminate\Http\Request;

class ZonaController extends Controller
{
    
    public function index()
    {
         $rzona = Zona::all();
        return [
		'data'=>$rzona
		];
    }

 
    public function store(Request $request)
    {
        $zona = new Zona($request->all());
        $zona->save();
        return $zona;
    }

    
    public function show(Zona $zona)
    {
        

    }

    
    public function update(Request $request, Zona $zona)
    {
        //
    }

    public function destroy(Zona $zona)
    {
        //
    }
}
