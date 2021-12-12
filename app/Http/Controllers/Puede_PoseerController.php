<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puede_Poseer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class Puede_PoseerController extends Controller
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
        $puede_poseers = Puede_Poseer::all();
        return view('puede_poseer.index')->with('puede_poseers', $puede_poseers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('puede_poseer.create');
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
            'estado'=>'required|max:50|unique:puede_poseers',
        ]);

        $puede_poseers = new Puede_Poseer();

        $puede_poseers->estado = $request->get('estado');

        $puede_poseers->save();

        return redirect('/puede_poseers');
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
        $puede_poseer = Puede_Poseer::find($id);
        return view('puede_poseer.edit')->with('puede_poseer', $puede_poseer);
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
            'estado'=>['required','max:50',Rule::unique('puede_poseers')->ignore($id)],
        ]);

        $puede_poseer = Puede_Poseer::find($id);

        $puede_poseer->estado = $request->get('estado');

        $puede_poseer->save();

        return redirect('/puede_poseers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $puede_poseer = Puede_Poseer::find($id);
        $puede_poseer->delete();
        return redirect('/puede_poseers');
    }
}