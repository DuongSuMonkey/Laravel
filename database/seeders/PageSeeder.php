<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('pages')->insert([
            "id"=>1,
            'story_id'=>1,
            "name"=>'aaaa',
            "title"=>'ddd',
            "content"=>'1'
        ]);
    }
}
