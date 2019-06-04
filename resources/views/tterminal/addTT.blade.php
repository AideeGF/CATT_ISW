@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h4>Registro de Trabajos Terminales</h4>
    </div>
    
    <form role="form" method="post" action="{{ url('/save_tt') }}" id="form1">

    {{ csrf_field() }}
        <div class="form-group">
        <br>
            <label for="idtt">ID Trabajo Terminal</label>
            <input name="idtt" class="form-control" type="text" placeholder="">
            <label for="name">Nombre</label>
            <input name="name" class="form-control" type="text" placeholder="">
            
        </div>
        <div id="lista_alumnos"></div>
        <BR>
         <button type="button" onclick="addAlumno()" class="btn btn-success">
                + Agregar Alumno
            </button>
        
        <div id="lista_directores"></div>
        <BR>
         <button type="button" onclick="addDirector()" class="btn btn-success">
                + Agregar Director
            </button>
        <BR>

        <div id="lista_sinodales"></div>
        <BR>
         <button type="button" onclick="addSinodal()" class="btn btn-success">
                + Agregar Sinodal
            </button>
        <BR>
        <br>
         <div><button type="submit" class="btn btn-success">Guardar</button></div>
        
    </form>

</div>

<script>
        let no_alumnos = 0;
        function addAlumno() {
            no_alumnos += 1;
            if (no_alumnos <= 3) {
                let rootElement = document.createElement('div');
                rootElement.setAttribute('class', 'form-group');
                let contents = `<label>Nombre Alumno ${no_alumnos}
                                <input name="alumno${no_alumnos}" type="text" class="form-control" />
                                <label>Correo ${no_alumnos}
                                <input name="correo${no_alumnos}" type="mail" class="form-control" />`;
                rootElement.innerHTML = contents;
                document.getElementById("lista_alumnos").appendChild(rootElement);
            } else {
                alert('Un TT no puede tener más de 3 alumnos');
            }
        }

        let no_director = 0;
        function addDirector() {
            no_director += 1;
            if (no_director <= 2) {
                let rootElement = document.createElement('div');
                rootElement.setAttribute('class', 'form-group');
                let contents = `<label>Nombre Director ${no_director}
                                <input name="director${no_director}" type="text" class="form-control" />
                                <label>Correo ${no_director}
                                <input name="correo${no_director}" type="mail" class="form-control" />`;
                rootElement.innerHTML = contents;
                document.getElementById("lista_directores").appendChild(rootElement);
            } else {
                alert('Un TT no puede tener más de 2 directores');
            }
        }

        let no_sinodal = 0;
        function addSinodal() {
            no_sinodal += 1;
            if (no_sinodal <= 3) {
                let rootElement = document.createElement('div');
                rootElement.setAttribute('class', 'form-group');
                let contents = `<label>Nombre Sinodal ${no_sinodal}
                                <input name="sinodal${no_sinodal}" type="text" class="form-control" />
                                <label>Correo ${no_sinodal}
                                <input name="correo${no_sinodal}" type="mail" class="form-control" />`;
                rootElement.innerHTML = contents;
                document.getElementById("lista_sinodales").appendChild(rootElement);
            } else {
                alert('Un TT no puede tener más de 3 sinodales');
            }
        }
</script>
@endsection
