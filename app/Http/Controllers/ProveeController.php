<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provee;

class ProveeController extends Controller
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
        $provees = Provee::all();
        return view('provee.index')->with('provees', $provees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provees = new Provee();

        $provees->fecha = $request->get('fecha');
        $provees->precio = $request->get('precio');
        $provees->forma_pago = $request->get('forma_pago');

        $provees->save();

        return redirect('/provees');
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
        $provee = Provee::find($id);
        return view('provee.edit')->with('provee', $provee);
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
        $provee = Provee::find($id);

        $provee->fecha = $request->get('fecha');
        $provee->precio = $request->get('precio');
        $provee->forma_pago = $request->get('forma_pago');

        $provee->save();

        return redirect('/provees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provee = Provee::find($id);
        $provee->delete();
        return redirect('/provees');
    }
}
