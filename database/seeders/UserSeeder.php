<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Elsa Zahra Setiawati',
                'username' => 'zahra',
                'email' => "elsa@gmail.com",
                'password' => bcrypt("apapapap"),
                'gender' => "Perempuan",
                'born_date' => "2004/10/28",
                'address' => "Jl. Sesuatu, Kab. Magelang",
                'role' => "user",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')

            ],
            [
                'name' => 'Geloria Marsela Nanda',
                'username' => 'gloria',
                'email' => "gloria@gmail.com",
                'password' => bcrypt("apapapap"),
                'gender' => "Perempuan",
                'born_date' => "2003/03/13",
                'address' => "Jl. Banyu Mili, Kab. Sleman",
                'role' => "user",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')

            ],
            [
                'name' => 'Dwi Arfian',
                'username' => 'dwi',
                'email' => "dwi@gmail.com",
                'password' => bcrypt("apapapap"),
                'gender' => "Laki-laki",
                'born_date' => "2004/04/12",
                'address' => "Jl. Selat Karimata, Kota Pekalongan",
                'role' => "user",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')

            ],
            [
                'name' => 'Salsabila Miftahul Atha',
                'username' => 'bila',
                'email' => "bila@gmail.com",
                'password' => bcrypt("apapapap"),
                'gender' => "Perempuan",
                'born_date' => "2004/05/12",
                'address' => "Jl. Kasongan, Kab. Bantul",
                'role' => "user",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Daffa Naufal Fathin',
                'username' => 'daffa',
                'email' => "daffa@gmail.com",
                'password' => bcrypt("apapapap"),
                'gender' => "Laki-laki",
                'born_date' => "2004/02/25",
                'address' => "Jl. Rendang Bangka, Kab. Bangka",
                'role' => "user",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => "admin@gmail.com",
                'password' => bcrypt("apapapap"),
                'gender' => "Laki-laki",
                'born_date' => "2012/12/12",
                'address' => "-",
                'role' => "admin",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
