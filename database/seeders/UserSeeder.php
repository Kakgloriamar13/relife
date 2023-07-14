<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::insert([
            [
                'name' => 'Elsa',
                'username' => 'zahra_',
                'email' => "elsa@email.com",
                'password' => "elsa12",
                'gander' => "P",
                'born_date' => "28 agustus 2003",
                'address' => "magelang",
                'role' => "user",

            ],
            [
                'name' => 'Gloria',
                'username' => 'ria_',
                'email' => "glo@email.com",
                'password' => "glo13",
                'gander' => "P",
                'born_date' => "13 maret 2003",
                'address' => "karangmalang",
                'role' => "admin",

            ],
            [
                'name' => 'Dwiar',
                'username' => 'dwiar_',
                'email' => "dwi@email.com",
                'password' => "dwi12",
                'gander' => "L",
                'born_date' => "12 april 2004",
                'address' => "pekalongan",
                'role' => "admin",

            ],
            [
                'name' => 'Salsaabila',
                'username' => 'salsa_',
                'email' => "bila@email.com",
                'password' => "bil11",
                'gander' => "P",
                'born_date' => "12 mei 2004",
                'address' => "yogyakarta",
                'role' => "user",
            ],
            [
                'name' => 'Daffa',
                'username' => 'daff_',
                'email' => "daffa@email.com",
                'password' => "daffa12",
                'gander' => "L",
                'born_date' => "14 juli 2004",
                'address' => "bangkabelitung",
                'role' => "user",
            ]
        ]);
    }
}
