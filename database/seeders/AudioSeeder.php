<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('audios')->insert([
            "id"=>1,
            'page_id'=>1,
            "name"=>'aaaa',
            "file_name"=>'ddd',
        ]);
    }
}
