<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyectos;
use App\Clientes;
use App\User;

class ProyectosController extends Controller
{
  public function create(Clientes $cliente)
  {
    $usuarios = User::get();
    $clientes = Clientes::get();
      return view('projects.addproject',compact ('clientes', 'usuarios'));
  }

  //Mostrar Clientes
  public function show()
  {
    $proyectos = Proyectos::get();
    return view('projects.showprojects', compact('proyectos'));
  }
//Guardar cliente
  public function store(Request $request)
  {

    $this->validate($request, [
      'title' => 'required',
      'client_id' => 'required',
      'responsible_user_id' => 'required',
      'date_init' => 'required',
      'date_end' => 'required',
      'description' => 'required'

    ]);
    $proyecto = New Proyectos;
    $proyecto->title = request()->title;
    $proyecto->client_id = request()->client_id;
    $proyecto->responsible_user_id = request()->responsible_user_id;
    $proyecto->date_init = request()->date_init;
    $proyecto->date_end = request()->date_end;
    $proyecto->description = request()->description;
    $proyecto->save();
    return redirect('home');
  }

  public function edit(Proyectos $proyecto)
  {
    $usuarios = User::get();
    $clientes = Clientes::get();
      return view('projects.editproject', compact('proyecto', 'clientes', 'usuarios'));
  }

  public function update(Proyectos $proyecto, Request $request)
  {

    $this->validate($request, [
      'title' => 'required',
      'client_id' => 'required',
      'responsible_user_id' => 'required',
      'date_init' => 'required',
      'date_end' => 'required',
      'description' => 'required'

    ]);
    $proyecto->title = request()->title;
    $proyecto->client_id = request()->client_id;
    $proyecto->responsible_user_id = request()->responsible_user_id;
    $proyecto->date_init = request()->date_init;
    $proyecto->date_end = request()->date_end;
    $proyecto->description = request()->description;
    $proyecto->update();

      return view('home');
  }

  public function destroy(Proyectos $proyecto)
  {
      $proyecto->delete();

      return redirect('home');
  }
}
