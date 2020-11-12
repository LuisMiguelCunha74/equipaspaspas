<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipas;

class equipasController extends Controller
{
    //
    
    public function index() {
        $equipa = equipas::all();
        return view ('equipas.index', [
            'equipas'=>$equipa
        ]);
      }  
    public function show(request $request){
        $idequipa = $request->numero;
        $equipa = equipas::where('id_equipa', $idequipa)->first();
        return view('equipas.show', [
            'equipa'=>$equipa
        ]);
    }
}
