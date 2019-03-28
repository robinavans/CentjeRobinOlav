<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Robin',
            'email' => 'Robin'.'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('betaal_verzoekens')->insert([
            'Userid' => '1',
            'Rekeningid' => '1',
            'name' => 'Eten',
            'description' => 'Zou je dit willen betalen?',
            'amount' => '100',
            'amountpaid' => 0,
            'valuta' => 'Euro',
            'created_at' => '2019-03-27 13:30:16',
            'updated_at' => '2019-03-27 13:30:16',
        ]);
        DB::table('rekeningens')->insert([
            'Userid' => '1',
            'name' => 'Eerste rekening',
            'rekeningnummer' => '1234SNSB2023289328942',
            'vermogen' => '100',
        ]);
    }
}
