<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class SucursalController extends Controller
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
        $sucursals = Sucursal::all();
        return view('sucursal.index')->with('sucursals', $sucursals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursal.create');
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
            'numero' => 'required|numeric|digits_between:5,15|unique:sucursals',
            'direccion' => 'required|max:200',
            'region' => 'required|max:50'
        ]);

        $sucursals = new Sucursal();

        $sucursals->numero = $request->get('numero');
        $sucursals->direccion = $request->get('direccion');
        $sucursals->region = $request->get('region');

        $sucursals->save();

        return redirect('/sucursals');
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
        $sucursal = Sucursal::find($id);
        return view('sucursal.edit')->with('sucursal', $sucursal);
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
            'numero' => ['required','numeric','digits_between:5,15',Rule::unique('sucursals')->ignore($id)],
            'direccion' => 'required|max:200',
            'region' => 'required|max:50'
        ]);

        $sucursal = Sucursal::find($id);

        $sucursal->numero = $request->get('numero');
        $sucursal->direccion = $request->get('direccion');
        $sucursal->region = $request->get('region');

        $sucursal->save();

        return redirect('/sucursals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sucursal = Sucursal::find($id);
        $sucursal->delete();
        return redirect('/sucursals');
    }

    public function contar()
    {
        $count = Sucursal::count();
        return $count;
    }
}

