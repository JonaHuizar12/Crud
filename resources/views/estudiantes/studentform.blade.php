@extends('layout.base');

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
        <!--Mensaje Flash-->
        @if(session('estudianteGuardado'))
        <div class="alert alert-success text-center">
            {{ session ('estudianteGuardado')}}
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
                <form action="{{ route('save')}}" method="POST">
                @csrf
                    <div class="card-header text-center">AGREGAR ESTUDIANTE</div>
                    
                    <div class="card-body"> 
                        <div class="row form-group">
                         <label for="" class="col-2">Grupo</label>
                         <select name="grupo" class="form-control col-md-9">
                         <option value="">Seleccione un grupo</option>
                         @foreach($grupos as $grupo)
                         <option value="{{$grupo['id']}}">{{$grupo['grupo']}}</option>
                         @endforeach
                         </select>
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Nombre</label>
                         <input type="text" name="nombre" value ="{{ old('nombre') }}" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Apellidos</label>
                         <input type="text" name="apellidos" value ="{{ old('apellidos') }}" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Edad</label>
                         <input type="text" name="edad" value ="{{ old('edad') }}" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Email</label>
                         <input type="text" name="email" value ="{{ old('email') }}" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Teléfono</label>
                         <input type="text" name="telefono" value ="{{ old('telefono') }}" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                        <button type="submit" class="btn btn-success col-md-9 offset-2"><i class="fas fa-save"></i> Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <a class="btn btn-success mb-5" href="{{ url('/')}}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
</div>