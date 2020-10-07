<?php

namespace App;

use App\Formulario;
use Illuminate\Database\Eloquent\Model;

class distrito extends Model
{
    protected $fillable=['nombre', 'ubicacion'];
    public function formulario()
   {
    return $this->hasMany(Formulario::class);

   }
}
