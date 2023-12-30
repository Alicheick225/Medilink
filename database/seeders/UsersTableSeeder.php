<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')-> insert([
            //Recuperation des info de connexion de l'Admin dans la BD
            [
                'name' => 'Admin',
                'user_name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin@'),
                'role' => 'admin',
                'status' => 'actif',
            ],

            //Recuperation des info de connexion de dorteur dans la BD
            [
                'name' => 'Doctor',
                'username' => 'doctor',
                'email' => 'docteur@gmail.com',
                'password' => Hash::make('docteur@'),
                'role' => 'docteur',
                'status' => 'actif'
            ],


            //Recuperation des info de connexion de l'utilisateur dans la BD
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user@'),
                'role' => 'user',
                'status' => 'actif'
            ],

             
        ]);
    }
}
