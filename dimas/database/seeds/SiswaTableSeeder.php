<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'name' => 'Budi',
            'alamat' => 'Mandalajati, Bandung',
            'status' => 1,
        ]);

        DB::table('siswas')->insert([
            'name' => 'Bagus',
            'alamat' => 'SetiaBudi, Bandung',
            'status' => 1,
        ]);

        DB::table('siswas')->insert([
            'name' => 'Fajar',
            'alamat' => 'Jakarta',
            'status' => 0,
        ]);

        DB::table('siswas')->insert([
            'name' => 'Satya',
            'alamat' => 'Bekasi',
            'status' => 1,
        ]);
    }
}
