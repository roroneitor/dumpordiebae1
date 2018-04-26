<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use DB;


class ClientesController extends Controller
{
  //Agregar/Crear cliente
  public function create()
  {
    $country = DB::table('countries')->get();
    $states = DB::table('states')->where('country_id', 237)->get();
      return view('clients.addclient', compact ('country', 'states'));
  }

  //Mostrar Clientes
  public function show(Clientes $cliente)
  {
    $countryid = $cliente->country_id;
    $country = DB::table('countries')->get();
    $states = DB::table('states')->get();
    $clientes = Clientes::get();
    
    return view('clients.showclients', compact('clientes', 'country', 'states') );
  }
//Guardar cliente
  public function store(Request $request)
  {

    $this->validate($request, [
      'business_name' => 'required',
      'id_number' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'country_id' => 'required',
      'state_id' => 'required',
      'description' => 'required|string|max:144',
    ]);
    $Cliente = New Clientes;
    $Cliente->business_name = request()->business_name;
    $Cliente->id_number = request()->id_number;
    $Cliente->email = request()->email;
    $Cliente->phone = request()->phone;
    $Cliente->country_id = request()->country_id;
    $Cliente->state_id = request()->state_id;
    $Cliente->description = request()->description;
    $Cliente->created_user_id = auth()->user()->id;
    $Cliente->save();
    return redirect('home');
  }
//EDITAR CLIENTE
  public function edit(Clientes $cliente)
  {
    $countryid = $cliente->country_id;
    $country = DB::table('countries')->get();
    $states = DB::table('states')->where('country_id', $countryid )->get();
      return view('clients.editclient', compact('cliente', 'country', 'states'));
  }
//ACTUALIZAR CLIENTE
  public function update(Clientes $cliente, Request $request)
  {

    $this->validate($request, [
      'business_name' => 'required',
      'id_number' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'country_id' => 'required',
      'state_id' => 'required',
      'description' => 'required|string|max:144',
    ]);
    $cliente->business_name = request()->business_name;
    $cliente->id_number = request()->id_number;
    $cliente->email = request()->email;
    $cliente->phone = request()->phone;
    $cliente->country_id = request()->country_id;
    $cliente->state_id = request()->state_id;
    $cliente->description = request()->description;
    $cliente->update();

      return view('home');
  }
//BORRAR CLIENTE
  public function destroy(Clientes $cliente)
  {
      $cliente->delete();

      return redirect('home');
  }
}
