<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleado.index')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new Empleado();

        $empleados->rut = $request->get('rut');
        $empleados->nombre = $request->get('nombre');
        $empleados->numero = $request->get('numero');
        $empleados->correo = $request->get('correo');
        $empleados->direccion = $request->get('direccion');

        $empleados->save();

        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $rut
     * @return \Illuminate\Http\Response
     */
    public function show($rut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $rut
     * @return \Illuminate\Http\Response
     */
    public function edit($rut)
    {
        $empleado = Empleado::find($rut);
        return view('empleado.edit')->with('empleado', $empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $rut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rut)
    {
        $empleado = Empleado::find($rut);

        $empleado->nombre = $request->get('nombre');
        $empleado->numero = $request->get('numero');
        $empleado->correo = $request->get('correo');
        $empleado->direccion = $request->get('direccion');

        $empleado->save();

        return redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $rut
     * @return \Illuminate\Http\Response
     */
    public function destroy($rut)
    {
        $empleado = Empleado::find($rut);
        $empleado->delete();
        return redirect('/empleados');
    }

    public function contar()
    {
        $count = Empleado::count();
        return $count;
    }
}
