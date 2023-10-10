@extends('layouts.base')
@section('content')
    <h1>
        <i class="bi bi-list-check"></i>
        Pet: {!! $pet->id_pet !!}
    </h1>

    </p>
    <div class="table-responsive">
        <table class="table table-striped  table-hover ">
            <thead>
                <caption>Listas de Lancamentos - {{ $pets->pet()->count() }}</caption>
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
                @foreach ($pets->pet()->get() as $pet)
                    <tr
                        @if ($pets->id_pet == 2)
                            class="table-danger"
                        @endif
                    >
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td scope="row">{{ $pet->id_pet}}</td>
                        <td>{!! $pet->tipo->tipo !!}</td>
                        <td>{!! $pet->usuario->name !!}</td>
                        <td>{{ $pet->descricao }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
    @section('scripts')
        @parent
    @endsection
