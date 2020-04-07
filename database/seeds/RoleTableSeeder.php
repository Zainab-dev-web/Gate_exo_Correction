<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('roles')->insert([
            
            'role' => 'Admin',
            
        ]);
        DB::table('roles')->insert([
            
            'role' => 'Réassortisseur',
            
        ]);
        DB::table('roles')->insert([
            
            'role' => 'Webmaster',
            
        ]);
        DB::table('roles')->insert([
            
            'role' => 'Consommateur',
            
        ]);
    }
}
