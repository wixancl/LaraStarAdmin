<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
         	'name' => 'admin',
            'email' => 'admin@admin.cl',
            'email_verified_at' => 'admin@admin.cl',
            'imagen' => '1234567890.0',
            'password'  => bcrypt('1234567890'),
            'created_at' => now(), 
            'updated_at' => now(),

            
     ]);
    }
}
