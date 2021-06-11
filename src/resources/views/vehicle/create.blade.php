@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="fs-5 fw-bold mb-0">Cadastro de Veículo</h2>
                    </div>

                </div>
            </div>
            <div class="card-body">  
            <form enctype="multipart/form-data" action="{{ route('vehicles.save') }}" method="POST">
            @csrf
            <div class="col">
                <label for="id">ID</label>
                <input type="text" class="form-control " name="id" id="id" readonly >
            </div>
            <div class="col">
                <label for="type">Tipo</label>
                <select name="type" id="type" class="form-control" required>
                    <option  >Selecione o tipo...</option>
                    <option value="new" >Novo</option>
                    <option value="used" >Usado</option>
                </select>
            </div>
            <div class="col">
                <label for="model">Modelo</label>
                <input type="text" class="form-control " id="model" name="model" value="{{ old('model')}}" required>
            </div>
            <div class="col">
                <label for="yearmodel">Ano do Modelo</label>
                <input type="text" class="form-control " id="yearmodel" name="yearmodel" value="{{ old('yearmodel')}}" required>
            </div>
            <div class="col">
                <label for="yearmanufacture">Ano de Fabricação</label>
                <input type="text" class="form-control" id="yearmanufacture" name="yearmanufacture" value="{{ old('yearmanufacture')}}" >
            </div>
            <div class="col">
                <label for="price">Preço</label>
                <input type="text" class="form-control" id="price" name="price" onkeyup="formatarMoeda()" value="{{ old('price')}}" >
            </div>
            <div class="col">
                <label for="brand_id">Marca</label>
                <select name="brand_id" id="brand" class="form-control">
                    @foreach($brands as $brand)
                    <option value="{{$brand->id}}" >{{$brand->description}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="color_id">Cor</label>
                <select name="color_id" id="color_id" class="form-control">
                    @foreach($colors as $color)
                    <option value="{{$color->id}}" >{{$color->description}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="col">
                <label for="photo" class="form-label">Foto</label>
                <input class="form-control" type="file" id="photo" name="photo">
            </div>
            <div class="col">
                <label for="optionals">Optionais</label>
                <textarea type="text" class="form-control" id="optionals" name="optionals" rows="5" >{{ old('optionals')}}</textarea>
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