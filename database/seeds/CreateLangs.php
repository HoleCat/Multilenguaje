<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateLangs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert(['name' => 'Spanish', 'code' => 'es']);
        DB::table('languages')->insert(['name' => 'Korean', 'code' => 'ko']);
    }
}
