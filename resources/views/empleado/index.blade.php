@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('mensaje')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif




<a href="{{ url('empleado/create')}}" class="btn btn-success"> Registrar nuevo empleado </a>
<br> 
    <div class="table-responsive">
        <table class="table table-light">

            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                <tr class="">
                    <td>{{$empleado->id}}</td>
                    <td>
                        <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
                    </td>
                    <td>{{$empleado->Nombres}}</td>
                    <td>{{$empleado->Apellidos}}</td>
                    <td>{{$empleado->Email}}</td>
                    <td>
                        <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">
                            Editar
                        </a>
                        
                    </td>
                    <td>
                        <form action=" {{ url('/empleado/'.$empleado->id)}}" class="d-inline" method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Seguro que quieres borrar?')" value="Borrar">
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {!! $empleados->links() !!}
    </div>
</div>
@endsection
