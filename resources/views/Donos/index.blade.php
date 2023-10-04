<h1>
    <i class="bi bi-list-check"></i>
  Pets
    -
    <a class="btn btn-primary" href="{{ route('pet.create') }}">
     Cadastro de Pets
    </a>
</h1>

{{-- alerts --}}
{{-- @include('layouts.partials.alerts') --}}
{{-- /alerts --}}

<div class="table-responsive">
    <table class="table table-striped  table-hover ">
        <thead>
            <caption> Lista de Funcionario</caption>
            <tr>
                <th class="col-2">#</th>
                <th>Funcionarios</th>
                <th>Funcionarios Cadastrados</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($donos as $dono)
                <tr>
                    <td scope="row">
                        <div class="flex-column">
                                {{-- ver --}}
                                <a class="btn btn-success"
                                    href="{{ route('pet.show',
                                                ['id'=>$dono->id_dono]
                                                ) }}">
                                    <i class="bi bi-eye"></i>
                                </a>
                            {{-- editar --}}
                            <a class="btn btn-dark"
                                href="{{ route('dono.edit', ['id' => $dono->id_dono]) }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            {{-- excluir --}}
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalExcluir"
                                data-identificacao="{{ $dono->id_dono }}"
                                data-url="{{ route('dono.destroy',
                                 ['id' => $dono->id_dono]) }}">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                    <td>
                        {{ $dono->dono }}
                    </td>
                    <td>
                          {{-- {{ $pet->pet()->count() }} --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
