<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'id' => int::random(10),
            'name' => Str::random(10).'pedro',
            'rut' => Str::random(10),
            'gyre' => Str::random(10).'asdasd',
            'address' => Str::random(10).'@gmail.com',
            'phone' => int::random(10),
            'email' => Str::random(10).'@gmail.com',
            'city_id' => int::random(10)

        ]);
    }
}
