@extends('layout.base')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Grupos</h2>
            <a class="btn btn-success mb-5" href="{{ url('/formG')}}"><i class="fas fa-plus"></i> Agregar Grupo</a>
          
            <!--Mensaje Flash-->
            @if(session('success'))
            <div class="alert alert-success text-center">
            {{ session('success')}}
            </div>
            @endif

            <table class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                    <th>Id Grupo</th>
                    <th>Semestre</th>
                    <th>Grupo</th>
                    <th>Turno</th>
                </tr>
                </thead>

                <tbody>
                @foreach($grupos as $groups)
                    <tr>
                        <td>{{ $groups->id}}</td>
                        <td>{{ $groups->semestre}}</td>
                        <td>{{ $groups->grupo}}</td>
                        <td>{{ $groups->turno}}</td>
                        <td>

                        <a href="{{ route('editFormG', $groups->id)}}" class="btn btn-primary mb-2">
                        <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('deleteG', $groups->id)}}" method="POST">
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

            {{ $grupos-> links()}}

        </div>
    </div>

    <a class="btn btn-success mb-5" href="{{ url('/')}}"><i class="fas fa-arrow-circle-left"></i> Volver</a>
</div>
@endsection