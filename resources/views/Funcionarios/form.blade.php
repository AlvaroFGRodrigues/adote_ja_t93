<form
    action="{{
    $pet
    ?
    route('funcionario.update',['id'=>$funcionario->id_funcionario])
    :
    route('funcionario.store')
    }}
    "
    method="post" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="funcioanrio_custo" class="form-label">Funcionario*</label>
            <input class="form-control"
            type="text"
            id="funcionario"
            name="funcionario"
            value="{{
            $funcionario ?
            $funcionario->funcionario_custo  :
            old('funcionario')
            }}"
            required>
        </div>

        <div class="col-md-2">
            <input class="btn btn-primary mt-4" type="submit"
        value="{{$pet ?
            'Atualizar' :
            'Cadastrar'
            }}">
        </div>


    </form>
