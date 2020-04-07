<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); 
        User::truncate();
        DB::table('users')->insert([
            
            'name' => 'Zainab',
            'email' => 'admin@admin',
            'password' => Hash::make('123456789'),
            'role_id' => 1,
            // 'credit'=> null,
            
            
            
        ]);
        DB::table('users')->insert([
            
            'name' => 'Réassortisseur',
            'email' => 'bob@bob',
            'password' => Hash::make('123456789'),
            'role_id' => 2,
            // 'credit'=> null,
            
        
            
        ]);
        DB::table('users')->insert([
            
            'name' => 'Web-Master',
            'email' => 'web@web',
            'password' => Hash::make('123456789'),
            'role_id' => 3,
            // 'credit'=> null,
            
            
            
        ]);
    }
}
