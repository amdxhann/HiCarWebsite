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
            "email"  => "tenhag@gmail.com",
            "nama"  => "tenhag",
            "alamat"  => "Bangkalan",
            "tanggal_lahir"  => "2000-09-20",
            "jenis_kelamin"  => "Laki-Laki",
            "no_hp"  => "082156226440",
            "password"  => Hash::make ("tenhagjuara123"),
            ]]);

        
        DB::table('transactions')->insert([[
            "nama"  => "tenhag",
            "jaminan"  => "image.png",
            "email"  => "tenhag@gmail.com",
            "no_sim"  => "082111811933",
            "no_hp"  => "0821118119333",
            "durasi"  => "24 jam",
            ]]);

        DB::table('drivers')->insert([[
            "foto_profil" => "img.png",
            "nama"  => "Badrus",
            "usia"  => "39",
            "email"  => "drus@gmail.com",
            "no_sim"  => "098141811933",
            "no_hp"  => "08218119333",
        ]]);

        DB::table('cars')->insert([[
            "foto_mobil" => "img.png",
            "no_polisi"  => "S 9898 OK",
            "merk"  => "CRV HONDA",
            "tahun"  => "2012",
            "transmisi"  => "Matic",
        ]]);

        DB::table('login_admins')->insert([[
            "username"  => "admin",
            "password"  => Hash::make("admin"),
            "nama" => "administrator",
            "level" => "admin",
            ]]);  

        DB::table('login_customers')->insert([[
            "username"  => "admin",
            "password"  => Hash::make("admin"),
            "nama" => "administrator",
            "level" => "admin",
            ]]);  
    }
}