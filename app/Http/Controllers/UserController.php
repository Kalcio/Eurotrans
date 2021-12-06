<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
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
        $users = User::all();
        return view('user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User();

        $users->rut = $request->get('rut');
        $users->nombre = $request->get('name');
        $users->numero = $request->get('numero');
        $users->correo = $request->get('email');
        $users->direccion = $request->get('direccion');

        $users->save();

        return redirect('/users');
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
        $user = User::find($rut);
        return view('user.edit')->with('user', $user);
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
        $user = User::find($rut);

        $user->nombre = $request->get('name');
        $user->numero = $request->get('numero');
        $user->correo = $request->get('email');
        $user->direccion = $request->get('direccion');

        $user->save();

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $rut
     * @return \Illuminate\Http\Response
     */
    public function destroy($rut)
    {
        $user = User::find($rut);
        $user->delete();
        return redirect('/users');
    }

    public function contar()
    {
        $count = User::count();
        return $count;
    }
}
