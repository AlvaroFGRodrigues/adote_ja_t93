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

    // /\*\*
    // Display a listing of the resource.

    // */

    public function index()

    {

      $dono = Donos::orderBy('id_dono','desc');

      //->paginate(10);
    return view('donos.index');

        //\->with(compact('dono$dono'));

    }



    // /\*\*
    // Show the form for creating a new resource.

    // */

    public function create()

    {

      $dono = null;

      return view('donos.form')->with(compact('donos'));
    }

    // /\*\*
    // Store a newly created resource in storage.

    // */

    public function store(Request $request)

    {

      // dd($request->all());
        Donos::create($request->all());

        return redirect()->route('donos.index')->with('novo', 'Donos cadastrado com sucesso!');

    }



    // /\*\*
    // Display the specified resource.

    // */

    public function show(int $id )
    {
        $dono=Donos::with([
            'id_dono',
            'nome',


        ])->find($id
    );

        return view('donos.show')
            ->with(compact('dono'));
    }



    // /\*\*
    // Show the form for editing the specified resource.

    // */

    public function edit(Donos $id)

    {

      $dono = Donos::find($id)->first();

      return view('donos.form')

          ->with(compact('dono'));
    }

    // /\*\*
    // Update the specified resource in storage.

    // */

    public function update(Request $request, Int $id)

    {

      $dono = Donos::find($id);

      $dono->update($request->all());

      return redirect()

          ->route('donos.index')
->with('atualizado', ' Donos Atualizado com sucesso!');
    }

    // /\*\*
    // Remove the specified resource from storage.

    // */

    public function destroy(int $id)

    {

      Donos::find($id)->delete();

      return redirect()

          ->back()

          ->with('excluido', 'Excluído com sucesso!');
    }

    }
