<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //GET
    //Mando a llamar la vista del registro de estudiante
    public function vistaRegistrarEstudiante(){
        return view('estudiantes.registrarEstudiante');
    }

    //Aqui se hacen las validaciones
    public function registrarEstudiante(Request $request){
        $nuevoEstudiante = $request->validate([
            //Aqui es para que todos sean requeridos, si no quiero que sean requeridos no se ponen.
            'matricula' => 'required',
            'nombre' => 'required',
            'apellidoP' => 'required',
            'apellidoM' => '',
            //Estructura tipo date
            'fechaNacimiento' => 'required|date',
            'sexo' => 'required',
            //Estructura de tipo email
            'email' => 'required|email',
            //Aqui se asignan maximos y minimos de datos ingresados
            'celular' => 'required|max:10|min:10',
            'calle' => '', 
            'colonia' => '', 
            'codigoPostal' => '',
            'numExt' => '',
            'ciudad' => ''
        ]);

        Estudiante::create($nuevoEstudiante);
        return back()->with('success', 'Su estudiante ha sido creado con exito');
        //return $nuevoEstudiante;
    }

    public function listarEstudiantes(Request $request){
        $estudiantes = Estudiante::all();
        return view('estudiantes.listarEstudiantes', compact('estudiantes'));
    }
}
