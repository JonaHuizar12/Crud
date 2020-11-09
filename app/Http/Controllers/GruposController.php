<?php

namespace App\Http\Controllers;

use App\Grupos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GruposController extends Controller
{
    //Formulario de Grupos
    public function gruposform(){
        return view('grupos.gruposform');
    }

     //Guardar un Grupo
     public function saveGrupos(Request $request){

        $validator = $this->validate($request, [
            'semestre'=>'required|string|max:20',
            'grupo'=>'required|string|max:30',
            'turno'=>'required|string|max:20',
        ]);

        $grupodata = request()->except('_token');
        Grupos::insert($grupodata);

        return back()->with('grupoGuardado','Grupo Guardado Exitosamente');


    }

     //Listado de Grupos
     public function list(){
        $data['grupos'] = Grupos::paginate(3);

        return view('grupos.listarGrupos',$data);
    }

     //Eliminar Grupo

     public function deleteGrupos($id){
        Grupos::destroy($id);

        return back()->with('grupoEliminado', 'Estudiante Eliminado');
    }

    //Formulario Editar Grupos
    public function editFormGrupos($id){
        $grupo = Grupos::findOrFail($id);

        return view('grupos.editarGrupos',compact('grupo'));
    }

    //Editar Grupos
    public function editGrupos(Request $request,$id){
        $datosGrupos = request()->except((['_token','_method']));
        Grupos::where('id', '=', $id)->update($datosGrupos);

        return back()->with('grupoModificado','Grupo Modificado');
    }
}
