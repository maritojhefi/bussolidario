<?php

namespace App\Http\Controllers\dashboard;

use App\distrito;
use App\Formulario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReporteController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','rol.admin']);
    }

    public function index(Request $request)
    {
        $nombres = $request->get('buscarpor');
        
       $distritos = $request->get('buscarpordistrito');
      

       $cedulas=$request->get('buscarporci');

       $fechainicio=$request->get('fecha_inicio');
       $fechafinal=$request->get('fecha_final');

       $listDistritos=distrito::pluck('id','nombre');

       $Registros = Formulario::beneficiarios($nombres)->distritos($distritos)->cedulas($cedulas)
       ->fechas($fechainicio, $fechafinal)
       ->paginate(5);


       $filtros=([$nombres,$distritos,$cedulas,$fechainicio,$fechafinal]);

      
       $cantidad=$Registros->count();
       
       return view('dashboard.reportes.index', compact('Registros'),['listDistritos'=>$listDistritos,'cantidad'=>$cantidad,'filtros'=>$filtros]);

    }

    public function show(Formulario $formulario)
    {
        return view ('dashboard.reportes.show',["formulario"=>$formulario]);
    }

}
