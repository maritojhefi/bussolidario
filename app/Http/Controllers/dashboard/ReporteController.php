<?php

namespace App\Http\Controllers\dashboard;

use App\distrito;
use App\Formulario;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Exports\RegistrosExport;
use App\Imports\FormularioImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

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

     
       $cantidad=$Registros->total();
      
       return view('dashboard.reportes.index', compact('Registros'),['listDistritos'=>$listDistritos,'cantidad'=>$cantidad,'filtros'=>$filtros]);

    }

    public function show(Formulario $formulario)
    {
        return view ('dashboard.reportes.show',["formulario"=>$formulario]);
    }
    public function reporteExcel(Formulario $excel)
    {
        
        return Excel::download(new RegistrosExport($excel), 'registros.xlsx');
    }
    public function reporteExcelpersonalizado(Request $excel)
    {
        return Excel::download(new RegistrosExport($excel), 'registros.xlsx');
    }
    public function importarShow()
    {
        return view ('dashboard.reportes.import');
    }
    public function importarExcel(Request $request)
    {
        try {
            $import = new FormularioImport();
        Excel::import($import, request()->file('registros'));
        return view('dashboard.reportes.import', ['numRows'=>$import->getRowCount()]);
        } catch (\Throwable $th) {
            return back()->with('status','Errores en el documento');

        }
       
    }
    public function importarExcel2(Request $request)
    {
       $file=$request->registros;
       Excel::import(new FormularioImport, $file);
    }

}
