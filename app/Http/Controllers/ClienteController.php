<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Cliente;

class ClienteController extends Controller
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
        $clientes = Cliente::all();
        return view('cliente.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
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
            'nombre'=>'required|max:200',
            'numero'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8|max:15|unique:clientes',
            'email'=>'required|email|max:200|unique:clientes',
            'direccion'=>'required|max:200',
        ]);

        $clientes = new Cliente();

        $clientes->nombre = $request->get('nombre');
        $clientes->numero = $request->get('numero');
        $clientes->email = $request->get('email');
        $clientes->direccion = $request->get('direccion');

        $clientes->save();

        return redirect('/clientes');
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
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente', $cliente);
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
            'nombre'=>'required|max:200',
            'numero'=>['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:15',Rule::unique('clientes')->ignore($id)],
            'email'=>['required','email','max:200',Rule::unique('clientes')->ignore($id)],
            'direccion'=>'required|max:200',
        ]);

        $cliente = Cliente::find($id);

        $cliente->nombre = $request->get('nombre');
        $cliente->numero = $request->get('numero');
        $cliente->email = $request->get('email');
        $cliente->direccion = $request->get('direccion');

        $cliente->save();

        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/clientes');
    }

    public function contar()
    {
        $count = Cliente::count();
        return $count;
    }
}
