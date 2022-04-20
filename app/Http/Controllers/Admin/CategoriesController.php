<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{  
   public function __construct()
   {  //especifica que todas las vistas que se cargaran desde este controlador deben ser autenticadas
       $this->middleware("auth");
   }

   public function index()
   {
     return view("admin.categories.index");
   }

     // recibe como parametro la info proveniente del formulario del administrados
    //y meniante un dd(vardumpdie)lo muestra todo
   public function store(Request $request)
   {
    dd($request->category);
    dd($request->all());
   }
}
