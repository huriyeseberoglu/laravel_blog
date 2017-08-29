<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User :: updateOrCreate([

            'name' => 'Huriye Şeberoğlu',
            'email' => 'huriye@projekod.com',
            'password' => bcrypt(123456)
            ]);
    }
}
