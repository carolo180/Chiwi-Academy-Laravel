<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{  
   public function __construct()
   {  //especifica que todas las vistas que se cargaran desde este controlador deben ser autenticadas
       $this->middleware("auth");
   }

   public function index()
   {
     //extrae todo desde el modelo "tabla" y envia los datos a la vista
     $evento = Evento::all();
     return view("admin.categories.index", ['evento' =>  $evento]);
   }

    // recibe como parametro la info proveniente del formulario del administrador
   public function store(Request $request)
   {
     //y mediante un dd(vardumpdie)lo muestra todo
     //  dd( \App\Models\Evento::all());
   // dd($request->name);
    //dd($request->all());

    //genera el envio de los datos recibidos desde el formulario a la base de datos
    $newEvento = new Evento();

    if($request->hasfile('featured')){
      $file = $request->file('featured');
      $destinationPath = 'images/featured/';
      $filename = time() . '-' . $file->getClientOriginalName();
      $uploadSucces = $request->file('featured')->move($destinationPath,$filename);
      $newEvento->featured = $destinationPath . $filename;

    };
    
    $newEvento->name = $request->name;
    $newEvento->date = $request->date;
    $newEvento->description = $request->description;
    $newEvento->save();

    //echo "The event $newEvento->name is already safe succesfully";
    return redirect()->back();
   }

   public function update(Request $request, $eventId)
   {
    $events = Evento::find($eventId);
    $events->name = $request->name;
    $events->date = $request->date;
    $events->description = $request->description;

    if($request->hasfile('featured')){
      $file = $request->file('featured');
      $destinationPath = 'images/featured/';
      $filename = time() . '-' . $file->getClientOriginalName();
      $uploadSucces = $request->file('featured')->move($destinationPath,$filename);
      $events->featured = $destinationPath . $filename;
    };
    
    $events->save();
    return redirect()->back();
   }

   public function delete(Request $request, $eventId)
   {
    $events = Evento::find($eventId);
    $events->delete();
    return redirect()->back();
   }
}
