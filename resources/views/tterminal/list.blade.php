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
                </tr>
            </thead>
            <tbody>
              @foreach($tts as $tt)
                <tr>
                    <td>{{$tt->id_tt}}</td>
                    <td>{{$tt->nombre}}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
    </div>
</div>
@endsection