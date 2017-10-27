<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Http\Requests\AlunoRequest;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function lista()
    {
        $dados = Aluno::all();

        return view('aluno.index', compact('dados'));
    }
    public function novo()
    {
        return view('aluno.form');
    }

    public function salvar(AlunoRequest $dados)
    {
        Aluno::create($dados->all());
        return redirect(route('aluno.index'));
    }

}
