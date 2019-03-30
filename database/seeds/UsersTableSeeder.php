<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Robin',
            'email' => 'Robin@gmail.com',
            'password' => bcrypt('robin12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Olav',
            'email' => 'Olav@gmail.com',
            'password' => bcrypt('olav123456'),
        ]);
    }
}
