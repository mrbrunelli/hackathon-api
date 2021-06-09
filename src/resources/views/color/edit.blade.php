@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="fs-5 fw-bold mb-0">Cadastro de Cores</h2>
                    </div>

                </div>
            </div>
            <div class="card-body">  
            <form  action="{{ route('colors.update', $color->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control " name="id" id="id" readonly value="{{ $color->id }}" >
        
            </div>
            <div class="mb-3">
                <label for="description">Descrição</label>
                <input type="text" class="form-control " id="description" name="description" value="{{ $color->description }}" required>
            </div>
            <button class="btn btn-tertiary " type="submit">Salvar</button>
            </form>
            </div>
        </div>
    </div>
</div>  
@endsection