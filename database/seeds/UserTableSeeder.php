<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name'=>"Mario Cotave",
            'email'=>"maritojhefi@gmail.com",
            'telf'=>"75140175",
            'ci'=>"10657721",
            'rol_id'=>"2",
            'password'=>"jhefi123",


           
        ]);
        User::create([
            'name'=>"Ruben Cotave",
            'email'=>"rubenz@gmail.com",
            'telf'=>"77767277",
            'ci'=>"10657721",
            'rol_id'=>"2",
            'password'=>"rubenz123",
        ]);
            


           
        
    
       
       
    }
}
