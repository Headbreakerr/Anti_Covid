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
                'phone' => '094382747362',
                'address' => 'kharadar karachi lyari',
                'email'=> 'hospital@gmail.com',
                'password'=> Hash::make('111'),
                'role' => 'hospital',
            ],

            // hospital


            [
                'name' => 'aga khan hospital',
                'phone' => '094382747362',
                'address' => 'karachi lyari',
                'email'=> 'agakhan@gmail.com',
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

        DB::table('vaccines')->insert([
            [
                'vaccinename'=>'fizer',
                'vaccinemanufacturing'=>'USA',
            ],
            [
                'vaccinename'=>'moderna',
                'vaccinemanufacturing'=>'UK',  
            ]
            ]);
    }
    }

