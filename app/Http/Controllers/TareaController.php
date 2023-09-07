<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;


class TareaController extends Controller
{
    public function create(Request $request)
 {
 $this->validate($request, [
 'nombre' => 'required',
 ]);
 Tarea::create($request->all());
 return redirect('tareas');
 }

   public function index()
 {
     $tareas = Tarea::all(); // Obtener todas las tareas desde la base de datos

     return view('tareas', compact('tareas'));
 }

 public function delete($id)
 {
 $tareas = Tarea::find($id);
 $tareas->delete();
 return to_route('tareas');
 }

}


