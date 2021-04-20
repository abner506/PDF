<?php

namespace App\Http\Controllers;
use App\estudiante; //Modelo
use Illuminate\Http\Request;
use App\Http\Requests\estudiantessRequest;
use App\Http\Requests\validaRequest;
class ControllerEstudiantes extends Controller
{
    public function mostrar()
    {
    return view ('AgregarEstudiantes');
    }
    public function store(validaRequest $request)
    {
    $estudiante=new estudiante();
    $estudiante->Matricula=$request->Matricula;
    $estudiante->Nombre=$request->Nombre;
    $estudiante->Direccion=$request->Direccion;
    $estudiante-> save();
    //return $request->all('estudiantes');
    return redirect('estudiantes');
    //retun $requests->all();
}
}
