@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">  
            <form enctype="multipart/form-data" action="{{ route('colors.save') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control " name="id" id="id" readonly >
        
            </div>
            <div class="mb-3">
                <label for="description">Descrição</label>
                <input type="text" class="form-control " id="description" name="description" value="{{ old('description')}}" required>
                <small class="form-text text-muted text-danger">Preencha este campo, por favor.</small>
            </div>
            <div class="mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName"  >
         
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Foto</label>
                <input class="form-control" type="file" id="photo">
            </div>
            <button class="btn btn-tertiary " type="submit">Salvar</button>
            </form>
            </div>
        </div>
    </div>
</div>  
@endsection