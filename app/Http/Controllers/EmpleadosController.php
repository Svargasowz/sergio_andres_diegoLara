<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['empleados']=Empleados::paginate(5);
        return view('empleados.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          //nosotros estamos haciendo que todo lo que ese envia en el metodo storage se guardara en datosEmpleado
          $datosEmpleado=request()->all();

          $datosEmpleado=request()->except('_token');//para poder que toda la informacion cuadre//
    
          Empleados::insert($datosEmpleado);
          //para ver los datos
         // return response()->json($datosEmpleado);//para imprimirlo//
         return redirect('empleados')->with('Mensaje','usuario agregado con exito');
          /**
           * Display the specified resource.
           */
        }


    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empleado=Empleados::findOrFail($id);

        return view('empleados.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
        $datosEmpleado=request()->except(['_token','_method']);
        Empleados::where('id','=',$id)->update($datosEmpleado);//el where hace actualizar de acuerdo al id preguntando si el id es igual al id que me mandaron//
        
        //$empleado=Empleados::findOrFail($id);
        //return view('empleados.edit',compact('empleado'));
        return redirect('empleados')->with('Mensaje','usuario modificado con exito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empleado=Empleados::findOrFail($id);


        Empleados::destroy($id);

        return redirect('empleados')->with('Mensaje','usuario eliminado con exito');
    }
}
