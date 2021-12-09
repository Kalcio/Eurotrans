<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    use PasswordValidationRules;

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
        $request->validate([
            'rut'=>'required|min:8|max:9',
            'name'=>'required',
            'numero'=>'required|min:5|max:15',
            'password'=>'required|min:5|max:15',
            'email'=>'required|email',
            'direccion' => 'required',
        ]);

        $users = new User();

        $users->rut = $request->get('rut');
        $users->name = $request->get('name');
        $users->numero = $request->get('numero');
        $users->password = $request->get('password');
        $users->email = $request->get('email');
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
        $request->validate([
            'rut'=>'required|min:8|max:9',
            'name'=>'required',
            'numero'=>'required|min:5|max:15',
            'email'=>'required|email',
            'direccion' => 'required',
        ]);

        $user = User::find($rut);

        $user->name = $request->get('name');
        $user->numero = $request->get('numero');
        $user->email = $request->get('email');
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
