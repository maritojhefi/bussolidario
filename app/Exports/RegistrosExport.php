<?php

namespace App\Exports;

use DB;
use App\User;
use App\Formulario;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegistrosExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Fecha',
            'Distrito',
            
            'Cedula',
            'Beneficiario',
            'Telefono',
            'Barrio',
          
        ];
    }
    public function collection()
    {
       
         $registros = Formulario::select('created_at','distrito_id','ci', 'beneficiario','telefono','barrio')->get();
         return $registros;
        
    }
}