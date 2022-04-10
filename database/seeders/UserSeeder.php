<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Felysia Inaz Gianina',
            'email' => 'felysiainaz@gmail.com',
            'password' => Hash::make('felysia'),
            'phone_number' => '081381232122',
            'avatar' => '',
            'role' => 'admin',
            'created_at' => now(), 
            'updated_at' => now()
        ]);
    }
}
