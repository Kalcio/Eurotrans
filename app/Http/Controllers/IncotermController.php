<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incoterm;

class IncotermController extends Controller
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
        $incoterms = Incoterm::all();
        return view('incoterm.index')->with('incoterms', $incoterms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incoterm.create');
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
            'clasificacion'=>'required|max:50|unique:incoterms',
        ]);

        $incoterms = new Incoterm();

        $incoterms->clasificacion = $request->get('clasificacion');

        $incoterms->save();

        return redirect('/incoterms');
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
        $incoterm = Incoterm::find($id);
        return view('incoterm.edit')->with('incoterm', $incoterm);
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
            'clasificacion'=>'required|max:50|unique:incoterms',
        ]);

        $incoterm = Incoterm::find($id);

        $incoterm->clasificacion = $request->get('clasificacion');

        $incoterm->save();

        return redirect('/incoterms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incoterm = Incoterm::find($id);
        $incoterm->delete();
        return redirect('/incoterms');
    }
}
