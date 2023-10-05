@extends('layouts.base')
@section('content')
    <h1>
        <i class="bi bi-list-check"></i>
        Centro de Custo: {!! $funcionario->id_funcionario !!}
    </h1>
    <h2>
        Listas de Lancamentos -
        {{ $funcionarios->funcionario()->count() }}
        itens
    </h2>
    <p class="fs-5">
        Total Entradas: R$
        {{ $funcionarios->funcionario()->where('id_funcionario', 1)->sum('valor') }}
        <br>
        Total Saidas: R$ -
        {{ $funcionarios->funcionario()->where('id_funcionario', 2)->sum('valor') }}
        <br>
        Saldo R$
        {{
            $funcionarios->funcionario()->where('id_funcionario', 1)->sum('valor')
            - 
            $funcionarios->funcionario()->where('id_funcionario', 2)->sum('valor')
        }}

    </p>
    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <caption>Listas de Lancamentos - {{ $funcionarios->funcionario()->count() }}</caption>
                <tr>
                    <th class="col-md-1">#</th>
                    <th class="col-md-1">ID</th>
                    <th>Tipo</th>
                    <th>Usuário</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($funcionarios->funcionario()->get() as $funcionario)
                    <tr
                        @if ($funcionarios->id_funcionario == 2)
                            class="table-danger"
                        @endif
                    >
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td scope="row">{{ $funcionario->id_funcionario}}</td>
                        <td>{!! $funcionario->tipo->tipo !!}</td>
                        <td>{!! $funcionario->usuario->name !!}</td>
                        <td>{{ $funcionario->descricao }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
    @section('scripts')
        @parent
    @endsection