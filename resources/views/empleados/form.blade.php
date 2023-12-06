

<label for="nombre">{{'nombre'}}</label>
<input type="text" name="nombre" id="nombre" 

value="{{ isset($empleado->nombre)?$empleado->nombre:'' }}"
>
<br>
<label for="direccion">{{'direccion'}}</label>
<input type="text" name="direccion" id="direccion" 
value="{{ isset($empleado->direccion)?$empleado->direccion:'' }}"
>
<br>
<label for="cedula">{{'cedula'}}</label>
<input type="text" name="cedula" id="cedula"
value="{{ isset($empleado->cedula)?$empleado->cedula:'' }}"
>
<br>
<label for="telefono">{{'telefono'}}</label>
<input type="text" name="telefono" id="telefono"
value="{{ isset($empleado->telefono)?$empleado->telefono:'' }}"
>
<br>

<input type="submit" value="{{$Modo=='crear'?'Agregar':'Modificar'}}">
<a href="{{url('empleados')}}">REGRESAR</a>