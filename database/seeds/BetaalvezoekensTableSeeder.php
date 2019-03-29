<?php

use Illuminate\Database\Seeder;

class BetaalvezoekensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('betaal_verzoekens')->insert([
            'Userid' => '1',
            'Rekeningid' => '1',
            'name' => 'Mijn eerste betaalverzoek!',
            'description' => 'Zou je dit willen betalen?',
            'amount' => '10',
            'amountpaid' => 0,
            'valuta' => 'EUR',
            'verloopdatum' => '2019-03-30',
            'created_at' => '2019-03-27 13:30:16',
            'updated_at' => '2019-03-27 13:30:16',
        ]);

        DB::table('betaal_verzoekens')->insert([
            'Userid' => '2',
            'Rekeningid' => '2',
            'name' => 'Mijn eerste betaalverzoek!',
            'description' => 'Zou je dit willen betalen?',
            'amount' => '15',
            'amountpaid' => 0,
            'valuta' => 'EUR',
            'verloopdatum' => '2019-03-31',
            'created_at' => '2019-03-28 13:30:16',
            'updated_at' => '2019-03-28 13:30:16',
        ]);
    }
}
