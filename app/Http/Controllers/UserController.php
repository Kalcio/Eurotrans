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
            'rut'=>'required|min:8|max:9|unique:users',
            'name'=>'required|max:200',
            'numero'=>'required|numeric|digits_between:5,15|unique:users',
            'password'=>'required|min:8|max:15',
            'email'=>'required|email|max:200|unique:users',
            'direccion' => 'required|max:200',
        ]);

        $data = $request->all();
        Validator::make($data, [
            'password' => $this->passwordRules(),
        ])->validate();

        $request->request->add([
            'password'=>Hash::make($request->input('paswword'))
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
        $user = User::find($id);
        return view('user.edit')->with('user', $user);
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
            'rut'=>'required|min:8|max:9|unique:users',
            'name'=>'required|max:200',
            'numero'=>'required|numeric|digits_between:5,15|unique:users',
            'email'=>'required|email|max:200|unique:users',
            'direccion' => 'required|max:200',
        ]);

        $user = User::find($id);

        $user->rut = $request->get('rut');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }

    public function contar()
    {
        $count = User::count();
        return $count;
    }
}
