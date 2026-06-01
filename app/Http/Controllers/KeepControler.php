<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class KeepControler extends Controller{
    public function index(Request $request){
        $notas = Nota::all();
        return view('keep/index', [
            'notas' => $notas, 
        ]);  
    }

    public function create(Request $request){
        if($request->isMethod('post')){ // Verifica se o método é POST
        $dados = $request->validate([
        'nota' => 'required|min:5', 
        'cor' => 'required'
    ]); // Pega os campos preenchidos
        Nota::create($dados); // Faz um insert no banco
        return redirect()->route('keep.index')->with('mensagem', 'Nota criada com sucesso!'); // Retorna para página index
    } 
        return view('keep/create');
    }

    public function delete(Nota $nota){
        if (request()->isMethod('delete')) { 
        $nota->delete(); 

        return redirect()->route('keep.index')->with('mensagem', 'Nota deletada com sucesso!'); 
    }
        return view('keep.delete', [
            'nota' => $nota, 
        ]);
    }

    public function edit(Request $request, Nota $nota){
        if($request->isMethod('PUT')){
            $dados = $request->validate([
            'nota' => 'required|min:5', 
            'cor' => 'required'
        ]);
        $nota->update($dados);
        return redirect()->route('keep.index')->with('mensagem', 'Nota atualizada com sucesso');
    }
        return view('keep.create', [
            'nota' => $nota, 
        ]);
    }
}