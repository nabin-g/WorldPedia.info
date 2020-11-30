<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'fname' => 'grafias',
            'lname' => 'technology',
            'email' => 'support@grafiastech.com',
            'password' => bcrypt('secret'),
            'is_super' => 1,
        ]);
    }
}
