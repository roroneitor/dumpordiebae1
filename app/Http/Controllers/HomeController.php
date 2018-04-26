<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Role;
use DB;

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

 public function saverole(Request $request)
 {
   $this->validate($request, [
     'user_id' => 'required',
     'role_id' => 'required',
   ]);

   DB::table('role_user')
   ->where('user_id',$request['user_id'])
   ->update([
     'role_id' => $request['role_id']
            ]);

   return view('home');
 }

}
