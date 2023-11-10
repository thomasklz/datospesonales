<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosPersonales;
class DatosPersonalesController extends Controller
{
    public function store(Request $request){

        $datos = new DatosPersonales();
        $datos->nombre=$request->nomb;
        $datos->apellido=$request->apell;
        $datos->cedula=$request->cedu;
        $datos->save();
        
        return view('DatosPersonales');
    }

    public function index(){
        return view('DatosPersonales'); 
    }
    public function show(){

        return view('TablaDatos');
    }
}
