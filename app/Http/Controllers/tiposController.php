<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoUsuarios;

class tiposController extends Controller
{
    public function index(){
         $data =TipoUsuarios::all();
         return view ('tiposusuarios', compact('data'));

    }

    public function store(Request $request){

        $tipos= new TipoUsuarios();
        $tipos->tipo=$request->tipo;
        $tipos->save();

        return back();
    }
}
