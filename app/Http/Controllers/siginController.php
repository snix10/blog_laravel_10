<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class siginController extends Controller
{
    public function index()
    {
        return view('acces.sigin', [
            "title"  => "SIGIN"             
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
            'name'    => 'required|min:3|max:255',
            'username'=> ['required', 'min:3', 'max:225', 'unique:users'],
            'email'   => 'required|email|unique:users',
            'password'=> 'required|min:5|max:255'
         ]);

         //$validatedData['password'] = bcrypt($validatedData['password']);
           $validatedData['password'] = Hash::make($validatedData['password']);
         
         User::create($validatedData);

         //$request->session()->flash('berhasil','Registrasi berhasil - silahkan login!');

         return redirect('/login')->with('berhasil','Registrasi berhasil - silahkan login!');
    }
}
