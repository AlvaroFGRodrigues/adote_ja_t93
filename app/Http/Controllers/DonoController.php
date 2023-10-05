<?php

namespace App\Http\Controllers;

use App\Models\{
    Dono,
    Adocao,
    Status,
    DonoHasResidencia,
    Donos,
};

use Illuminate\Http\Request;

class DonoController extends Controller
{
    public function index()
    {
        $donos = Donos::orderBy('nome')->paginate(10);
        return view('donos.index')
            ->with(compact('donos'));
    }

    public function create()
    {
        $dono = null;
        return view('donos.form')
            ->with(compact('dono'));
    }


    public function store(Request $request)
    {
       DonoController::create($request->all());
        return redirect()
            ->route('dono.index')
            ->with('novo', 'Dono cadastrado com sucesso!');
    }

    public function show(int $id )
    {
        $dono =DonoController::with([
            'dono',
            'dono.adocao',
            'dono.status',
            'dono.dono_has_residencia'


        ])->find($id);

        return view('dono.show')
            ->with(compact('dono'));
    }


    public function edit(int $id)
    {
        $dono =DonoController::find($id);
        return view('dono.form')
            ->with(compact('dono'));
    }

    public function update(Request $request, int $id)
    {
        $dono =DonoController::find($id);
        $dono->update($request->all());
        return redirect()
            ->route('donos.index')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
       DonoController::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
