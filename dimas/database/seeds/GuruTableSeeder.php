<?php

use Illuminate\Database\Seeder;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'name' => str_random(10),
            'alamat' => str_random(10),
            'mapel' => 'Bahasa Indonesia',
            'status' => 1,
        ]);

        DB::table('gurus')->insert([
            'name' => str_random(10),
            'alamat' => str_random(10),
            'mapel' => 'Matematika',
            'status' => 0,
        ]);
    }
}
