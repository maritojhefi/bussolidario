<?php

namespace App;

use App\User;
use App\distrito;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    
    protected $fillable=['beneficiario', 'ci','telefono','barrio','distrito_id','user_id','created_at'];

    public function distrito()
    {
        return $this->belongsTo(distrito::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeBeneficiarios($query, $beneficiarios) {
    	if ($beneficiarios) {
    		return $query->where('beneficiario','like',"%$beneficiarios%");
    	}
    }
    


    public function scopeDistritos($query, $distritos) {
    	if ($distritos) {
    		return $query->where('distrito_id','like',"%$distritos%");
        }
        
    }
    
    public function scopeCedulas($query, $cedulas) {
    	if ($cedulas) {
    		return $query->where('ci','like',"%$cedulas%");
        }
        
    }

    public function scopeFechas($query, $fechainicio, $fechafinal) {
    	if ($fechainicio && $fechafinal) {
    		return $query->whereBetween('created_at', [$fechainicio, $fechafinal]);
        }
        
    }
}
