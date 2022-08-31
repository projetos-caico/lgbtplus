<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
    
        $this->middleware('auth');
    }

    public function home () {
        return view('layouts.site.admin');
    }
    
    public function index()
    {
        $users = User::all();

        return view('dashboard.usuario.index', ['usuarios'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('dashboard.usuario.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // var_dump($request->all());
        // die();
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults(), 'min:8'],
            'roles' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        
        $user->assignRole($request->roles);

        $user->save();
        return redirect(route('usuarios.index'))->with('msg', 'Criado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // die();
        $roles = Role::all();
        $users = User::find($id);
        return view('dashboard.usuario.show', ['user'=>$users, 'role'=>$roles]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $$id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $users = User::find($id);
        return view('dashboard.usuario.edit', ['user'=>$users, 'roles'=>$roles]);
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

        $users = User::find($id);
        $users->name = $request->post('name');
        $users->email = $request->post('email');
    
        $users->syncRoles([$request->role]);
        $users->save(); //salva no banco 

        

        return redirect()->to(route('usuarios.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        User::where('id', $id)->delete();
        // $request->session()->flash('message', 'apagou');
        return redirect(route('usuarios.index'))->with('msg', 'Usuário deletado!');    
    }
}
