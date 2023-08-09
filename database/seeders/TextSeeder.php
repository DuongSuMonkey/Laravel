<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('text')->insert([
            "id"=>1,
            "name"=>'aaaa',
            "content"=>'ddd',
            "audio_id"=>'1',
            'page_id'=>1,
            'Xpos'=>0,
            'YPos'=>0
        ]);
    }
}
