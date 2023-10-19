@extends('layouts.base')
@section('content')
<h1 class="mx-3 my-4">
    <i class="bi bi-wallet2"></i>
    @if ($dono)
    Editar Donos:
    Nº {{ $dono->id_dono}}
    @else
    Novo Dono
    @endif
</h1>
<form action="{{
        $dono?
        route('dono.update',['id'=>$dono->id_dono]):
        route('dono.store')
    }}" method="post" enctype="multipart/form-data" class="row g-3">
    @csrf

    <div class="col-md-9">
        <label class="form-label" for="nome">Nome*</label>
        <input class="form-control" type="text" id="nome" name="nome"
        value="{{
            $dono ?
            $dono->nome :
            old('nome')
          }}"
          required>
    </div>


    <div class="col-md-7">
        <label class="form-label" for="nome">CPF*</label>
        <input class="form-control" type="text" id="nome" name="nome"
        value="{{
            $dono ?
            $dono->cpf :
            old('nome')
          }}"
          required>
    </div>

    <div class="col-md-3">
        <label class="form-label" for="descricao">Data De Nascimento*</label>
        <input class="form-control" type="date" id="nascimento" name="nascimento"
        value="{{
            $dono ?
            $dono->nascimento :
            old('nascimento')
          }}"
          required>
    </div>


    {{-- <div class="col-md-3">
        <label class="form-label" for="anexo">Anexo</label>
        <input class="form-control" type="file" id="anexo" name="anexo"
        value="{{
            $dono ?
            $dono->descricao :
            old('descricao')
          }}"
          required>
    </div> --}}


    <div class="col-md-5">
        <label class="form-label" for="email">Email*</label>
        <input class="form-control" type="text" id="email" name="email"
        value="{{
            $dono ?
            $dono->email :
            old('email')
          }}"
          required>
    </div>

    <div class="col-md-5">
        <label class="form-label" for="telefone">Telefone*</label>
        <input class="form-control" type="number" id=" telefone" name=" telefone"
        value="{{
            $dono ?
            $dono-> telefone :
            old(' telefone')
          }}"
          required>
    </div>



    <div class="col-md-12">
        <label class="form-label" for="descricao">Descrição*</label>
        <input class="form-control" type="text" id="descricao" name="descricao"
        value="{{
            $dono ?
            $dono->descricao :
            old('descricao')
          }}"
          required>
    </div>


        <label class="form-label" for="motivo">Motivo Da Adoção*</label>
        <textarea name="motivo" id="motivo" cols="50" rows="10"></textarea>

    </div>

    <br>
    <div class="col-md-2 offset-md-9">
        <input class="btn btn-primary" type="submit"
         value="{{ $dono ? 'Atualizar' : 'Cadastrar' }}"
         >
    </div>






</form>
@endsection
@section('scripts')
@parent
@endsection
