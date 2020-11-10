@extends('layout.base')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Estudiantes</h2>
            <a class="btn btn-success mb-5" href="{{ url('/form')}}"><i class="fas fa-plus"></i> Agregar Estudiante</a>
            <a class="btn btn-success mb-5" href="{{ url('/grupos')}}"><i class="fas fa-list"></i> Lista de Grupos</a>

            <!--Mensaje Flash-->
            @if(session('success'))
            <div class="alert alert-success text-center">
            {{ session ('success')}}
            </div>
            @endif

            <table class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Grupo Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($estudiantes as $students)
                    <tr>
                        <td>{{ $students->id}}</td>
                        <td>{{ $students->grupo_id}}</td>
                        <td>{{ $students->nombre}}</td>
                        <td>{{ $students->apellidos}}</td>
                        <td>{{ $students->edad}}</td>
                        <td>{{ $students->email}}</td>
                        <td>{{ $students->telefono}}</td>

                        <td>

                        <a href="{{ route('editForm', $students->id)}}" class="btn btn-primary mb-2">
                        <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('delete', $students->id)}}" method="POST">
                        @csrf @method('DELETE')

                        <button type="submit" onclick="return confirm('¿Seguro que desea borrar al usuario?');" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                        </form>
                        
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $estudiantes-> links()}}

        </div>
    </div>
</div>
@endsection