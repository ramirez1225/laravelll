<?php

namespace App\Http\Controllers\lider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Modelos\articulos;
use App\Modelos\comentarios;

class mycontroller extends Controller
{


    public function rex()
    {
        $peticion= DB::table('articulos')
        ->join('comentarios','comentarios.Id', '=', 'articulos.comentario')->get();
        json_encode($peticion);
     
        return response()->json(["articulos_y_comentarios"=>$peticion],201);
    }


    public function soso ($Id){
        $peticion= DB::table('articulos')
        ->join('comentarios','comentarios.Id', '=', 'articulos.comentario')
        ->where('articulos.id', '=', $Id)->get();
        json_encode($peticion);
      
        return response()->json(["articulo_y_comentario"=>$peticion],201);
    }

    ////mostrar registros de las tablas con su id o mostrar todos los registros
    public function hola($id = null)
    {
        if($id)
        return response()->json(["articulos"=>articulos::find($id)],200);

        return response()->json(["articulos"=>articulos::all()],200);
    }
    public function comentarioss($id = null)
    {
        if($id)
        return response()->json(["Comentarios"=>comentarios::find($id)],200);
        return response()->json(["Comentarios"=>comentarios::all()],200);
    }


    ///insertar registros con variables en insomnia
    public function insertarcomentarios(Request $recuest )
    {
     $comentarioo=new comentarios;

    
     $comentarioo->comentario = $recuest->comentario; 

     if($comentarioo->save())
     return response()->json(["Comentarios"=>$comentarioo],201);
     return response()->json(null,400);
    
    }

    public function insertararticulos(Request $recuest )
    {
     $articuloss=new articulos;

     
     $articuloss->articulo = $recuest->articulo; 
     $articuloss->comentario = $recuest->comentario; 

     if($articuloss->save())
     return response()->json(["articulos"=>$articuloss],201);
     return response()->json(null,400);
    
    }

///eliminar registros 
    public function borrar($Id){

    $quitar=articulos::find($Id);
    
    $quitar->delete();  

    return response()->json(["Articulos"=>articulos::all()],201);
    }

public function quit($Id){

    $quitar=comentarios::find($Id);
    
    $quitar->delete();  

    return response()->json(["Comentarios"=>comentarios::all()],201);
    }


////actualizar datos de tabla articulos

    public function updateid(Request $request, $Id){
        
        $notaActualizada = articulos::find($Id);
        $notaActualizada->id = $request->id;
        $notaActualizada->save();

        return response()->json(["Articulos"=>articulos::all()],201);
     
    }
    public function updatearticulo(Request $request, $Id){
        
        $notaActualizada = articulos::find($Id);
        $notaActualizada->articulo = $request->articulo;
        $notaActualizada->save();

        return response()->json(["Articulos"=>articulos::all()],201);
     
    }
    public function updateidcomentario(Request $request, $Id){
        
        $notaActualizada = articulos::find($Id);
        $notaActualizada->comentario = $request->comentario;
        $notaActualizada->save();

        return response()->json(["Articulos"=>articulos::all()],201);
     
    }
   

    ////actualizar datos de tabla comentarios
 public function ruido (Request $request, $Id){
        
        $notaActualizada = comentarios::find($Id);
        $notaActualizada->id = $request->id;
        $notaActualizada->save();

        return response()->json(["Comentarios"=>comentarios::all()],201);
     
    }
    public function zticma(Request $request, $Id){
        
        $notaActualizada = comentarios::find($Id);
        $notaActualizada->comentario = $request->comentario;
        $notaActualizada->save();

        return response()->json(["Comentarios"=>comentarios::all()],201);
     
    }
         
    

}
