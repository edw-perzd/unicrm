<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index(){

        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));

    }

    public function create(){
        return view('alumnos.create');
    }

    public function store(Request $request){
        $request->validate([
            'matricula' => 'required|min:10|max:20|unique:alumnos,matricula_alumno',
            'nombre' => 'required|min:10|max:50',
            'direccion' => 'required|min:10|max:100',
            'telefono1' => 'required|numeric|digits:10',
            'telefono2' => 'nullable|numeric|digits:10',
            'correo' => 'nullable|email|unique:alumnos,correoE_alumno',
            'fNacimiento' => 'required|date',
            'carrera' => 'required|min:3|max:50',
            'semestre' => 'required|numeric',
            'enfermedades' => 'nullable|min:10|max:100',
            'medicamentos' => 'nullable|min:10|max:100',
            'alergias' => 'nullable|min:10|max:100',
            'tipoSangre' => 'nullable|min:10|max:11',
            'retricMed' => 'nullable|min:10|max:100',
            'contactoMed' => 'nullable|min:10|max:100',
        ]);

        $alumno = new Alumno();
        $alumno->matricula_alumno = $request->matricula;
        $alumno->nombre_alumno = $request->nombre;
        $alumno->direccion_alumno = $request->direccion;
        $alumno->telefono1_alumno = $request->telefono1;
        $alumno->telefono2_alumno = $request->telefono2;
        $alumno->correoE_alumno = $request->correo;
        $alumno->fNacimiento_alumno = $request->fNacimiento;
        $alumno->carrera_alumno = $request->carrera;
        $alumno->semestre_alumno = $request->semestre;
        $alumno->enfermedades_alumno = $request->enfermedades;
        $alumno->medicamentos_alumno = $request->medicamentos;
        $alumno->alergias_alumno = $request->alergias;
        $alumno->tipoSangre_alumno = $request->tipoSangre;
        $alumno->restricMed_alumno = $request->restricMed;
        $alumno->contactoMed_alumno = $request->contactoMed;


        $alumno->save();

        return redirect()->route('alumnos.index');

    }

    public function buscar(){
        return view('alumnos.buscar');
    }

    // Procesa la solicitud de búsqueda y redirige a la vista del alumno si es encontrado
    public function submit(Request $request){
        $matricula = $request->input('matricula');  // Captura la matrícula del formulario

        $alumno = Alumno::where('matricula_alumno', $matricula)->first(); // Busca al alumno por la matrícula

        if($alumno){
            return redirect()->route('alumnos.show', $matricula);  // Redirige al perfil del alumno
        } else {
            return abort(404, 'Este alumno no se encuentra en la base de datos');  // Si no se encuentra al alumno
        }
    }

    public function show($matricula){

        $alumno = Alumno::where('matricula_alumno', $matricula)->first();

        return view('alumnos.show', compact('alumno'));

    }

    public function edit($matricula){
        $alumno = Alumno::where('matricula_alumno', $matricula)->first();

        return view('alumnos.edit', compact('alumno'));
    }

    public function update(Request $request, $matricula){
        $request->validate([
            'matricula' => "required|min:10|max:20|unique:alumnos,matricula_alumno,{$matricula},matricula_alumno",
            'nombre' => 'required|min:10|max:50',
            'direccion' => 'required|min:10|max:100',
            'telefono1' => 'required|numeric|digits:10',
            'telefono2' => 'nullable|numeric|digits:10',
            'correo' => "nullable|email|unique:alumnos,correoE_alumno,{$matricula},matricula_alumno",
            'fNacimiento' => 'required|date',
            'carrera' => 'required|min:3|max:50',
            'semestre' => 'required|numeric',
            'enfermedades' => 'nullable|min:10|max:100',
            'medicamentos' => 'nullable|min:10|max:100',
            'alergias' => 'nullable|min:10|max:100',
            'tipoSangre' => 'nullable|min:10|max:11',
            'retricMed' => 'nullable|min:10|max:100',
            'contactoMed' => 'nullable|min:10|max:100',
        ]);
        $alumno = Alumno::where('matricula_alumno', $matricula)->first();

        $alumno->nombre_alumno = request('nombre');
        $alumno->direccion_alumno = request('direccion');
        $alumno->telefono1_alumno = request('telefono1');
        $alumno->telefono2_alumno = request('telefono2');
        $alumno->correoE_alumno = request('correo');
        $alumno->fNacimiento_alumno = request('fNacimiento');
        $alumno->carrera_alumno = request('carrera');
        $alumno->semestre_alumno = request('semestre');
        $alumno->enfermedades_alumno = request('enfermedades');
        $alumno->medicamentos_alumno = request('medicamentos');
        $alumno->alergias_alumno = request('alergias');
        $alumno->tipoSangre_alumno = request('tipoSangre');
        $alumno->restricMed_alumno = request('restricMed');
        $alumno->contactoMed_alumno = request('contactoMed');

        $alumno->save();

        return redirect(route('alumnos.index'));
    }

    public function destroy($matricula){
        $alumno = Alumno::where('matricula_alumno', $matricula)->first();
        $alumno->delete();

        return redirect(route('alumnos.index'));
    }
}
