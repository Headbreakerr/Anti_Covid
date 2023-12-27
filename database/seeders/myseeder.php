<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
class myseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            //Admin

            [
                'name' => 'Admin',
                'phone' => 'null',
                'address' => 'null',
                'email'=> 'admin@gmail.com',
                'password'=> Hash::make('111'),
                'role' => 'admin',
            ],

            // hospital


            [
                'name' => 'hospital',
                'phone' => 'null',
                'address' => 'null',
                'email'=> 'hospital@gmail.com',
                'password'=> Hash::make('111'),
                'role' => 'hospital',
            ],


            // patient

            [
                'name' => 'patient',
                'phone' => 'null',
                'address' => 'null',
                'email'=> 'patient@gmail.com',
                'password'=> Hash::make('111'),
                'role' => 'patient',  
            ]
        ]);
    }
    }

