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

    public function index(Request $request)
    {
        $search = $request->get('search');
        $id_porte = $request->get('id_porte');

        $pets = Pet::with(['tipos', 'porte', 'genero'])
            ->where(function ($query) use (
                $search,
                $id_porte,
            ) {

                if ($search) {
                    $query->orwhere('nome_pet','like' , "%$search%");
                    $query->orwhere('id_pet',  $search);
                }
                if ($id_porte) {
                    $query->orwhere('id_porte', $id_porte);
                }

            })->orderBy('id_pet', 'desc')
                ->paginate(40);

                $portes = Porte::class;

                return view('Pets.index')
                ->with(compact(
                    'pets',
                    'portes',
                ));
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
