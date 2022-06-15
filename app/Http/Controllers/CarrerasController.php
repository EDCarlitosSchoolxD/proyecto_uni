<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\TipoCarrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarrerasController extends Controller
{
    //

    public function formulario($id){
        $data = ['tipoInfo'=>TipoCarrera::all(),'universidad_id'=>$id];
        return view('admin.carrerasCrear',['data'=>$data]);
    
    }

    public function store(Request $request){
        $datosCarrera = request()->except('_token');
        
 
        
        if($request->hasFile('imagen')){
            $datosCarrera['imagen']= $request->file('imagen')->store('uploads','public');
            
        }
        if($request->hasFile('plan_estudio')){
            $datosCarrera['plan_estudio']=$request->file('plan_estudio')->store('pdfs','public');
        }
        
        Carrera::insert($datosCarrera);
        
        return redirect('/universidad/'.$datosCarrera['universidad_id']);

    }

    public function edit(){
        
    }





    public function infoCarrera($id){

        $datos = DB::table('carreras')
        ->join('tipo_carreras','carreras.tipo_id','=','tipo_carreras.id')
        ->join('universidads','carreras.universidad_id','=','universidads.id')
        ->where('carreras.id','=',$id)
        ->get(['carreras.id','carreras.nombre','carreras.descripcion','carreras.aprendizaje','carreras.objetivo','carreras.descripcion','carreras.trabajo','carreras.perfil_ingreso','carreras.perfil_egreso','carreras.imagen','carreras.plan_estudio','tipo_carreras.tipoC','universidads.nombre AS uniNombre']);


        return view('carrera',['datos'=>$datos]);


    }
   
}
