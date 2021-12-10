<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
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
        $proveedors = Proveedor::all();
        return view('proveedor.index')->with('proveedors', $proveedors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'numero'=>'required|numeric|min:5',
            'email'=>'required|email',
            'direccion'=>'required',
        ]);

        $proveedors = new Proveedor();

        $proveedors->nombre = $request->get('nombre');
        $proveedors->numero = $request->get('numero');
        $proveedors->email = $request->get('email');
        $proveedors->direccion = $request->get('direccion');

        $proveedors->save();

        return redirect('/proveedors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedor.edit')->with('proveedor', $proveedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required',
            'numero'=>'required|numeric|min:5',
            'email'=>'required|email',
            'direccion'=>'required',
        ]);

        $proveedor = Proveedor::find($id);

        $proveedor->nombre = $request->get('nombre');
        $proveedor->numero = $request->get('numero');
        $proveedor->email = $request->get('email');
        $proveedor->direccion = $request->get('direccion');

        $proveedor->save();

        return redirect('/proveedors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->delete();
        return redirect('/proveedors');
    }

    public function contar()
    {
        $count = Proveedor::count();
        return $count;
    }
}
