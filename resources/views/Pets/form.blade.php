<form
    action="{{
    $pet
    ?
    route('pet.update',['id'=>$pet->id_pet])
    :
    route('pet.store')
    }}
    "
    method="post" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="pet_custo" class="form-label">dono*</label>
            <input class="form-control"
            type="text"
            id="pet"
            name="pet"
            value="{{
            $pet ?
            $pet->pet_custo  :
            old('pet')
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
