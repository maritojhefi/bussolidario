<?php

namespace App\Imports;


use Carbon\Carbon;
use App\Formulario;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class FormularioImport implements ToModel, WithHeadingRow, WithValidation
{
    
    private $numRows = 0;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
       $currentUser=auth()->user()->id;
      
            ++$this->numRows;
            return new Formulario([
                
                'created_at'=>Date::excelToDateTimeObject($row['fecha']),
'distrito_id'=>$row['distrito'],
                'ci' => $row['cedula'],
                'beneficiario' => $row['beneficiario'],
                
                'telefono' => $row['telefono'],
                'barrio' => $row['barrio'],
              
            ]);
 
    }
 
    public function rules(): array
    {
        return [
            
            'beneficiario' => 'max:155',
            'ci' => 'max:15',
            'telefono' => 'max:10',
            'barrio' => 'max:50',
            'distrito'=>'max:15'
           
        ];
    }
 
    public function getRowCount(): int
    {
        return $this->numRows;
    }
}

