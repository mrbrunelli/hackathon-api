@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="fs-5 fw-bold mb-0">Editar Veículo</h2>
                    </div>

                </div>
            </div>
            <div class="card-body">  
            <form enctype="multipart/form-data" action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="col">
                <label for="id">ID</label>
                <input type="text" class="form-control " name="id" id="id" readonly value="{{ $vehicle->id }}" >
            </div>
            <div class="col">
                <label for="type">Tipo</label>
                <select name="type" id="type" class="form-control" required onchange="change()">
                    <option  >Selecione o tipo...</option>
                    <option value="new" {{($vehicle->type == 'new') ? "selected" : "" }} >Novo</option>
                    <option value="used" {{($vehicle->type == 'used') ? "selected" : "" }}>Usado</option>
                </select>
            </div>
            <div class="col">
                <label for="model">Modelo</label>
                <input type="text" class="form-control " id="model" name="model" value="{{ $vehicle->model }}" required>
            </div>
            <div class="col">
                <label for="yearmodel">Ano do Modelo</label>
                <input type="text" class="form-control " id="yearmodel" name="yearmodel" value="{{ $vehicle->yearmodel }}" required>
            </div>
            <div class="col">
                <label for="yearmanufacture">Ano de Fabricação</label>
                <input type="text" class="form-control" id="yearmanufacture" name="yearmanufacture" required value="{{ $vehicle->yearmanufacture }}" >
            </div>
            <div class="col">
                <label for="price">Preço</label>
                <input type="text" class="form-control" id="price" name="price" onkeyup="formatarMoeda()"required value="{{number_format($vehicle->price,2,',','.')}}" >
            </div>
            <div class="col">
                <label for="brand_id">Marca</label>
                <select name="brand_id" id="brand" class="form-control" required>
                    @foreach($brands as $brand)
                    <option value="{{$brand->id}}" {{ ($brand->id == $vehicle->brand_id) ? "selected" : "" }} >{{$brand->description}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="color_id">Cor</label>
                <select name="color_id" id="color_id" class="form-control" required>
                    @foreach($colors as $color)
                    <option value="{{$color->id}}" {{ ($color->id == $vehicle->color_id) ? "selected" : "" }} >{{$color->description}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="col">
                <label for="photo" class="form-label">Foto</label>
                <input class="form-control" type="file" id="photo" name="photo" required>
            </div>
            @if(isset($vehicle->photo))
                <img src="{{url('storage/vehicles/'.$vehicle->photo)}}" width="200">
            @endif
            <div class="col">
                <label for="optionals">Optionais</label>
                <textarea type="text" class="form-control" id="optionals" name="optionals" rows="5" required>{{ $vehicle->optionals }}</textarea>
            </div>
            <button class="btn btn-tertiary " type="submit">Salvar</button>
            </form>
            </div>
        </div>
    </div>
</div>  

@endsection

@section('js')
<script>
function change(){
    var type = document.getElementById('type');
    var value_selected = type.options[type.selectedIndex].value;
    if(value_selected == 'new'){
        var marca = document.getElementById('brand');
        for (var i = 0; i < marca.options.length; i++) {
            if (marca.options[i].text === 'Cherry') {
                marca.options[i].selected = true;
                break;
            }
        }
    }
}
    function formatarMoeda() {
        var elemento = document.getElementById('price');
        var valor = elemento.value;

        valor = valor + '';
        valor = parseInt(valor.replace(/[\D]+/g, ''));
        valor = valor + '';
        valor = valor.replace(/([0-9]{2})$/g, ",$1");

        if (valor.length > 6) {
            valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
        }

        elemento.value = valor;
        if(valor == 'NaN') elemento.value = '';
    }
</script>

@endsection