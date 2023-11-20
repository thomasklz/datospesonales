<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoUsuarios;

class tiposController extends Controller
{
    public function index(){
         $data =TipoUsuarios::where('estado',0)->get();
         return view ('tiposusuarios', compact('data'));

    }

    public function store(Request $request){
        $tipos= new TipoUsuarios();
        $tipos->tipo=$request->tipos;
        $tipos->estado=true;
        $tipos->save();
        return back();
    }
}
