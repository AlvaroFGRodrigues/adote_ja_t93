<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Adocao;
use Illuminate\Http\Request;


class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios =Funcionario::orderBy('nome')->paginate(10);
        return view('funcionarios.index')
            ->with(compact('funcionarios'));
    }

    public function create()
    {
        $funcionario = null;
        return view('funcionarios.form')
            ->with(compact('funcionario'));
    }


    public function store(Request $request)
    {
       FuncionarioController::create($request->all());
        return redirect()
            ->route('funcionarios.index')
            ->with('novo', 'Funcionario cadastrado com sucesso!');
    }

    public function show(int $id )
    {
        $funcionario =FuncionarioController::with([
            'funcionario',
            'funcionario.adocao'


        ])->find($id);

        return view('funcionarios.show')
            ->with(compact('funcionario'));
    }


    public function edit(int $id)
    {
        $funcionario =FuncionarioController::find($id);
        return view('funcionarios.form')
            ->with(compact('funcionario'));
    }

    public function update(Request $request, int $id)
    {
        $funcionario =FuncionarioController::find($id);
        $funcionario->update($request->all());
        return redirect()
            ->route('funcionarios.index')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
       FuncionarioController::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
