<?php

use Illuminate\Database\Seeder;

class BetalingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('betalings')->insert([
            'Verzoekid' => '1',
            'Paymentstatus' => 'paid',
            'Personid' => '2',
            'Paymentid' => '10',
            'Notities' => 'Hoi sorry dat ik het zo laat betaal.',
        ]);
        DB::table('betalings')->insert([
            'Verzoekid' => '2',
            'Paymentstatus' => 'paid',
            'Personid' => '1',
            'Paymentid' => '15',
            'Notities' => 'Hopelijk heb hier genoeg aan :p',
        ]);
    }
}
