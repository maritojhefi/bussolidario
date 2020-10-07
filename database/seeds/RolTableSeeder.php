<?php

use App\Rol;
use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       Rol::truncate();
         Rol::create([
             'nombre'=>"user",
             'detalle'=>"acceso limitado",
            
         ]);
         Rol::create([
            'nombre'=>"admin",
            'detalle'=>"acceso total",
           
        ]);
        
    }
}
