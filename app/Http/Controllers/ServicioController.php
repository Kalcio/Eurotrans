<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Cliente;
use App\Models\Tipo;
use App\Models\Ruta;
use App\Models\Estado;
use App\Models\Incoterm;
use App\Models\Agente;

class ServicioController extends Controller
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
        $servicios = Servicio::all();
        return view('servicio.index')->with('servicios', $servicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $tipos = Tipo::all();
        $rutas = Ruta::all();
        $estados = Estado::all();
        $incoterms = Incoterm::all();
        $agentes = Agente::all();

        return view('servicio.create')->with(compact('clientes','tipos','rutas','estados','incoterms','agentes'));
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
            'carga'=>'required|max:200',
            'seguro'=>'required|max:200',
            'observaciones'=>'required|max:500',
            'id_cliente'=>'required',
            'id_tipo'=>'required',
            'id_ruta'=>'required',
            'id_estado'=>'required',
            'id_incoterm'=>'required',
            'id_agente'=>'required',
            'carga'=>'required',
            'seguro'=>'required',
        ]);

        $servicios = new Servicio();

        $servicios->carga = $request->get('carga');
        $servicios->seguro = $request->get('seguro');
        $servicios->observaciones = $request->get('observaciones');
        $servicios->id_cliente = $request->get('id_cliente');
        $servicios->id_tipo = $request->get('id_tipo');
        $servicios->id_ruta = $request->get('id_ruta');
        $servicios->id_estado = $request->get('id_estado');
        $servicios->id_incoterm = $request->get('id_incoterm');
        $servicio->id_agente = $request->get('id_agente');
        $servicios->carga = $request->get('carga');
        $servicios->seguro = $request->get('seguro');

        $servicios->save();

        return redirect('/servicios');
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
        $servicio = Servicio::find($id);
        $clientes = Cliente::all();
        $tipos = Tipo::all();
        $rutas = Ruta::all();
        $estados = Estado::all();
        $incoterms = Incoterm::all();
        $agentes = Agente::all();
        
        return view('servicio.edit')->with(compact('servicio', $servicio,'clientes','tipos','rutas','estados','incoterms','agentes'));
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
            'carga'=>'required|max:200',
            'seguro'=>'required|max:200',
            'observaciones'=>'required|max:500',
            'id_cliente'=>'required',
            'id_tipo'=>'required',
            'id_ruta'=>'required',
            'id_estado'=>'required',
            'id_incoterm'=>'required',
            'id_agente'=>'required',
            'carga'=>'required',
            'seguro'=>'required',
        ]);

        $servicio = Servicio::find($id);

        $servicio->carga = $request->get('carga');
        $servicio->seguro = $request->get('seguro');
        $servicio->observaciones = $request->get('observaciones');
        $servicio->id_cliente = $request->get('id_cliente');
        $servicio->id_tipo = $request->get('id_tipo');
        $servicio->id_ruta = $request->get('id_ruta');
        $servicio->id_estado = $request->get('id_estado');
        $servicio->id_incoterm = $request->get('id_incoterm');
        $servicio->id_agente = $request->get('id_agente');
        $servicio->carga = $request->get('carga');
        $servicio->seguro = $request->get('seguro');

        $servicio->save();

        return redirect('/servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = Servicio::find($id);
        $servicio->delete();
        return redirect('/servicios');
    }
}