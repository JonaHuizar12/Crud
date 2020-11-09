<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Grupos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    //Listado de Estudiantes
    public function list(){
        $data['estudiantes'] = Estudiante::paginate(3);

        return view('estudiantes.listar',$data);
    }

    //Formulario de Estudiantes
    public function studentform(){
        $grupos = Grupos::all();
        return view('estudiantes.studentform',compact('grupos'));
    }


    //Guardar un Estudiante
    public function save(Request $request){

        $validator = $this->validate($request, [
            'grupo'=>'required|string|max:40',
            'nombre'=>'required|string|max:20',
            'apellidos'=>'required|string|max:30',
            'edad'=>'required|string|max:2',
            'email'=>'required|string|max:30|email|unique:estudiantes',
            'telefono'=>'required|string|max:10|unique:estudiantes'
            
        ]);

        $studentdata = request()->except('_token');
        Estudiante::insert($studentdata);

        return back()->with('estudianteGuardado','Estudiante Guardado Exitosamente');


    }

    //Eliminar Estudiante

    public function delete($id){
        Estudiante::destroy($id);

        return back()->with('estudianteEliminado', 'Estudiante Eliminado');
    }

    //Formulario Editar Estudiante
    public function editForm($id){
        $estudiante = Estudiante::findOrFail($id);
        $grupos = Grupos::all();

        return view('estudiantes.editForm',compact('estudiante'),compact('grupos'));
    }

    //Editar Estudiante
    public function edit(Request $request,$id){
        $datosEstudiante = request()->except((['_token','_method']));
        Estudiante::where('id', '=', $id)->update($datosEstudiante);

        return back()->with('estudianteModificado','Usuario Modificado');
    }

}