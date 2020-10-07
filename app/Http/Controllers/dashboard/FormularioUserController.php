<?php

namespace App\Http\Controllers\dashboard;

use App\Formulario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormularioUserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','rol.admin']);
    }
    public function index()
    {
        
         $formularios=Formulario::orderBy('id','desc')->paginate(8);
       
         return view('dashboard.formularios.index',['formularios'=>$formularios,'rol'=>1]);
    }
}
