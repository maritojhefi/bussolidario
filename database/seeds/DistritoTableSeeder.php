<?php

use App\distrito;
use Illuminate\Database\Seeder;

class DistritoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        distrito::truncate();
        
      
        for($i=1; $i<=15; $i++)
        {
         distrito::create([
             'nombre'=>"$i",
             'observacion'=>"Distrito $i",
          
            
         ]);
        }
    }
}
