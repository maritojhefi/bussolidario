<?php

namespace App\Exports;

use App\User;
use App\Formulario;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvoicesExport implements FromView
{
    public function view(): View
    {
        return view('dashboard.reportes.table', [
            'Registros' => Formulario::all()
        ]);
    }
}