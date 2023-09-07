<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function create(Request $request)
    {
    $this->validate($request, [
    'nombre' => 'required',
    ]);
    Tarea::create($request->all());
    return to_route('tareas');
    }
   
    public function delete($id)
    {
    $tarea = Tarea::find($id);
    $tarea->delete();
    return to_route('tarea');
    }
   
   }
   