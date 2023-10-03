<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Tipos;
use App\Models\Porte;
use App\Models\Genero;
use App\Models\Adocao;
use Illuminate\Http\Request;

class PetController extends Controller

{

    public function index()
    {
        $pets =Pet::orderBy('nome_pet')->paginate(10);
        return view('pet.index')
            ->with(compact('pets'));
    }

    public function create()
    {
        $pet = null;
        return view('pet.form')
            ->with(compact('pet'));
    }


    public function store(Request $request)
    {
       PetController::create($request->all());
        return redirect()
            ->route('pet.index')
            ->with('novo', 'Pet cadastrado com sucesso!');
    }

    public function show(int $id )
    {
        $pet =PetController::with([
            'pet',
            'pet.tipos',
            'pet.portes',
            'pet.generos'
        ])->find($id);

        return view('pet.show')
            ->with(compact('pet'));
    }


    public function edit(int $id)
    {
        $pet =PetController::find($id);
        return view('pet.form')
            ->with(compact('pet'));
    }

    public function update(Request $request, int $id)
    {
        $pet =PetController::find($id);
        $pet->update($request->all());
        return redirect()
            ->route('pet.index')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
       PetController::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
