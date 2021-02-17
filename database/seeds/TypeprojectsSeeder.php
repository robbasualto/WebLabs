<?php

use Illuminate\Database\Seeder;

class TypeprojectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeprojects')->insert([
            'id' => int::random(10),
            'name' => Str::random(10).'Laravel',
        ]);
    }
}

