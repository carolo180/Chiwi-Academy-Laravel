<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{  
    public function __construct()
    {  //especifica que todas las vistas que se cargaran desde este controlador deben ser autenticadas
        $this->middleware("auth");
    }
 
    public function index()
    {
      //extrae todo desde el modelo "tabla" y envia los datos a la vista
      $cursos = Curso::all();
      return view("admin.cursos.index", ['cursos' =>  $cursos]);
    }
    
    public function store(Request $request)
   {
    
    //y mediante un dd(vardumpdie)lo muestra todo
     //  dd( \App\Models\Evento::all());
   // dd($request->name);
    //dd($request->all());

    //genera el envio de los datos recibidos desde el formulario a la base de datos
    $newCurso = new Curso();

    if($request->hasfile('featured')){
      $file = $request->file('featured');
      $destinationPath = 'images/featured/';
      $filename = time() . '-' . $file->getClientOriginalName();
      $uploadSucces = $request->file('featured')->move($destinationPath,$filename);
      $newCurso->featured = $destinationPath . $filename;

    };
    $newCurso->name = $request->name;
    $newCurso->start_date = $request->date;
    $newCurso->description = $request->description;
    $newCurso->save();

    //echo "The event $newEvento->name is already safe succesfully";
    return redirect()->back();
   }

   public function update(Request $request, $cursoId)
   {
   
    $curso = Curso::find($cursoId);

    $curso->name = $request->name;
    $curso->start_date = $request->date;
    $curso->description = $request->description;

    if($request->hasfile('featured')){
      $file = $request->file('featured');
      $destinationPath = 'images/featured/';
      $filename = time() . '-' . $file->getClientOriginalName();
      $uploadSucces = $request->file('featured')->move($destinationPath,$filename);
      $curso->featured = $destinationPath . $filename;
    }; 
    
    $curso->save();
    return redirect()->back();
   }

   public function delete(Request $request, $cursoId)
   {
    $curso = Curso::find($cursoId);
    $curso->delete();
    return redirect()->back();
   }
  
 }
 
