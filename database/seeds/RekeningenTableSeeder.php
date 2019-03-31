<?php

use Illuminate\Database\Seeder;

class RekeningenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rekeningens')->insert([
            'Userid' => '1',
            'name' => 'Robin zijn rekening',
            'rekeningnummer' => 'NL80ABNA1911430777',
            'vermogen' => '100',
        ]);
        DB::table('rekeningens')->insert([
            'Userid' => '2',
            'name' => 'Olav zijn rekening',
            'rekeningnummer' => 'NL06ABNA6099101268',
            'vermogen' => '100',
        ]);
    }
}
