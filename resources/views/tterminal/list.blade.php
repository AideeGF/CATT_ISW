@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h4>Lista de Trabajos Terminales</h4>
    </div>
    <div class="panel-body">
    <div class="table-container">
        <table class="table table-bordred table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Alumnos</th>
                    <th>Directores</th>
                    <th>Sinodales</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tts as $tt)
                <tr>
                    <td>{{$tt->id_tt}}</td>
                    <td>{{$tt->nombre}}</td>
                    <td>
                        <ul>
                        @foreach($tt->alumnos as $alumno)
                                <li>{{ $alumno->nombre }}</li>
                        @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                        @foreach($tt->directores as $director)
                                <li>{{ $director->nombre }}</li>
                        @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                        @foreach($tt->sinodales as $sinodal)
                                <li>{{ $sinodal->nombre }}</li>
                        @endforeach
                        </ul>
                    </td>
                    <td>
                     <button class="btn btn-primary btn-custom waves-effect waves-light" type="button">Editar</button>
                     <a href="{{ url('/eliminar_tt/') .'/'.$tt->id }}"><button class="btn btn-danger btn-custom waves-effect waves-light" type="button">Eliminar</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            
        </table>
    </div>
    </div>
</div>
@endsection