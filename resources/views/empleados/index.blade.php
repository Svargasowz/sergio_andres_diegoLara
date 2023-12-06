@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<a href="{{url('empleados/create')}}">AGREGAR USUARIO</a> <script>/*De esta forma se colocan los links para poder redireccionar*/</script>

<table class="table table-light">
<thead class="thead-light">
    <tr>
        <th></th>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Acciones</th>
    </tr>
</thead>            

    @foreach($empleados as $empleado)<script>//el foreach lo que hace es designar todos los registros unificarlos y mantenerlos en la variable empleado
    </script>
    <tbody>
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$empleado->cedula}}</td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->telefono}}</td>
            <td>{{$empleado->direccion}}</td>
            <td>
                <a href="{{url('/empleados/'.$empleado->id.'/edit')}}">
                    EDITAR
                </a>
                |
                <form method="post" action="{{url('empleados/'.$empleado->id)}}">
                    {{csrf_field() }}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('Borrar?');">BORRAR</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>