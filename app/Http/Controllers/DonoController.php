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
     public function index(Request $request)
    {
        $search = $request->get('search');
        $id_dono = $request->get('id_dono');
        $id_status = $request->get('id_status');

        $donos = Donos::with(['DonoHasResidencia', 'status','adocao'])
            ->where(function ($query) use (
                $search,
                $id_dono,
                $id_status
            ) {

                if ($search) {
                    $query->orwhere('nome','like' , "%$search%");
                    $query->orwhere('id_dono',  $search);
                }
                if ($id_dono) {
                    $query->orwhere('id_dono', $id_dono);
                }
                if ($id_status) {
                    $query->orwhere('id_status', $id_status);
                }

            })->orderBy('id_status', 'desc')
                 ->paginate(40)
                ;

                $id_status = id_status::class;

                return view('Donos.index')
                ->with(compact(
                    'status',
                    'id_status',
                ));
    }

    public function create()
    {
        $dono = null;
        $listaDestatus = Status::class;
        return view('donos.form')
            ->with(compact('dono','listaDestatus'));
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
