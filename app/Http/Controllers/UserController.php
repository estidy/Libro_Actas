<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }
      public function show($id)
    {
        $user= User::find($id);

        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        if($validator->fails()){
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
       /* $user= new User();
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= $request->password;

        $user->save();*/

        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit($id)
    {
        $user= User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator= Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);
        if($validator->fails()){
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;

        // Si se proporciona una nueva contraseña, actualizarla
        if ($request->has('password') && $request->password !=='') {
            $user->password = bcrypt($request->password);
        }

        $user->save();
        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
