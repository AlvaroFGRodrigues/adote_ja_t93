@extends('layouts.base')
@section('content')
    <h1>
        <i class="bi bi-list-check"></i>
        Donos: {!! $dono->id_dono !!}
    </h1>
    <h2>
        Listas de Lancamentos -
        {{ $donos->dono()->count() }}
        itens
    </h2>
    <p class="fs-5">
        Total Entradas: R$
        {{ $donos->dono()->where('id_dono', 1)->sum('valor') }}
        <br>
        Total Saidas: R$ -
        {{ $donos->dono()->where('id_dono', 2)->sum('valor') }}
        <br>
        Saldo R$
        {{
            $donos->dono()->where('id_dono', 1)->sum('valor')
            -
            $donos->dono()->where('id_dono', 2)->sum('valor')
        }}

    </p>
    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <caption>Listas de Lancamentos - {{ $donos->dono()->count() }}</caption>
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
                @foreach ($donos->dono()->get() as $dono)
                    <tr
                        @if ($donos->id_dono == 2)
                            class="table-danger"
                        @endif
                    >
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td scope="row">{{ $dono->id_dono}}</td>
                        <td>{!! $dono->tipo->tipo !!}</td>
                        <td>{!! $dono->usuario->name !!}</td>
                        <td>{{ $dono->descricao }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
    @section('scripts')
        @parent
    @endsection
