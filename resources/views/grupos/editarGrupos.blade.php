@extends('layout.base');

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
        <!--Mensaje Flash-->
        @if(session('grupoModificado'))
        <div class="alert alert-success text-center">
            {{ session ('grupoModificado')}}
        </div>
        @endif

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
                <form action="{{ route('editG',$grupo->id)}}" method="POST">
                @csrf @method('PATCH')
                    <div class="card-header text-center">MODIFICAR GRUPO</div>
                    
                    <div class="card-body"> 
                    <div class="row form-group">
                         <label for="" class="col-2">Semestre</label>
                         <input type="text" name="semestre" class="form-control col-md-9" value="{{ $grupo->semestre}}">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Grupo</label>
                         <input type="text" name="grupo" class="form-control col-md-9" value="{{ $grupo->grupo}}">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Turno</label>
                         <input type="text" name="turno" class="form-control col-md-9" value="{{ $grupo->turno}}">
                        </div>
                        <div class="row form-group">
                        <button type="submit" class="btn btn-success col-md-9 offset-2"><i class="fas fa-save"></i> Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <a class="btn btn-success mb-5" href="{{ url('/grupos')}}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
</div>