<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         \DB::table('stories')->insert([
            "id"=>1,
            "name"=>'aaaa',
            "author"=>'ddd',
            "genre"=>'aaaa',
            "status"=>'complete',
            "content"=>'aaaaaaaaaaaaaaaaaaaaaaaaa'
        ]);
    }
}
