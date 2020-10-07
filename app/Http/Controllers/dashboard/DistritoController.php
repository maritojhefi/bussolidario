<?php

namespace App\Http\Controllers\dashboard;

use App\distrito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DistritoPostRequest;

class DistritoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distritos=distrito::orderBy('id','desc')->paginate(10);
       
         return view('dashboard.distritos.index',['distritos'=>$distritos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

         return view("dashboard.distritos.create",['distrito'=>new Distrito()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DistritoPostRequest $request)
    {
        
      Distrito::create($request->validated());

      
      return back()->with('status','Distrito  Registrado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(distrito $distrito)
    {
        return view ('dashboard.distritos.show',["distrito"=>$distrito]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(distrito $distrito)
    {
        return view('dashboard.distritos.edit',["distrito"=>$distrito]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DistritoPostRequest $request, distrito $distrito)
    {
        $distrito->update($request->validated());
        return back()->with('status','Distrito Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(distrito $distrito)
    {
        $distrito->delete();
        return back()->with('status','Distrito Eliminado!');
    }
}
