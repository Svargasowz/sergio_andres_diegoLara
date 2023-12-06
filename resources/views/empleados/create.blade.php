Seccion para crear empleados
<script>
    /*con el form action estamos mandando toda la informacion a empleados*/
</script>
<form action="{{ url('/empleados')}}" method="post" enctype="multipart/form-data">
    <script>
        //imprimir llave de acceso
        //con lo de csrf de seguridad
    </script>
    {{csrf_field()}}
    @include('empleados.form',['Modo'=>'crear'])
   
</form>