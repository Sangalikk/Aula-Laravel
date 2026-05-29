<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class KeepControler extends Controller
{
    public function index(Request $request){
        $notas = Nota::all();
        return view('keep/index', [
            'notas' => $notas, 
        ]);  
    }

    public function create(Request $request){
        if($request->isMethod('post')){ // Verifica se o método é POST
        $dados = $request->validate([
        'nota' => 'required', 
        'cor' => 'required'
    ]); // Pega os campos preenchidos
        Nota::create($dados); // Faz um insert no banco
        return redirect()->route('keep.index'); // Retorna para página index
    } 
        return view('keep/create');
    }
}
