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
}
