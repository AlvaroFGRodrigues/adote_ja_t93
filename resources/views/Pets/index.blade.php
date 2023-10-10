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
    - Lista de Pets
    |
    <a class="btn btn-primary" href="{{ route('pet.create') }}">
        Cadastre seu Pet!
    </a>
</h1>

{{-- alerts --}}
@include('layouts.partials.alerts')
{{-- /alerts --}}
{{-- paginação --}}

{{-- /paginação --}}
{{-- pesquisa --}}



    <form action="{{ route('pet.index') }}" method="get">
        <div class="row ">
        <div class="col-md-5">
            Pets
            <input class="form-control col-md-6 " type="search" name="search" id="search"
                placeholder="Digite o nome do Pet..."
                value="{{ old('search',request()->get('search')) }}">
        </div >



        <div class="col-md-3">
            <label for="id_porte" class="form-label">Porte</label>
            <select id="id_porte" name="id_porte" class="form-select" >
                <option value="">Escolha...</option>
                @foreach ($portes::all() as $porte )
                <option value="{{$porte->id_porte}}">
                    {{ $porte->porte}}
                </option>
                @endforeach
            </select>
        </div>

        <div class=" col-md-2">
            <input class="btn btn-success mt-4" type="submit" value="Pesquisar">
        </div>

        @if(request()->get('search') !='' || request()->get('id_porte') !='')
        <div class=" col-md-2">
            <a class="btn btn-primary mt-4"
                href="{{ route('pet.index') }}">
            Limpar
            </a>
        </div>
        @endif
</div>
    </form>

{{-- /pesquisa --}}
<div class="table-responsive">
    <table class="table table-striped  table-hover ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Porte</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($pets as $pet)
            <tr>
                <td>{{$pet->id_pet}}</td>
                <td>{{ $pet->nome_pet}}</td>
                <td>{{$pet->id_porte}}</td>

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
