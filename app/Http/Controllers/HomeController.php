<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Role;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
 {
     $request->user()->authorizeRoles(['Usuario', 'Administrador', 'Lider de Proyecto']);
     return view('home');
 }

 public function roles(){
   $Roles = Role::all();
   $Usuarios = User::all()->except(Auth::id());
   return view('AsignarRoles', compact('Usuarios', 'Roles'));
 }

 public function saverole(User $user, Request $request)
 {


   $this->validate($request, [
     'user_id' => 'required',
   ]);
   $user->user_id = request()->user_id;
   $user->update();

   if ($role_id = 1) {
     $user->roles()->attach(Role::where('name', 'Administrador')->first());
   }
   elseif ($role_id = 2) {
     $user->roles()->attach(Role::where('name', 'Lider de Proyecto')->first());
   }
   elseif ($role_id = 3) {
     $user->roles()->attach(Role::where('name', 'Usuario')->first());
   }



   return view('home');
 }

}
