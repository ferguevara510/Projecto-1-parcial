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
        return back()->with('success', 'Estudiante registrado correctamente');
        //return $nuevoEstudiante;
    }

    public function editarEstudiante(Request $request, $estudiante){
        $request->validate([
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

        $estudiante = Estudiante::find($estudiante);
        $estudiante->matricula = $request->get('matricula');
        $estudiante->nombre = $request->get('nombre');
        $estudiante->apellidoP = $request->get('apellidoP');
        $estudiante->apellidoM = $request->get('apellidoM');
        $estudiante->fechaNacimiento = $request->get('fechaNacimiento');
        $estudiante->sexo = $request->get('sexo');
        $estudiante->email = $request->get('email');
        $estudiante->celular = $request->get('celular');
        $estudiante->calle = $request->get('calle');
        $estudiante->colonia = $request->get('colonia');
        $estudiante->codigoPostal = $request->get('codigoPostal');
        $estudiante->numExt = $request->get('numExt');
        $estudiante->ciudad = $request->get('ciudad');

        $estudiante->update();

        return redirect()->route('estudianteList')->with('success', 'Estudiante modificado correctamente');
    }

    public function vistaEditarEstudiante(Estudiante $estudiante){
        return view('estudiantes.editarEstudiante',compact('estudiante'));
    }

    public function listarEstudiantes(Request $request){
        $estudiantes = [];
        $busqueda = $request->input('busqueda');
        if ($busqueda){
            $estudiantes = Estudiante::query()->where('nombre', 'LIKE', "%{$busqueda}%")->get();
        }else {
            $estudiantes = Estudiante::all();
        }
        return view('estudiantes.listarEstudiantes', compact('estudiantes'));
    }

    public function eliminarEstudiante (Estudiante $estudiante){
        $estudiante->delete();
        return redirect()->route('estudianteList')->with('success', 'Estudiante eliminado correctamente');
    }
}
