<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $kategori = [
            [
                'nama' => 'admin',
            ],
            [
                'nama' => 'user',
            ]
        ];

        Kategori::insert($kategori);
        $user = [
            [
                'name' => 'riska',
                'email' => 'riska44@gmail.com',
                'password' => \bcrypt('riskaka'),
                'kategori_id' => 1,
            ],
            [
                'name' => 'riris',
                'email' => 'riris1@gmail.com',
                'password' => \bcrypt('riskacantik'),
                'kategori_id' => 2,
            ]
        ];
        User::insert($user);
    }
}
