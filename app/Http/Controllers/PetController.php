<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Illuminate\Pagination\Paginator;

use App\Models\{
   Adocao,
   DonoHasResidencia,
   Donos,
   Funcionario,
   Genero,
   Pet,
   Porte,
   Residencia,
   Status,
   StatusAdocao,
   TamanhoResidencia,
   TipoMoradia,
   Tipos
};

/**
 * Bootstrap any application services.
 */

class PetController extends Controller

{
//     public function boot(): void
// {
//     Paginator::useBootstrapFive();
//     Paginator::useBootstrapFour();
// }

    public function index()
    {
        // $pets =Pet::orderBy('nome_pet')->paginate(10);
        // return view('pets.index')
        //     ->with(compact('pets'));

        //     $lancamentos = Pet::with(['id_pet', 'nome_pet', 'porte'])
        //     ->where(function ($query) use (
        //         $search,

        //         $id_pet,
        //         $nome_pet,
        //         $porte,

        //     ) {
        //         if ($search) {
        //             $query->where('descricao', 'like', "%$search%");
        //         }

        //         if ($id_pet) {
        //             $query->where('pet', '>=', $id_pet);
        //         }

        //         if ($nome_pet) {
        //             $query->where('vencimento', '<=', $nome_pe);
        //         }
        //         if ($porte) {
        //             $query->where('id_tipo', $porte);
        //         }

        //     })->orderBy('id_pet', 'desc')
        //         ->paginate(40);

        //         return view('pet.index')
        //         ->with(compact(
        //             'pets',
        //             'porte',
        //             'tipo'
        //         ));
    }

    public function create()
    {
        $pet = null;
        $portes = Porte::class;
        $generos = Genero::class;
        $tipos = Tipos::class;

        return view('pets.form')
            ->with(compact('pet','portes','generos','tipos'));
    }


    public function store(Request $request)
    {
    //    dd($request->all());
        $pet = Pet::create($request->all());
        return redirect()
            ->route('pet.index')
            ->with('novo', 'Pet cadastrado com sucesso!');
    }

    public function show(int $id )
    {
        $pet =Pet::with([
            'pet',
            'pet.tipos',
            'pet.portes',
            'pet.generos'
        ])->find($id);

        return view('pets.show')
            ->with(compact('pet'));
    }


    public function edit(int $id)
    {
        $pet =Pet::find($id);
        $portes = Porte::class;
        $generos = Genero::class;
        $tipos = Tipos::class;

        return view('pets.form')
            ->with(compact('pet','portes','generos','tipos'));
    }

    public function update(Request $request, int $id)
    {
        $pet =Pet::find($id);
        $pet->update($request->all());
        return redirect()
            ->route('pets.index')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
       Pet::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
