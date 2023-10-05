<form
    action="{{
    $dono
    ?
    route('dono.update',['id'=>$dono->id_dono])
    :
    route('dono.store')
    }}
    "
    method="post" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="funcioanrio_custo" class="form-label">dono*</label>
            <input class="form-control"
            type="text"
            id="dono"
            name="dono"
            value="{{
            $dono ?
            $dono->dono_custo  :
            old('dono')
            }}"
            required>
        </div>

        <div class="col-md-2">
            <input class="btn btn-primary mt-4" type="submit"
        value="{{$dono ?
            'Atualizar' :
            'Cadastrar'
            }}">
        </div>


    </form>
