<?php

namespace RomSys\Http\Controllers;

use RomSys\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{

    public function index()
    {
        $dat=Empleado::all();
        return view('VEmpleado.indexEmp',compact('dat'));    
    }
    public function create()
    {
        return view('VEmpleado.crearEmp');
    }
    public function store(Request $request)
    {
        Empleado::create($request->all());
        return redirect()->route('empleadourl.index');
    }
    public function show($empleado)
    {
        //
    }
    /*si o si debe ser METODO GET */
    public function edit($idEmpleado)
    {
        $var=Empleado::find($idEmpleado);
        return view('VEmpleado.editarEmp',compact('var'));

    }
    public function update(Request $request, $idEmpleado)
    {
        Empleado::find($idEmpleado)->update($request->all());
        return redirect()->route('empleadourl.index');
    }
    public function destroy($idEmpleado)
    {
        Empleado::find($idEmpleado)->delete();
        return redirect()->route('empleadourl.index');
    }
}
