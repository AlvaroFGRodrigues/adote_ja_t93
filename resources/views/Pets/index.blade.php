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
            <caption> Lista de Pets</caption>
            <tr>
                <th class="col-2">#</th>
                <th>Pet</th>
                <th>Pets Cadastrados</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($pets as $pet)
                <tr>
                    <td scope="row">
                        <div class="flex-column">
                                {{-- ver --}}
                                <a class="btn btn-success"
                                    href="{{ route('pet.show',
                                                ['id'=>$pet->id_pet]
                                                ) }}">
                                    <i class="bi bi-eye"></i>
                                </a>
                            {{-- editar --}}
                            <a class="btn btn-dark"
                                href="{{ route('pet.edit', ['id' => $pet->id_pet]) }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            {{-- excluir --}}
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalExcluir"
                                data-identificacao="{{ $pet->id_pet }}"
                                data-url="{{ route('pet.destroy',
                                 ['id' => $pet->id_pet]) }}">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </td>
                    <td>
                        {{ $pet->pet }}
                    </td>
                    <td>
                          {{-- {{ $pet->pet()->count() }} --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
