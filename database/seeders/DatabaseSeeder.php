<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    DB::table('customers')->insert([[
        "nama"  => "tenhag",
        "tanggal_lahir"  => "2000-09-20",
        "alamat"  => "Bangkalan",
        "no_sim"  => "082111633084",
        "jenis_kelamin"  => "Laki-Laki",
        "email"  => "tenhag@gmail.com",
        "no_hp"  => "082156226440",
        "password"  => Hash::make ("tenhagjuara123"),
        "image"  => "profil.jpg",
        ],[
        "nama"  => "tenhag",
        "tanggal_lahir"  => "2009-09-27",
        "alamat"  => "Tarogan",
        "no_sim"  => "082111811933",
        "jenis_kelamin"  => "Laki-Laki",
        "email"  => "tenhagasek@gmail.com",
        "no_hp"  => "082156226666",
        "password"  => Hash::make ("tenhagjuaraamin"),
        "image"  => "ganbteng.jpg",
        ]]);

        DB::table('admins')->insert([[
            "nama"  => "tenhag",
            "tanggal_lahir"  => "2000-09-20",
            "alamat"  => "Bangkalan",
            "jenis_kelamin"  => "Laki-Laki",
            "email"  => "tenhag@gmail.com",
            "no_hp"  => "082156226440",
            "password"  => Hash::make ("tenhagjuara123"),
            "image"  => "profil.jpg",
            ],[
            "nama"  => "tenhag",
            "tanggal_lahir"  => "2009-09-27",
            "alamat"  => "Tarogan",
            "jenis_kelamin"  => "Laki-Laki",
            "email"  => "tenhagasek@gmail.com",
            "no_hp"  => "082156226666",
            "password"  => Hash::make ("tenhagjuaraamin"),
            "image"  => "ganbteng.jpg",
            ]]);
    }
}