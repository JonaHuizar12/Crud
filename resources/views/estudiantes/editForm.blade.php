@extends('layout.base')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">

         <!--Validación de Errores-->
         @if($errors->any())
            <div class="alert alert-danger text-center">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
            <div class="card">
                <form action="{{ route('edit',$estudiante->id)}}" method="POST">
                @csrf
                    <div class="card-header text-center">MODIFICAR ESTUDIANTE</div>
                    
                    <div class="card-body"> 
                        <div class="row form-group">
                            <label for="" class="col-2">Grupo</label>
                            <select name="grupo_id" class="form-control col-md-9">
                            <option selected>Seleccione un grupo</option>
                            @foreach($grupos as $grupo)
                            <option value="{{$grupo['id']}}" {{old('grupo_id') == $grupo['id'] ? 'selected' : ''}}>{{$grupo['grupo']}}</option>
                            @endforeach
                         </select>
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Nombre</label>
                         <input type="text" name="nombre" class="form-control col-md-9" value="{{ $estudiante->nombre}}" autocomplete = "off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Apellidos</label>
                         <input type="text" name="apellidos" class="form-control col-md-9" value="{{ $estudiante->apellidos}}" autocomplete = "off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Edad</label>
                         <input type="text" name="edad" class="form-control col-md-9" value="{{ $estudiante->edad}}" autocomplete = "off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Email</label>
                         <input type="text" name="email" class="form-control col-md-9" value="{{ $estudiante->email}}" autocomplete = "off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Teléfono</label>
                         <input type="text" name="telefono" class="form-control col-md-9" value="{{ $estudiante->telefono}}" autocomplete = "off">
                        </div>
                        <div class="row form-group">
                        <button type="submit" class="btn btn-success col-md-9 offset-2"><i class="fas fa-save"></i> Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <a class="btn btn-success mb-5" href="{{ url('/')}}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
</div>
@endsection