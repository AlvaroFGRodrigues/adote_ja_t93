@extends('layouts.base')

@section('content')

<h1 class="titulo">



    <i class="fa-solid fa-user"></i>
CLIENTES

  |

  <a class="btn btn-primary"

     href="{{ route('dono.create') }}">

      Novo dono

  </a>
</h1>

{{-- alerts --}}

\@include('layouts.partials.alerts')

{{-- /alerts --}}





{{-- paginação --}}

    {{-- {!! $dono->links() !!} --}}

{{-- /paginação --}}





<div class="table-responsive">

    <table class="table table-striped  table-hover ">

        <thead>

            <tr>

                <th id="colunas">CRUD</th>

                <th id="colunas">Nome:</th>

                <th id="colunas">Nascimento:</th>

                <th id="colunas">CPF:</th>

                <th id="colunas">E-mail:</th>

                <th id="colunas">Endereço:</th>

                <th id="colunas">Cadastrado:</th>

            </tr>

        </thead>

        <tbody class="table-group-divider">

            @forelse ( $dono as $dono  )

            <tr>

                <td scope="row" class="col-2">

                    <div class="flex-column">



                        {{-- ver --}}

                        <a class="btn btn-success"

                            href="{{ route('donos.show',['id_dono'=>$dono->dono])}}">

                            <i class="bi bi-eye"></i>

                        </a>



                        {{-- editar --}}

                        <a class="btn btn-dark"

                                href="{{ route('dono.edit', ['id' => $donos->id_dono]) }}">

                                <i class="bi bi-pencil-square"></i>

                          </a>

                        {{-- excluir --}}

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"

                            data-bs-target="#modalExcluir" data-identificacao="{{ $dono->dono }}"

                            data-url="{{ route('dono.destroy',['id' => $dono->dono]) }}">

                            <i class="bi bi-trash"></i>



                        </button>

                    </div>

                </td>

                <td>{{ $dono->nome }}</td>

                <td>{{ $dono->dt_nascimento }}</td>

                <td>{{ $dono->cpf }}</td>

                <td>{{ $dono->email }}</td>

                <td>{{ $dono->endereco }}</td>

                <td>{{ $dono->created_at->format('d/m/Y \a\s H:i') }}h</td>



            </tr>



            @empty

             <tr>

                <td colspan="8">

                    Nenhum registro retornado

                </td>

             </tr>

            @endforelse

        </tbody>

    </table>

</div>
<style>

.titulo{

    margin: 30px 10px;

}

.titulo a{

    margin-left: 20px

}

#colunas{

    font-size: 17px

}
</style>

{{-- Modal Excluir --}}

@include('layouts.partials.modalExcluir')

{{-- /Modal Excluir --}}

@endsection

@section('scripts')

@parent

@endsection
