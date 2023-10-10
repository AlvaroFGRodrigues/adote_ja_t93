@extends('layouts.base')
@section('content')
<h1 class="mx-3 my-4">
    <i class="bi bi-wallet2"></i>
    @if ($pet)
    Editar Pets:
    Nº {{ $pets->id_pet}}
    @else
    Novo Pet
    @endif
</h1>
<form action="{{
        $pet?
        route('pet.update',['id'=>$pets->id_pet]):
        route('pet.store')
    }}" method="post" enctype="multipart/form-data" class="row g-3">
    @csrf
    {{-- <div class="col-md-3">
        <label for="id_status" class="form-label">Status*</label>
        <select id="id_status" name="id_status" class="form-select" required>
            <option value="">Escolha...</option>
                @foreach ($listaDestatus::orderBy('status')->get() as $status )
                    <option value="{{$status->id_status}}"
                        @selected(
                            (
                                $status &&
                                $status->id_status == $status->id_status
                            )
                            ||
                            old('id_status') == $status->id_status
                        )
                    >
                        {{ $status->status}}
                    </option>
                @endforeach
        </select>
    </div> --}}

    <div class="col-md-2">
        <label for="id_porte" class="form-label"></label>
        <select name="id_porte" id="id_porte" class="form-select">
            @foreach ( $portes::all() as $item)
                <option value="{{$item->id_porte}}">
                {{$item->porte}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2">
        <label for="id_genero" class="form-label"></label>
        <select name="id_genero" id="id_genero" class="form-select">
            @foreach ($generos::all() as $item)
                <option value="{{$item->id_genero}}">
                {{$item->genero}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2">
        <label for="id_tipo" class="form-label"></label>
        <select name="id_tipo" id="id_tipo" class="form-select">
            @foreach ( $tipos::all() as $item)
                <option value="{{$item->id_tipo}}">
                {{$item->tipo}}
                </option>
            @endforeach
        </select>
    </div>



    <div class="col-md-9">
        <label class="form-label" for="pet">Nome*</label>
        <input class="form-control" type="text" id="nome_pet" name="nome_pet"
        value="{{
            $pet ?
            $pets->nome_pet :
            old('nome_pet')
          }}"
          required>
    </div>


    {{-- <div class="col-md-7">
        <label class="form-label" for="nome_pet">CPF*</label>
        <input class="form-control" type="text" id="nome_pet" name="nome_pet"
        value="{{
            $dono ?
            $dono->cpf :
            old('nome_pet')
          }}"
          required>
    </div> --}}

    <div class="col-md-3">
        <label class="form-label" for="idade_pet">Idade*</label>
        <input class="form-control" type="number" id="idade_pet" name="idade_pet"
        value="{{
            $pet ?
            $pets->idade_pet :
            old('idade_pet')
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
        <label class="form-label" for="raca_pet">Raça do Pet*</label>
        <input class="form-control" type="text" id="raca_pet" name="raca_pet"
        value="{{
            $pet ?
            $pets->raca_pet :
            old('raca_pet')
          }}"
          required>
    </div>

    {{-- <div class="col-md-12">
        <label class="form-label" for="descricao">Descrição*</label>
        <input class="form-control" type="text" id="descricao" name="descricao"
        value="{{
            $pet ?
            $pets->descricao :
            old('descricao')
          }}"
          required>
    </div> --}}




    <div class="col-md-5">
        <label class="form-label" for="vacinas">Vacinas*</label>
        <input class="form-control" type="texto" id="vacinas" name="vacinas"
        value="{{
            $pet ?
            $pets-> vacinas :
            old(' vacinas')
          }}"
         >
    </div>




        <div>
        <label class="form-label" for="racao">Ração*</label>
        <input class="form-control" type="texto" id="racao" name="racao"
        value="{{
            $pet ?
            $pets-> racao :
            old(' racao')
          }}"
         >

    </div>


    <label class="form-label" for="historico">Descrição*</label>
    <textarea name="historico" id="historico" cols="50" rows="10"></textarea>



    <br>

    <div class="col-md-3">
        <label class="form-label" for="anexo">Anexo</label>
        <input class="form-control" type="file" id="anexo" name="anexo"
        value="{{
            $pet ?
            $pets->historico :
            old('historico')
          }}"
          >
    </div>


    <br>

    <div class="col-md-2 offset-md-9">
        <input class="btn btn-primary" type="submit"
         value="{{ $pet ? 'Atualizar' : 'Cadastrar' }}"
         >
    </div>






</form>
@endsection
@section('scripts')
@parent
@endsection
