<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersender extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            "id"=>1,
            "taikhoan"=>'admin',
            "password"=>'12345',
            "name"=>'t',
            "sex"=>'nam',
            "age"=>8,
            "Type"=>'admin',
        ]);
    }
}
