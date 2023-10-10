<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teste</title>
</head>
</html>
@extends('layouts.base')
@section('content')
<h1>
    <i class="bi bi-wallet2"></i>
    - Lista de Donos
    |
    <a class="btn btn-primary" href="{{ route('dono.create') }}">
        Cadastro de Donos
    </a>
</h1>

{{-- alerts --}}
@include('layouts.partials.alerts')
{{-- /alerts --}}
{{-- paginação --}}
{{-- {!! $donos->appends([
                            'search'=>request()->get('search','')
                        ])->links() !!} --}}
                        {{ $donos->links() }}
{{-- /paginação --}}
{{-- pesquisa --}}
<form action="{{ route('dono.index') }}" method="get">

<div class="row ">
        <div class="col-md-5">
            Nome do dono
            <input class="form-control col-md-6 " type="search" name="search" id="search"
                placeholder="Digite o nome do Pet..."
                value="{{ old('search',request()->get('search')) }}">
        </div >
        {{-- <div class="col-md-5">
            Clientes
            <input class="form-control col-md-6" type="search" name="search" id="search"
                placeholder="Digite o nome do Cliente..."
                value="{{ old('search',request()->get('search')) }}">
        </div> --}}
        {{-- data inicial --}}
        {{-- <div class="col-md-4">
            <label class="form-label" for="dt_inicial">
                Data inicial
            </label>
            <input class="form-control"
            type="date" name="dt_inicial" id="dt_inicial">
        </div> --}}
        {{-- /data inicial --}}
        {{-- data final --}}
        {{-- <div class="col-md-4">
            <label class="form-label" for="dt_final">
                Data final
            </label>
            <input
            class="form-control" type="date"
            name="dt_final" id="dt_final">
        </div> --}}
        {{-- /data final --}}
        <div class="col-md-3">
            <label for="id_dono" class="form-label">Status</label>
            <select id="id_dono" name="id_dono" class="form-select" >
                <option value="">Escolha...</option>
                @foreach ($donos as $dono )
                <option value="{{$dono->dono}}">
                    {{ $dono->donos}}
                </option>
                @endforeach
            </select>
        </div>

        <div>
            <br>
            <input class="btn btn-success col-md-1" type="submit" value="Pesquisar">
        </div>

        @if(request()->get('search') !='')
        <a class="btn btn-primary col-md-1"
            href="{{ route('donos.index') }}">
          Limpar
        </a>
        @endif

    </form>
</div>
{{-- /pesquisa --}}
<div class="table-responsive">
    <table class="table table-striped  table-hover ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Dono</th>
                <th>Apto</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($donos as $dono)
            <tr>
                <td>{{$dono->id_dono}}</td>
                <td>{{ $dono->nome}}</td>
                <td>{{$dono->apto}}</td>
                {{-- <td>{{$dono->nascimento}}</td> --}}
                {{-- <td>{{$dono->email}}</td> --}}
                {{-- <td>{{$dono->telefone}}</td> --}}
                {{-- <td>{{$dono->cpf}}</td> --}}
            </tr>

            @endforeach


        </tbody>
    </table>
</div>
</table>
</div>



{{-- Modal Excluir --}}
@include('layouts.partials.modalExcluir')
{{-- /Modal Excluir --}}
@endsection
@section('scripts')
@parent

@endsection
