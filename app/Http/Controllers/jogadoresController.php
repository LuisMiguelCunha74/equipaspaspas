<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jogadores;

class jogadoresController extends Controller
{
    //
    
    public function index(){
        $jogador = jogadores::all();
        return view ('jogadores.index', [
           'jogadores'=>$jogador 
        ]);
    }
    
    public function show(request $request){
        $idjogador = $request->numero;
        $jogador = jogadores::where('id_jogador', $idjogador)->first();
        return view ('jogadores.show', [
           'matarratos'=>$jogador 
        ]);
    }
}
