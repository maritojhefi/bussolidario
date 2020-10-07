<?php

namespace App\Http\Controllers\dashboard;

use App\Rol;
use App\User;
use App\distrito;
use App\Formulario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormularioPostRequest;

class FormularioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        $sesion=auth()->user()->id;
        $formularios=Formulario::orderBy('id','desc')->where('user_id','like',"%$sesion%")->paginate(8);
       
         return view('dashboard.formularios.index',['formularios'=>$formularios,'rol'=>2]);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listDistritos=distrito::pluck('id','nombre');
        $listUsers=User::pluck('id','name');

         return view("dashboard.formularios.create",['formulario'=>new Formulario(),'listDistritos'=>$listDistritos,'listUsers'=>$listUsers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormularioPostRequest $request)
    {
        
      Formulario::create($request->validated());

      
      return back()->with('status','Registro Guardado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        return view ('dashboard.formularios.show',["formulario"=>$formulario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario $formulario)
    {
        $listDistritos=distrito::pluck('id','nombre');

        return view('dashboard.formularios.edit',["formulario"=>$formulario,'listDistritos'=>$listDistritos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormularioPostRequest $request, Formulario $formulario)
    {
        $formulario->update($request->validated());
        return back()->with('status','Formulario Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulario $formulario)
    {
        $formulario->delete();
        return back()->with('status','Formulario Eliminado!');
    }
}
