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

    public function buscar(){
        return view('alumnos.buscar');
    }

    public function submit(Request $request){

        $matricula = $request->input('matricula');
        $alumno = Alumno::where('matricula_alumno', $matricula)->first();

        if($alumno){
            return redirect()->route('alumnos.show', $matricula);
        }else{
            return abort(404, 'Este alumno no se encuentra en la base de datos');
        }

    }
    public function show($matricula){

        $alumno = Alumno::where('matricula_alumno', $matricula)->first();

        return view('alumnos.show', compact('alumno'));

    }
}
