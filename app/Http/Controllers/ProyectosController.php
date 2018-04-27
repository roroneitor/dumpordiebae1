<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyectos;
use App\Modulos;
use DB;
use App\Clientes;
use App\User;

use Carbon\Carbon;

class ProyectosController extends Controller
{
  public function create()
  {
    $proyecto = [];
    $modulos = [];
    $clientes = Clientes::all();
    $usuarios = User::all();

    return view('projects.addproject', compact('modulos', 'clientes', 'usuarios'));
  }

  //Mostrar Clientes
  public function show()
  {
    $proyectos = Proyectos::latest('date_init')->get();
    return view('projects.showprojects', compact('proyectos'));
  }

  //Guardar cliente
  public function store(Request $request)
  {
    // dd($request->all());

    $this->validate($request, [
      'title' => 'required',
      'date_init' => 'required',
      'date_end' => 'required',
      'description' => 'required'
    ]);

    if (!$request->has('modulo')) {
      return response()->json(['resp' => false, 'modulo' => 'modulo'], 422);
    }

    if (!$request->has('usuario')) {
      return response()->json(['resp' => false, 'modulo' => 'usuario'], 422);
    }

    $proyecto = New Proyectos;
    $proyecto->title = request()->title;
    $proyecto->date_init = request()->date_init;
    $proyecto->date_end = request()->date_end;
    $proyecto->client_id = request()->client_id;
    $proyecto->created_user_id = auth()->user()->id;
    $proyecto->description = request()->description;
    $proyecto->save();

    $modulos = json_decode(request()->modulo, true);

    foreach ($modulos as $modulo) {

      DB::table('modules')->insert([
        'project_id' => $proyecto->id,
        'created_user_id' => auth()->user()->id,
        'title' => $modulo['titulo'],
        'created_at' => Carbon::now()
      ]);

    }

    if ($request->has('usuario')) {
      foreach ($request->input('usuario') as $key => $usuario) {

        DB::table('participants')->insert([
          'project_id' => $proyecto->id,
          'user_id' => $usuario,
          'created_at' => Carbon::now()
        ]);

      }
    }

    return response()->json(true);
  }

  public function edit(Proyectos $proyecto)
  {
    $modulos = [];
    $clientes = Clientes::all();
    $usuarios = User::all();

    return view('projects.editproject', compact('proyecto', 'modulos', 'clientes', 'usuarios'));
  }

  public function update(Proyectos $proyecto, Request $request)
  {
    $this->validate($request, [
      'title' => 'required',
      'date_init' => 'required',
      'date_end' => 'required',
      'description' => 'required'
    ]);

    if (!$request->has('modulo')) {
      return response()->json(['resp' => false, 'modulo' => 'modulo'], 422);
    }

    if (!$request->has('usuario')) {
      return response()->json(['resp' => false, 'modulo' => 'usuario'], 422);
    }

    $proyecto->title = request()->title;
    $proyecto->date_init = request()->date_init;
    $proyecto->date_end = request()->date_end;
    $proyecto->client_id = request()->client_id;
    $proyecto->created_user_id = auth()->user()->id;
    $proyecto->description = request()->description;
    $proyecto->updated_at = Carbon::now();
    $proyecto->save();

    $new_key_module = [];
    $new_key_users = [];

    $modulos = json_decode(request()->modulo, true);

    foreach ($modulos as $modulo) {

      // dd($modulo, $value);
      if ($modulo['nuevo'] == "true") {
        $id = DB::table('modules')->insertGetId([
          'project_id' => $proyecto->id,
          'created_user_id' => auth()->user()->id,
          'title' => $modulo['titulo'],
          'created_at' => Carbon::now()
        ]);

        array_push($new_key_module, $id);
      }else{
        DB::table('modules')
          ->where('id',$modulo['id'])
          ->update([
            'title' => $modulo['titulo'],
            'updated_at' => Carbon::now()
          ]);

          array_push($new_key_module, $modulo['id']);
      }

    }

    /*
      Si hay al menos un valor dentro de ese array, entonces se procede a eliminar los
      modulos que ya no estan dentro del conjunto de arreglo (ciclo anterior.)
    */
    if (count($new_key_module) > 0) {
      DB::table('modules')
        ->whereNotIn('id', $new_key_module)
        ->delete();
    }

    $proyecto->desarrolladores()->sync($request->input('usuario'));
      // foreach ($request->input('usuario') as $key => $usuario) {
      //
      //   DB::table('participants')->insert([
      //     'project_id' => $proyecto->id,
      //     'user_id' => $usuario,
      //     'created_at' => Carbon::now()
      //   ]);
      //
      // }

    return response()->json(true);
  }

  public function destroy(Proyectos $proyecto)
  {
    $proyecto->delete();

    return redirect('home');
  }

  public function view(Proyectos $proyecto)
 {
       return view('projects.viewproject', compact('proyecto'));
 }
}
