<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\estudiante; //Modelo


class ListaController extends Controller
{
    public function index(Request $request)

{
$estudiante= estudiante::all();
//return $estudiante;
return view ('VistaEstudiantes', compact('estudiante'));
/*$texto=trim($request->get ('texto'));
$estudiante=DB::table ('estudiantes')->select('Matricula','Nombre','Direccion') ->where ('matricula','=',$texto)->paginate(10);
return view ('VistaEstudiantes', compact('estudiante',$texto));*/
}
public function destroy($id)
{
$estudiante= estudiante::find($id);
//dd($estudiante);
$estudiante->delete();
return redirect()->route('Lista.index');
}

public function edit($id)
{
$estudiante = estudiante::whereMatricula($id)->firstOrFail();
return view('EditaEstudiante', compact('estudiante'));
}

public function update(Request $request, $id)
{
$estudiante= estudiante::findOrFail($id);
$estudiante->Matricula = $request->input('Matricula');
$estudiante->Nombre =$request->input('Nombre');
$estudiante->Direccion =$request->input('Direccion');
$estudiante->save();
return redirect()->route('Lista.index');

}
}
