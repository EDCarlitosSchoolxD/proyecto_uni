<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Estado;
use App\Models\Lugar;
use App\Models\Tipo;
use App\Models\Universidad;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UniversidadesController extends Controller
{
    //
    public function formularioCrear(){
        $estados = Estado::all();
        $lugar = Lugar::all();
        $tipo = Tipo::all();

        $datos = [
            'estados'=>$estados,
            'lugares'=>$lugar,
            'tipos'=>$tipo,
        ];


        return view('admin.universidadCrear',['datos'=>$datos]);
    }

    public function store(Request $request){

        $datosUniversidad = request()->except('_token');

        if($request->hasFile('imagen')){
            $datosUniversidad['imagen']= $request->file('imagen')->store('uploads','public');
        }

        $res = Universidad::insert($datosUniversidad);

        return redirect('/admin');
    }


    public function index(){

        $universidad = DB::table('universidads')->join('estados','universidads.estado_id','=','estados.id')
        ->join('tipos','universidads.lugar_id','=','tipos.id')
        ->get(['universidads.id','universidads.imagen','universidads.nombre','estados.estado','tipos.tipoU']);

 
        
       return view('admin.index',['universidades'=>$universidad]);

    }

    public function destroy($id){
        
        $universidad = Universidad::findOrFail($id);

        $carreras = Carrera::all()->where('universidad_id', '=',$id);

       

        foreach($carreras as $carrera){
            if(Storage::delete('public/'.$carrera->imagen)&&Storage::delete('public/'.$carrera->plan_estudio)){
                Carrera::destroy($carrera->id);
            }
        }



        if(Storage::delete('public/'.$universidad->imagen)){

            Universidad::destroy($id);
        }


        return redirect('/admin');
    }

    public function edit($id){

        $estados = Estado::all();
        $lugar = Lugar::all();
        $tipo = Tipo::all();

        $universidad= Universidad::findOrFail($id);


        $datos = [
            'estados'=>$estados,
            'lugares'=>$lugar,
            'tipos'=>$tipo,
            'universidad'=>compact('universidad'),
            'id'=>$id
        ];


        return view('admin.universidadEdit',['datos'=>$datos]);
    }

    public function update(Request $request,$id){

        $datosUniversidad = request()->except(['_token','_method']);

        if($request->hasFile('imagen')){
            $universidad = Universidad::findOrFail($id);
                Storage::delete('public/'.$universidad->imagen);
                $datosUniversidad['imagen']= $request->file('imagen')->store('uploads','public');
            
            }
       
        Universidad::where('id','=',$id)->update($datosUniversidad);
        $universidad = Universidad::findOrFail($id);


       

        $estados = Estado::all();
        $lugar = Lugar::all();
        $tipo = Tipo::all();
        $datos = [
            'estados'=>$estados,
            'lugares'=>$lugar,
            'tipos'=>$tipo,
            'universidad'=>compact('universidad'),
            'id'=>$id
        ];

        return view('admin.universidadEdit',['datos'=>$datos]);

    }

    public function infoUni($id){


        $universidad = DB::table('universidads')->join('estados','universidads.estado_id','=','estados.id')
        ->join('tipos','universidads.tipo_id','=','tipos.id')
        ->join('lugars','universidads.lugar_id','=','lugars.id')
        ->where('universidads.id','=',$id)
        ->get(['universidads.id','universidads.imagen','universidads.nombre','universidads.telefono','universidads.url_web','universidads.direccion','lugars.lugar','estados.estado','tipos.tipoU']);

        $carreras = DB::table('carreras')->join('tipo_carreras','carreras.tipo_id','=','tipo_carreras.id')
        ->join('universidads','carreras.universidad_id','=','universidads.id')
        ->join('estados','universidads.estado_id','=','estados.id')
        ->join('lugars','universidads.lugar_id','=','lugars.id')
        ->where('carreras.universidad_id','=',$id)
        ->get(['carreras.id','carreras.nombre','universidads.nombre AS uniNombre','carreras.imagen','tipo_carreras.tipoC','estados.estado','lugars.lugar','carreras.universidad_id']);


        $datos = ['universidad'=>$universidad,'carreras'=>$carreras];

        return view('web.universidad',['datos'=>$datos]);

    }


    public function quintanaRoo(){

    }
   public function yucatan(){
    $universidades = DB::table('universidads')->join('estados','universidads.estado_id','=','estados.id')
    ->join('tipos','universidads.tipo_id','=','tipos.id')
    ->join('lugars','universidads.lugar_id','=','lugars.id')
    ->where('universidads.estado_id','=','2')
    ->get(['universidads.id','universidads.imagen','universidads.nombre AS uniNombre','estados.estado','lugars.lugar']);
    

    return view('web.quintanaroo',['universidades'=>$universidades]);

    }


}
