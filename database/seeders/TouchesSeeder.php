<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TouchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('touches')->insert([
            "id"=>1,
            "page_id"=>'1',
            "XPos"=>'0',
            "YPos"=>'0',
            'Width'=>1,
            'Height'=>0,
        ]);
    }
}
