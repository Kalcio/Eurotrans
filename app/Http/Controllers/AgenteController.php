<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agente;

class AgenteController extends Controller
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
        $agentes = Agente::all();
        return view('agente.index')->with('agentes', $agentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agente.create');
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

        $agentes = new Agente();

        $agentes->nombre = $request->get('nombre');
        $agentes->numero = $request->get('numero');
        $agentes->email = $request->get('email');
        $agentes->direccion = $request->get('direccion');

        $agentes->save();

        return redirect('/agentes');
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
        $agente = Agente::find($id);
        return view('agente.edit')->with('agente', $agente);
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

        $agente = Agente::find($id);

        $agente->nombre = $request->get('nombre');
        $agente->numero = $request->get('numero');
        $agente->email = $request->get('email');
        $agente->direccion = $request->get('direccion');

        $agente->save();

        return redirect('/agentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agente = Agente::find($id);
        $agente->delete();
        return redirect('/agentes');
    }
}
