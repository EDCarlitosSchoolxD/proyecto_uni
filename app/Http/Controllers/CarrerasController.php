<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\TipoCarrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CarrerasController extends Controller
{
    //

    public function formulario($id){
        $datos = ['tipos'=>TipoCarrera::all(),'universidad_id'=>$id];
        return view('admin.carrerasCrear',['datos'=>$datos]);
    
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

    public function edit($id){

        $tipo = TipoCarrera::all();
        $carrera = Carrera::findOrFail($id);
        $uni_id= $carrera->universidad_id;

        $datos = ['tipos'=>$tipo,'carrera'=>$carrera,'universidad_id'=>$uni_id];

        

        return view('admin.carreraEdit',['datos'=>$datos]);
    }

    public function update(Request $request,$id){
        $carreraDatos = request()->except(['_token','_method']);


        if($request->hasFile('imagen')){
                $carrera = Carrera::findOrFail($id);
                Storage::delete('public/'.$carrera->imagen);
                $carreraDatos['imagen']= $request->file('imagen')->store('uploads','public');
            
        }
        if($request->hasFile('plan_estudio')){
                $carrera = Carrera::findOrFail($id);
                Storage::delete('public/'.$carrera->plan_estudio);
                $carreraDatos['plan_estudio']= $request->file('plan_estudio')->store('pdfs','public');
                
        }

                Carrera::where('id','=',$id)->update($carreraDatos);


                $carrera = Carrera::findOrFail($id);
                $tipo = TipoCarrera::all();
                $uni_id= $carrera->universidad_id;

                $datos = ['tipos'=>$tipo,'carrera'=>$carrera,'universidad_id'=>$uni_id];

        

                return view('admin.carreraEdit',['datos'=>$datos]);


    }

    public function destroy($id){
        $carrera = Carrera::findOrFail($id);

        $universidad_id = request();
        if(Storage::delete('public/'.$carrera->imagen && Storage::delete('public/'.$carrera->plan_estudio))){

            Carrera::destroy($id);
        }

        return redirect('/universidad/'.$universidad_id->universidad_id);
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
